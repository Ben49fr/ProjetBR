<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends Element {

	protected static $table = 'news';
	protected static $primaryKey = 'id';

	public $id;
	public $title = "";
	public $date = "";
	public $content = "";

}
