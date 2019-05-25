<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {
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
		// load view admin/overview
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$data['berita']=$this->berita_model->getAll();
		$data['upload']=$this->berita_model->limit(); 
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Selamat datang '.$data['user']['name'].'</div>');
		$this->load->view('admin/overview', $data);
	}

	public function my_profile()
	{
		// load view admin/my_profile
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/my_profile', $data);
	}

	public function edit()
	{
		//load view edit_profile
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('name', 'Full name', 'required|trim');

		if ($this->form_validation->run() == false){
			$this->load->view('admin/edit_profile', $data);
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');

			// cek jika ada gambar yang akan diupload
			$upload_image = $_FILES['image'];

			if ($upload_image){

				$config['upload_path']          = './upload/user/';
			    $config['allowed_types']        = 'gif|jpg|png|jpeg';
			    $config['overwrite']			= true;
			    $config['max_size']             = 1024; // 1MB
			    $config['max_width']            = 1280;
			    $config['max_height']           = 853;

			    $this->load->library('upload', $config);

			    if ($this->upload->do_upload('image')){
			    	$old_image = $data['user']['image'];
			    	if ($old_image !='default.jpg'){
			    		unlink(FCPATH .'upload/user/'.$old_image);
			    	}

			    	$new_image = $this->upload->data('file_name');
			    	$this->db->set('image', $new_image);
			    } else {
			    	echo $this->upload->display_errors();
			    }
				
			}


			$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
			redirect('admin/overview/my_profile');

		}
	}


	public function changepassword()
	{
		// load view admin/my_profile
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('current_password','Current password', 'required|trim');
		$this->form_validation->set_rules('new_password1','New password', 'required|trim|min_length[6]|matches[new_password2]',['matches'=>'Password dont match!','min_length'=>'Password too short!']);
		$this->form_validation->set_rules('new_password2','Confirm new password', 'required|trim|min_length[6]|matches[new_password1]',['matches'=>'Password dont match!','min_length'=>'Password too short!']);

		if ($this->form_validation->run()==false){
			$this->load->view('admin/change_password', $data);
		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if (!password_verify($current_password,$data['user']['password'])){
				$this->session->set_flashdata('message_password','<div class="alert alert-danger" role="alert">Wrong current password!</div>');
				redirect('admin/overview/changepassword');
			} else {
				if($current_password == $new_password){
					$this->session->set_flashdata('message_password','<div class="alert alert-danger" role="alert">New pssword cannot be the same as current password!</div>');
						redirect('admin/overview/changepassword');
				} else {
					//password sudah ok
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password',$password_hash);
					$this->db->where('email',$this->session->userdata('email'));
					$this->db->update('user');
					
					$this->session->set_flashdata('message_password','<div class="alert alert-success" role="alert">Password changed!</div>');
					redirect('admin/auth/logout');
				}
			}
		}
	}

}

/* End of file Overview.php */
/* Location: ./application/controllers/admin/Overview.php */