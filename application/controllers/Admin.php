<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('Mymodel');
		if($this->session->userdata('status') != "admin"){
			redirect(base_url("login_admin"));
		}
	}
 
	function index(){
		if($this->session->userdata('status') != "admin"){
			redirect(base_url("admin"));
		}else{ 
			$data = $this->Mymodel->getData();
	 		$this->load->view('v_admin', array('data' => $data));
		}
	}

	function delete_order(){
		 $delete = $this->input->post('order');
		 $this->Mymodel->delete_item($delete);
		 redirect(base_url("admin"));
	}

	function delete_user(){
		 $delete = $this->input->post('user');
		 $this->Mymodel->delete_user($delete);
		 redirect(base_url("admin"));
	}

	function readUser(){
		$data = $this->Mymodel->getDataUser();
	 	$this->load->view('v_admindata', array('data' => $data));
	}
	 function edit($id){
		$where = array('id' => $id);
		$data['purchase_order'] = $this->Mymodel->edit_data($where,'purchase_order')->result();
		$this->load->view('edit_order',$data);
	}
  function update(){
	$id = $this->input->post('id');
	$tanggal = $this->input->post('tanggal');
	$info_user = $this->input->post('info_user');
	$fountain = $this->input->post('fountain');
	$metode_pembayaran = $this->input->post('metode_pembayaran');
	$catatan = $this->input->post('catatan');
	$status = $this->input->post('status');

	$data = array(
		'info_user' => $info_user,
		'tanggal' => $tanggal,
		'fountain' => $fountain,
		'metode_pembayaran' => $metode_pembayaran,
		'catatan' => $catatan,
		'status' => $status
	);

	$where = array(
		'id' => $id
	);

	$this->Mymodel->update_data($where,$data,'purchase_order');
	redirect('admin/index');
	}
}
