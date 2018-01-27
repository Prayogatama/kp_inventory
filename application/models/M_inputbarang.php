<?php
class M_inputbarang extends CI_Model{

  public function __construct(){
    $this->load->database();
  }

  public function get_inputbarang(){
      $query = $this->db->get('barang');
      return $query->result();
  }

  public function get_barang(){
    $this->db->from('barang');
    $this->db->where('jenis_barang','food industry');
    $query = $this->db->get();
    return $query->result();
  }

  //pertama
  public function get_barang_satuan($id_barang){
    $this->db->from('barang');
    $this->db->where('id_barang',$id_barang);
    $query = $this->db->get();
    return $query->result();
  }

  // ketujuh
  public function update_barang($id_barang,$nama_barang,$keterangan_barang,$jenis_barang,$harga_barang,$stok_barang)
  {
    $this->db->where('id_barang',$id_barang);
    $data = array(
      'nama_barang' => $nama_barang,
      'keterangan_barang' => $keterangan_barang,
      'jenis_barang' =>  $jenis_barang,
      'harga_barang' =>  $harga_barang,
      'stok_barang' =>  $stok_barang
    );
    $query = $this->db->update('barang',$data);
    return $query;
  }

  public function set_barang($nama,$keterangan,$jenis,$harga,$stok){

    $data = array(
      'nama_barang' => $nama,
      'keterangan_barang' => $keterangan,
      'jenis_barang' =>  $jenis,
      'harga_barang' =>  $harga,
      'stok_barang' =>  $stok
    );
    return $this->db->insert('barang',$data);
  }

  // delete pertama
  public function delete_barang($id_barang)
  {
    $this->db->where('id_barang',$id_barang);
    $query = $this->db->delete('barang');
    return $query;
  }
}
