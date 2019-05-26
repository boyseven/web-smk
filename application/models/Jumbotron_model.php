<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jumbotron_model extends CI_Model {

	private $_table='jumbotron';

	public $id;
	public $judul;
	public $deskripsi;
	public $gambar;
	public $tampil;

	public function rules()
	{
		return[
			['field'=>'judul',
			'label' => 'Judul',
			'rules' => 'required'],
			['field'=>'deskripsi',
			'label' => 'Deskripsi',
			'rules' => 'required'],
			['field'=>'tampil',
			'label' => 'Tampil',
			'rules' => 'required']
		];
	}
	public function getAll()
	{
		$this->db->order_by('date_created', 'desc');
		return $this->db->get($this->_table)->result();
	}
	public function getById($id)
	{
		return $this->db->get_where($this->_table,['id'=>$id])->row();
	}
	public function limit()
	{
		$this->db->order_by('date_created', 'desc');
		$this->db->limit(1);
		return $this->db->get($this->_table)->result();
	}
	public function save()
	{
		
		$post=$this->input->post();
		$this->id=uniqid();
		$this->judul=$post['judul'];
		$this->deskripsi=$post['deskripsi'];
		$this->gambar=$this->_uploadImage();
		if(isset($_POST["tampil"])=="on")
		{
		  $tampil = array("tampil"=>"ya");
		  $data=array_merge($data,$tampil);
		} else { 
		  $Tampil = array("tampil"=>"tidak");
		  $data=array_merge($data,$tampil);
		}
		$this->tampil=$post['tampil'];
		
		$this->db->insert($this->_table, $this);
	}
	public function update()
	{
		$post=$this->input->post();
		$this->id=$post['id'];
		$this->judul=$post['judul'];
		$this->deskripsi=$post['deskripsi'];

		if (!empty($_FILES["gambar"]["name"])) {
		    $this->gambar = $this->_uploadImage();
		} else {
		    $this->gambar = $post["old_image"];
		}

		$this->tampil=$post['tampil'];

		$this->db->update($this->_table, $this, array('id' => $post['id']));
	}
	public function delete($id)
	{	
		$this->_deleteImage($id);
		return $this->db->delete($this->_table, array('id'=>$id));
	}
	private function _uploadImage()
	{
	    $config['upload_path']          = './upload/jumbotron/';
	    $config['allowed_types']        = 'gif|jpg|png|jpeg';
	    $config['file_name']            = $this->judul;
	    $config['overwrite']			= true;

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('gambar')) {
	        return $this->upload->data("file_name");
	    }
	    
	    return "default.jpg";
	}
	private function _deleteImage($id)
	{
	    $jumbotron = $this->getById($id);
	    if ($jumbotron->gambar != "default.jpg") {
		    $filename = explode(".", $jumbotron->gambar)[0];
			return array_map('unlink', glob(FCPATH."upload/jumbotron/$filename.*"));
	    }
	}


}

/* End of file Berita_model.php */
/* Location: ./application/models/Berita_model.php */