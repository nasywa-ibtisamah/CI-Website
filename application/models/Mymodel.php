<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	Class Mymodel extends CI_Model{

		// public function login_authen($username, $password){
		// 	$this->db->select('*');
		// 	$this->db->where('username', $username);
		// 	$this->db->where('password', $password);
		// 	$this->db->from('user');

		// 	$query = $this->db->get();

		// 	if ($query->num_rows() == 1) {
		// 	 return true;
		// 	}
		// 	else{
		// 	 return false;
		// 	} 
		// }

		// function authen_user($username){
		// 	 $this->db->where('username', $username);
		// 	 $this->db->from('user');
		// 	 $query = $this->db->get();
		// 	 return $query->result_array();
		// } 


		function getData() {
 			$query = $this->db->get('purchase_order');
 			return $query->result_array();
 		}

 		function getDataUser() {
 			$query = $this->db->get('user');
 			return $query->result_array();
 		}

		function addData($data) {
 			$this->db->insert('user', $data);  
 		}

 		function addOrder($data) {
 			$this->db->insert('purchase_order', $data);  
 		}


 		function delete_item($item){
			 $this->db->where_in('id', $item);
			 $this->db->delete('purchase_order');
		}

		function delete_user($item){
			 $this->db->where_in('id', $item);
			 $this->db->delete('user');
		}
			function edit_data($where, $table){
			return $this->db->get_where($table, $where);
		}
		function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

	}
?>