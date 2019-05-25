<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

    private $_table = 'berita';
    
    function get_all()
    {
        $this->db->order_by('ditulis','desc');
        return $this->db->get($this->_table)->result();
    }
    function TampilBerita()
    {
        $this->db->order_by('ditulis', 'desc')
            ->limit(8);
        return $this->db->get($this->_table)->result();
    }

    function get_by_slug($slug)
    {
        return $this->db->get_where('berita', array('slug_berita' => $slug))->row();
    }

    function get_ticker()
    { 
        $this->db->order_by('ditulis', 'desc')
            ->limit(10);
        return $this->db->get($this->_table)->result();
    }
}
                        
/* End of file Home_model.php */
