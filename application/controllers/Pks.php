<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pks extends CI_Controller {

	public function index(){
		$data['admin'] = $this->db->get_where('admin', ['email'=>
			$this->session->userdata('email')])->row_array();
		

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pks/index', $data);
		$this->load->view('templates/footer');
	}
}