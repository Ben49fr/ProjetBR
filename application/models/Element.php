<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Element extends CI_Model {

	static $db;

	protected static $table = '';
	protected static $primaryKey = '';
	//Must be declared on subclases

	protected static $fieldsToUnUpdate = array();

	function __construct() {
		parent::__construct();
		self::$db = &get_instance()->db;
	}

	public static function getById($id)
	{
		$query = 'SELECT * FROM '.static::$table.' WHERE '.static::$primaryKey.' =?';
		$objectArray = self::$db->query($query, array($id))->row();

		$obj = new static();
		$obj->init($objectArray);

		return $obj;
	}

	public function init($objectArray = array())
	{
		if (!(is_array($objectArray)) && !(is_object($objectArray))) {
			$objectArray = array();
		}

		foreach ($objectArray as $attribute => $value) {
			$this->$attribute = $value;
		}
	}

	public static function getList($params = array()){
        $listObjs = array();

        $query = 'SELECT * FROM  '.static::$table;
         if (count($params)) {
            $query .= ' WHERE ';

            $i = 0;
            foreach ($params as $column => $value) {
                $i++;
                if ($i > 1) {
                   $query .= ' AND ';
                }
                $query .= $column.' = "'.$value.'"';
            }
            $query .= ';';
        }

        $ObjsArray = self::$db->query($query)->result();

        foreach ($ObjsArray as $ObjArray) {
            $obj = new static();
            $obj->init($ObjArray);

            $listObjs[] = $obj;
        }

        if (is_array($listObjs)) {
			return $listObjs;
		} else {
			return null;
		}
  }

	public static function getOne($params) {

		$objects = self::getList($params);

		if (is_array($objects) && isset($objects[0])) {
			return $objects[0];
		} else {
			return null;
		}
	}

	public function update() {

		$primaryKey = static::$primaryKey;
		$return = 0;

		if(isset($this->$primaryKey) && $this->$primaryKey != "") {
			$query = 'UPDATE '.static::$table;

			$i = 0;
			foreach (get_object_vars($this) as $attribute => $value) {
				if ($attribute != $primaryKey && !in_array($attribute, static::$fieldsToUnUpdate)) {
					$i++;
					if ($i > 1) {
						$query .= ',';
					} elseif ($i == 1) {
						$query .= ' SET';
					}
					$query .= ' '.$attribute.' = "'.$value.'"';
				}
			}

			$query .= ' WHERE '.$primaryKey.' = "'.$this->$primaryKey.'";';

			$return = $this->db->query($query);
		} else {
			$query = 'INSERT INTO '.static::$table;

			$i = 0;
			foreach (get_object_vars($this) as $attribute => $value) {
				if ($attribute != $primaryKey && !in_array($attribute, static::$fieldsToUnUpdate)) {
					$i++;
					if ($i > 1) {
						$query .= ',';
					} elseif ($i == 1) {
						$query .= ' SET';
					}
					$query .= ' '.$attribute.' = "'.$value.'"';
				}
			}

			if ($return = $this->db->query($query)) {
				$this->$primaryKey = $this->db->insert_id();
			}
		}

		if (method_exists($this, 'myAfterUpdate')) {
			$return = $this->myAfterUpdate();
		}

		return $return;
	}

	public function delete() {
		$primaryKey = static::$primaryKey;

		if(isset($this->$primaryKey) && $this->$primaryKey != "") {
			$query = 'DELETE FROM '.static::$table.' WHERE '.$primaryKey.' = "'.$this->$primaryKey.'";';
			$return = $this->db->query($query);

			if (method_exists($this, 'myAfterDelete')) {
				$return = $this->myAfterDelete();
			}
		}

		return $return;
	}
}
