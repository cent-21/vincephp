<?php
namespace App\Controllers;

use App\Service\Database;
use App\Service\FormValidator;


class MainController{

	public $input = [];
	public $validator;
	public $db;

	public function __construct() {		
		$this->input = $_POST;
		$this->db = Database::getDB();
		$this->validator = new FormValidator;
	}




	public function index() {
		render('index');
	}



}