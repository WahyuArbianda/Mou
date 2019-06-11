<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_model {

	public function tambahDataUser(){
		$data = [
			"id_admin" => rand(1,100).substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 3),
			"id_tipe" =>rand(10,100),
			"nip" => $this->input->post('nip'),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
			"email" => $this->input->post('email', true),
			"nama"=> $this->input->post('name', true),
			"jabatan"=> $this->input->post('jabatan',true)
		];
		$this->db->insert('admin', $data);
	}

	public function getUserById($id){
		return $this->db->get_where('admin',['id_admin' => $id])->row_array();
	}

	public function hapusDataUser($id){
		$this->db->where('id_admin',$id);
		$this->db->delete('admin');
	}

	public function editDataUser(){
		$data = [
			"nip" => $this->input->post('nip'),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
			"email" => $this->input->post('email', true),
			"nama"=> $this->input->post('name', true),
			"jabatan"=> $this->input->post('jabatan',true)
		];
		$this->db->where('id_admin',  $this->input->post('id'));
		$this->db->update('admin',$data); 
	}
}