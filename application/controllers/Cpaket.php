<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpaket extends CI_Controller {

	public function __construct() {
  		parent::__construct();

 	}
	
	public function index() {
		$this->load->view('Paket1');
	}
	public function paket2(){
		$this->load->view('Paket2');
	}
	public function paket3(){
		$this->load->view('Paket3');
	}
	public function paket4(){
		$this->load->view('Paket4');
	}	
}