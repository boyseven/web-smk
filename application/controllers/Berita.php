<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('date');
        $this->load->model('Home_model');
    }
    public function index()
    { 
        $data['page_title'] =('SMKN 1 BATUMANDI | ');
        $data['berita']	=$this->Home_model->get_all();
		$data['ticker']	=$this->Home_model->get_ticker();
		$this->load->view('v_berita',$data);
    }
}
        
    /* End of file  Berita.php */
