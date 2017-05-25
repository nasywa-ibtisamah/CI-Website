<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');

	}

	function index(){
		$data['err_message'] = "";
		if($this->session->userdata('status') != "Login"){
			$this->load->view('v_login', $data);
		}else{ 
			echo "YOU'RE ALREADY LOGGED IN";
		}
		
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

	function aksi_login(){
		$username = $_POST['username'];
		$password = $this->enkripsi($_POST['pass']);
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->M_login->cek_login("user",$where);
		if($cek->num_rows()==1){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("user"));

		}else{
			$data['err_message'] = "PASSWORD SALAH";
			$this->load->view('v_login', $data);
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}