<?php

class Unduh extends CI_Controller{

	function __construct(){
		parent::__construct();
    $this->load->model('M_upload');
    $this->load->helper('url');
		if($this->session->userdata('status') != "admin"){
			redirect(base_url("login_admin"));
		}
	}

	function index(){
    $data['upload'] = $this->M_upload->tampil_data()->result();
    $this->load->view('v_unduh',$data);
	}


}
