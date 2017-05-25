<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpaket_logged extends CI_Controller {

	public function __construct() {
  		parent::__construct();

 	}
	
	public function index() {
		$this->load->view('/logged/user_paket1');
	}
	public function paket2(){
		$this->load->view('/logged/user_Paket2');
	}
	public function paket3(){
		$this->load->view('/logged/user_Paket3');
	}
	public function paket4(){
		$this->load->view('/logged/User_Paket4');
	}	
}