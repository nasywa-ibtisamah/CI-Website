<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
  		parent::__construct();
  		$this->load->model('Mymodel');
 	}
	
	public function index() {
		if($this->session->userdata('status') != "login"){
			$this->load->view('home');
		}else{ 
			$this->load->view('logged/home_user');
		}
	}

	public function registerData() {
		$data = array(
	    'username' => $this->input->post('username'),
	    'password' => $this->enkripsi($this->input->post('password')),
	    'name' => $this->input->post('name'),
	    'email' => $this->input->post('email'),
	    'nomor' => $this->input->post('nomor'),
	    'alamat'=> $this->input->post('alamat')
	   );

	  $this->Mymodel->addData($data);
	  $data['err_message'] = "REGISTER SUKSES";
	  $this->load->view('v_login', $data);
	}

	
	public function register(){
		$this->load->view('register');
	}

	public function home(){
		$this->load->view('home');
	}
	public function carapesan() {
		$this->load->view('cara-pesan');
	}

	public function enkripsi($en) {
      $kata = $en;
  
   //mengubah string menjadi array karakter
    $arrHuruf = str_split($kata);

    $enkripsi = "";

    //proses enkripsi
    foreach ($arrHuruf as $tmp){
      $enkripsi .= chr(ord($tmp)+3); //chr= return specific character 
    }
    return $enkripsi;
  }
  
  public function dekripsi($de) {
  
    $arrHuruf = str_split($de);
    $dekripsi = "";
    
    //proses dekripsi
    foreach ($arrHuruf as $tmp){
      $dekripsi .= chr(ord($tmp)-3);
    }
      return $dekripsi;
    } 
  }


?>
