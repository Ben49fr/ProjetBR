<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Photographe extends Element {

	public $id_photographe;
	public $nom_photographe;
	public $pseudo_photographe;
	public $mot_passe_photographe;
	public $logo;

	protected static $table = 'photographe';
	protected static $primaryKey = 'id_photographe';

	public static function getByPseudo ($pseudo)
	{
		$query = 'SELECT * FROM '.static::$table.' WHERE pseudo_photographe =?';
		$objectArray = self::$db->query($query, array($pseudo))->row();

		$obj = new static();
		$obj->init($objectArray);

		return $obj;
	}

	public function checkPassword($password)
	{
		return (md5($password) == $this->mot_passe_photographe);
	}
} 