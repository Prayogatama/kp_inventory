<?php
class Admin_model extends CI_Model{

  public function __construct(){
    $this->load->database();
  }

  public function get_barang(){
      $query = $this->db->get('barang');
      return $query->result_array();
  }

  // public function get_barang(){
  //     $query = $this->db->query("SELECT * from barang WHERE flag = 1");
  //     return $sql->result_array();
  // }

 ?>
