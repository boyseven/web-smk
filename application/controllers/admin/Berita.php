<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
		$this->load->library('form_validation');
		if (!$this->session->userdata('email')){
			redirect('forbidden','refresh');
		}
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$data['berita']=$this->berita_model->getAll();
		$data['upload']=$this->berita_model->limit();
		$this->load->view('admin/berita/list', $data);
		
	}
	public function add()
	{
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$berita=$this->berita_model;
		$validation=$this->form_validation;
		$validation->set_rules($berita->rules());

		if($validation->run()){
			
			$berita->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			header("Refresh:3;url=".site_url('admin/berita'));
		}
		$this->load->view('admin/berita/new_form',$data);
	}
	public function edit($id=null)
	{
		if(!isset($id)) redirect('admin/berita');

		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$berita=$this->berita_model;
		$validation=$this->form_validation;
		$validation->set_rules($berita->rules());

		if ($validation->run())
		{
			$berita->update();
			$this->session->set_flashdata('success','Berhasil disimpan');
   			header("Refresh:3;url=".site_url('admin/berita'));
   			//redirect(site_url('admin/berita'));
		}

		$data['berita']=$berita->getById($id);
		if (!$data['berita']) show_404();

		$this->load->view('admin/berita/edit_form', $data);
	}
	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if ($this->berita_model->delete($id))
		{
			redirect(site_url('admin/berita'));
		}
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/admin/Berita.php */