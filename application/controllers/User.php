<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_user');
	} 

	public function index(){
		$data['admin'] = $this->db->get_where('admin', ['email'=>
			$this->session->userdata('email')])->row_array();

		$data['user']=$this->db->get('admin')->result_array();


		$this->form_validation->set_rules('nip','NIP', 'required|trim');
		$this->form_validation->set_rules('username','Username', 'required|trim');
		$this->form_validation->set_rules('password','Password', 'required');
		$this->form_validation->set_rules('email','Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('name','Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('jabatan','Jabatan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/index', $data); 
			$this->load->view('templates/footer');
		} else{
			$this->Model_user->tambahDataUser();

			$this->session->set_flashdata('message','
				<div class="alert alert-success alert-dismissible fade show col-md-6" role="alert">
					<strong>New User Added !!!</strong>
				  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    	<span aria-hidden="true">&times;</span>
				  	</button>
				</div>');
			redirect('user');
		}
	}

	public function edit($id){

		$data['admin'] = $this->db->get_where('admin', ['email'=>
			$this->session->userdata('email')])->row_array();

		$data['admin'] = $this->Model_user->getUserById($id);
		$data['jabatan'] = ['Super Admin', 'Admin MOU','Admin PKS'];

		$this->form_validation->set_rules('nip','NIP', 'required|trim');
		$this->form_validation->set_rules('username','Username', 'required|trim');
		$this->form_validation->set_rules('password','Password', 'required');
		$this->form_validation->set_rules('email','Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('name','Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('jabatan','Jabatan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/edit', $data); 
			$this->load->view('templates/footer');
		} else{

			$this->Model_user->editDataUser();

			$this->session->set_flashdata('message','
				<div class="alert alert-success alert-dismissible fade show col-md-6" role="alert">
					<strong>Succes to Edit !!!</strong>
				  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    	<span aria-hidden="true">&times;</span>
				  	</button>
				</div>');
			redirect('user');
		}

	}

	public function delete($id){
		$this->Model_user->hapusDataUser($id);

		$this->session->set_flashdata('message','
			<div class="alert alert-danger alert-dismissible fade show col-md-6" role="alert">
				<strong>Delete Success!!!</strong>
			  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    	<span aria-hidden="true">&times;</span>
			  	</button>
			</div>');
		redirect('user');
	}
}