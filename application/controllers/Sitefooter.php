<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitefooter extends CI_Controller {

	public function __construct() {
  		parent::__construct();

 	}
	
	public function index() {
		$this->load->view('us');
	}
	public function privacy() {
		$this->load->view('kebijakan');
	}
	public function terms() {
		$this->load->view('peraturan');
	}


}