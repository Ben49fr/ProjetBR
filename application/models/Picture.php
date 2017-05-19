<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Picture extends Element {

	protected static $table = 'picture';
	protected static $primaryKey = 'id';

	protected static $fieldsToUnUpdate = array('picture', 'file');

	public $id;
    public $galleryId;
	public $title = "";
	public $picture = "";
	public $description = "";
	public $place = "";
	public $date = "";
	public $file = "";

	protected function uploadPicutre() {
        $error = 0;
        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
        $extension = strrchr($this->file['name'], '.');

        //Début des vérifications de sécurité...
        if(!in_array($extension, $extensions)) {//Si l'extension n'est pas dans le tableau
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

            if(!move_uploaded_file($this->file['tmp_name'], $dossier . $fichier)) {//Si la fonction renvoie TRUE, c'est que ça a fonctionné...
                $error++;
            } else {
                $this->picture = $fichier;
            }
        }

        if ($error == 0) {
            $return = true;
        } else {
            $return = false;
        }

		return $return;
    }

	public function myAfterUpdate() {

		$return = true;

		if ($return && $this->file != "") {
			$this->uploadPicutre();

			$query = 'UPDATE '.static::$table.' SET picture = "'.$this->picture.'" WHERE '.static::$primaryKey.' = "'.$this->id.'";';

			$return = $this->db->query($query);
		}

		return $return;
	}

	public function myAfterDelete() {

		$return = true;

		if (is_dir($this->getFolder(true)) && is_file($this->getFolder(true).$this->picture)) {
			unlink($this->getFolder(true).$this->picture);
		}

		return $return;
	}

	public function getFolder($serverPath = false)
	{
        $gallery = Gallery::getById($this->galleryId);

		if ($serverPath) {
			$return = FCPATH.'Public/galleries/'.$gallery->name.'-'.$gallery->id.'/';
		} else {
			$return = base_url().'Public/galleries/'.$gallery->name.'-'.$gallery->id.'/';
		}

		return $return;
	}

	public function getLink()
	{
		return $this->getFolder().$this->picture;
	}

	public static function reArrayFiles(&$file_post)
	{
	    $file_ary = array();
	    $file_count = count($file_post['name']);
	    $file_keys = array_keys($file_post);

	    for ($i=0; $i<$file_count; $i++) {
	        foreach ($file_keys as $key) {
	            $file_ary[$i][$key] = $file_post[$key][$i]['file'];
	        }
	    }

	    return $file_ary;
	}
}
