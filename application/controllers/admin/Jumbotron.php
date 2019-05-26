<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jumbotron extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jumbotron_model');
		$this->load->library('form_validation');
		if (!$this->session->userdata('email')){
			redirect('forbidden','refresh');
		}
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$data['jumbotron']=$this->jumbotron_model->getAll();
		$data['upload']=$this->jumbotron_model->limit();
		$this->load->view('admin/jumbotron/list', $data);
		
	}
	public function add()
	{
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$jumbotron=$this->jumbotron_model;
		$validation=$this->form_validation;
		$validation->set_rules($jumbotron->rules());

		if($validation->run()){
			
			$jumbotron->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			header("Refresh:3;url=".site_url('admin/jumbotron'));
		}
		$this->load->view('admin/jumbotron/new_form',$data);
	}
	public function edit($id=null)
	{
		if(!isset($id)) redirect('admin/jumbotron');

		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$jumbotron=$this->jumbotron_model;
		$validation=$this->form_validation;
		$validation->set_rules($jumbotron->rules());

		if ($validation->run())
		{
			$jumbotron->update();
			$this->session->set_flashdata('success','Berhasil disimpan');
   			header("Refresh:3;url=".site_url('admin/jumbotron'));
   			//redirect(site_url('admin/jumbotron'));
		}

		$data['jumbotron']=$jumbotron->getById($id);
		if (!$data['jumbotron']) show_404();

		$this->load->view('admin/jumbotron/edit_form', $data);
	}
	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if ($this->jumbotron_model->delete($id))
		{
			redirect(site_url('admin/jumbotron'));
		}
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/admin/Berita.php */