<?php 
 
class User extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("user"));
		}else{ 
			$this->load->view('logged/home_user');
		}
	}

	function about(){
		$this->load->view('logged/about');
	}

	function services(){
		$this->load->view('logged/services');
	}

	function order(){
		$notif['status'] = "";
		$this->load->view('logged/order', $notif);
	}

	public function bookingProduk() {
		$data = array(
		'info_user' => $this->session->userdata('nama'),
	    'fountain' => $this->input->post('fountain'),
	    'metode_pembayaran' => $this->input->post('metode_pembayaran'),
	    'catatan' => $this->input->post('catatan')
	   );

	  $this->mymodel->addOrder($data);
	  $notif['status'] = "Order Telah dikirim";
	  $this->load->view('logged/order', $notif);
	}

}