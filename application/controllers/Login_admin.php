<?php 
 
class Login_admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('M_login');
	}
 
	function index(){
		$data['err_message'] = ""; 
		$this->load->view('v_loginadmin', $data);
	}

	function aksi_login(){
		$username = $_POST['useradmin'];
		$password = $_POST['passadmin'];
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->M_login->cek_login("admin",$where);
		if($cek->num_rows()==1){

			$data_session = array(
				'nama' => $username,
				'status' => "admin"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));

		}else{
			$data['err_message'] = "PASSWORD SALAH";
			$this->load->view('v_loginadmin', $data);
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}