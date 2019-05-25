<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

	private $_table='berita';

	public $id;
	public $judul;
	public $lead;
	public $content;
	public $tags;
	public $kategori;
	public $gambar='default.jpg';
	public $tanggal;
	public $penulis;

	public function rules()
	{
		return[
			['field'=>'judul',
			'label' => 'Judul',
			'rules' => 'required'],
			['field'=>'lead',
			'label' => 'Lead',
			'rules' => 'required'],
			['field'=>'content',
			'label' => 'Content',
			'rules' => 'required'],
			['field'=>'kategori',
			'label' => 'Kategori',
			'rules' => 'required'],
			['field'=>'tanggal',
			'label' => 'Tanggal',
			'rules' => 'required'],
			['field'=>'penulis',
			'label' => 'Penulis',
			'rules' => 'required']
		];
	}
	public function getAll()
	{
		$this->db->order_by('ditulis', 'desc');
		return $this->db->get($this->_table)->result();
	}
	public function getById($id)
	{
		return $this->db->get_where($this->_table,['id'=>$id])->row();
	}
	public function limit()
	{
		$this->db->order_by('ditulis', 'desc');
		$this->db->limit(1);
		return $this->db->get($this->_table)->result();
	}
	public function save()
	{
		
		$post=$this->input->post();
		$this->id=uniqid();
		$this->judul=$post['judul'];
		$this->slug_berita=$post['judul'];
		$this->lead=$post['lead'];
		$this->gambar=$this->_uploadImage();
		$this->content=$post['content'];
		$this->tags=$post['tags'];
		$this->kategori=$post['kategori'];
		$this->tanggal=$post['tanggal'];
		$this->penulis=$post['penulis'];
		
		$this->db->insert($this->_table, $this);
	}
	public function update()
	{
		$post=$this->input->post();
		$this->id=$post['id'];
		$this->judul=$post['judul'];
		$this->lead=$post['lead'];

		if (!empty($_FILES["gambar"]["name"])) {
		    $this->gambar = $this->_uploadImage();
		} else {
		    $this->gambar = $post["old_image"];
		}

		$this->content=$post['content'];
		$this->tags=$post['tags'];
		$this->kategori=$post['kategori'];
		$this->tanggal=$post['tanggal'];
		$this->penulis=$post['penulis'];
		$this->db->update($this->_table, $this, array('id' => $post['id']));
	}
	public function delete($id)
	{	
		$this->_deleteImage($id);
		return $this->db->delete($this->_table, array('id'=>$id));
	}
	private function _uploadImage()
	{
	    $config['upload_path']          = './upload/berita/';
	    $config['allowed_types']        = 'gif|jpg|png|jpeg';
	    $config['file_name']            = $this->id.'-'.$this->judul;
	    $config['overwrite']			= true;
	    $config['max_size']             = 1024; // 1MB
	    $config['max_width']            = 1280;
	    $config['max_height']           = 853;

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('gambar')) {
	        return $this->upload->data("file_name");
	    }
	    
	    return "default.jpg";
	}
	private function _deleteImage($id)
	{
	    $berita = $this->getById($id);
	    if ($berita->gambar != "default.jpg") {
		    $filename = explode(".", $berita->gambar)[0];
			return array_map('unlink', glob(FCPATH."upload/berita/$filename.*"));
	    }
	}


}

/* End of file Berita_model.php */
/* Location: ./application/models/Berita_model.php */