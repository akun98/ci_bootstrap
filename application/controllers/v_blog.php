<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class V_blog extends CI_Controller {

	public function index()
	{
		$this->load->model('list_Blog');
		$data['artikel'] = $this->list_Blog->get_artikels();
		$this->load->view('home_view', $data);
	}

	public function detail($id)
	{
		$this->load->model('list_Blog');
		$data['detail'] = $this->list_Blog->get_single($id);
		$this->load->view('home_detail', $data);
	}
}