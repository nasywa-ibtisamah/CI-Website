<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produklain extends CI_Controller {

	public function __construct() {
  		parent::__construct();

 	}
	
	public function index() {
		$this->load->view('gleg');
	}
	public function mente(){
		$this->load->view('mente');
	}
	public function huruf(){
		$this->load->view('huruf');
	}
	public function chocojar(){
		$this->load->view('chocojar');
	}

}