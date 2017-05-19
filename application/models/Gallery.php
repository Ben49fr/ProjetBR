<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends Element {

	protected static $table = 'gallery';
	protected static $primaryKey = 'id';

	protected static $fieldsToUnUpdate = array('picture', 'file', 'oldName');

	public $id;
	public $name = "";
	public $picture = "";
	public $shortDescription = "";
	public $description = "";
	public $file = "";
	public $oldName = "";

	protected function uploadPicutre() {
        $error = 0;
        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
        $extension = strrchr($this->file['name'], '.');

        //Début des vérifications de sécurité...
		if(!in_array($extension, $extensions)) {
			//Si l'extension n'est pas dans le tableau
			$error++;
		}
        $taille_maxi = 300000000; //Valeur en Octects
        $taille = filesize($this->file['tmp_name']);
		if($taille>$taille_maxi) {
			$error++;
		}
        if($error == 0) { //S'il n'y a pas d'erreur, on upload
            $fichier = basename($this->file['name']);
            $fichier = strtr($fichier,
				'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
				'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy'
			);

			$fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
			$name = explode('.', $fichier);
			$fichier = uniqid().'-'.$name[0].$extension;
			$dossier = $this->getFolder(true);
			if ( ! is_dir($dossier)) {
				mkdir($dossier);
			}
            if(!move_uploaded_file($this->file['tmp_name'], $dossier . $fichier)) {
				//Si la fonction renvoie TRUE, c'est que ça a fonctionné...
				$error++;
			} else {
				$this->picture = $fichier;
			}
		}
        if ($error == 0) {
			return true;
		} else {
			return false;
		}
	}

	public function myAfterUpdate() {
		$return = true;
		if ($this->oldName != "") {
			if (rename($this->getFolder(true, true), $this->getFolder(true))) {
				$this->oldName = "";
			} else {
				$return = false;
			}
		}

		if ($return && $this->file != "") {
			$this->uploadPicutre();
			$query = 'UPDATE '.static::$table.' SET picture = "'.$this->picture.'" WHERE '.static::$primaryKey.' = "'.$this->id.'";';
			$return = $this->db->query($query);
		}

		return $return;
	}

	public function setName($name) {

		if ($this->name != "" && $name != $this->name) {
			$this->oldName = $this->name;
		}

		$this->name = $name;
	}

	public function getFolder($serverPath = false, $withOldName = false)
	{
		$name = $this->name;

		if ($withOldName) {
			$name = $this->oldName;
		}

		if ($serverPath) {
			return FCPATH.'Public/galleries/'.$name.'-'.$this->id.'/';
		}
		return base_url().'Public/galleries/'.$name.'-'.$this->id.'/';
	}

	public function getGaleriePicture()
	{
		return $this->getFolder().$this->picture;
	}

	public function getLink()
	{
		return base_url().'galerie/'.str_replace(' ', '-', $this->name);
	}
}
