<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branda extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->helper('date');
		$this->load->model('Home_model');
    }

	public function index()
	{	
		$data['page_title'] =('SMKN 1 BATUMANDI'); //will be available as $page_title in view
		$data['berita']	=$this->Home_model->TampilBerita();
		$data['ticker']	=$this->Home_model->get_ticker();
		$this->load->view('v_branda',$data);
	}
	function detail ($slug){

		$data['page_title'] =('SMKN 1 BATUMANDI | ');
		$data['ticker']	=$this->Home_model->get_ticker();
		$data['berita_d']	=$this->Home_model->get_by_slug($slug);
		$this->load->view('v_detail',$data);
	}

}

/* End of file Branda.php */
/* Location: ./application/controllers/Branda.php */