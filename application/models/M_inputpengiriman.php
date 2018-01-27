<?php
class M_inputpengiriman extends CI_Model{

    public function __construct(){
      $this->load->database();
    }

    public function get_inputpengiriman(){
        $query = $this->db->get('pengiriman_brg');
        return $query->result();
    }
    public function get_pengiriman(){
      $this->db->from('pengiriman_brg');
      $this->db->where('tgl_pengiriman','2017-12-09');
      $query = $this->db->get();
      return $query->result();
    }
  }
 ?>
