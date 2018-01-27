<?php
class M_inputpenyuplaian extends CI_Model{

  public function __construct(){
    $this->load->database();
  }
  public function get_inputpenyuplaian(){
      $query = $this->db->get('penyuplaian');
      return $query->result();
  }
  public function get_penyuplaian(){
    $this->db->from('penyuplaian');
    $this->db->where('jumlah','1');
    $query = $this->db->get();
    return $query->result();
  }
  //pertama
  public function get_penyuplaian_satuan($id_penyuplaian){
    $this->db->from('penyuplaian');
    $this->db->where('id_penyuplaian',$id_penyuplaian);
    $query = $this->db->get();
    return $query->result();
  }
  // ketujuh
  public function update_penyuplaian($id_penyuplaian,$jumlah,$tgl_pembelian,$total_bayar)
  {
    $this->db->where('id_penyuplaian',$id_penyuplaian);
    $data = array(
      'jumlah' => $jumlah,
      'tgl_pembelian' => $tgl_pembelian,
      'total_bayar' =>  $total_bayar
    );
    $query = $this->db->update('penyuplaian',$data);
    return $query;
  }

  public function set_penyuplaian($jumlah,$tgl,$total){

    $data = array(
      'jumlah' => $jumlah,
      'tgl_pembelian' => $tgl,
      'total_bayar' => $total,
    );
    return $this->db->insert('penyuplaian',$data);
  }
  // delete pertama
  public function delete_penyuplaian($id_penyuplaian)
  {
    $this->db->where('id_penyuplaian',$id_penyuplaian);
    $query = $this->db->delete('penyuplaian');
    return $query;
  }
}
 ?>
