<?php
class M_inputkaryawan extends CI_Model{

  public function __construct(){
    $this->load->database();
  }

  public function get_inputkaryawan(){
      $query = $this->db->get('karyawan');
      return $query->result();
  }
  public function get_karyawan(){
    $this->db->from('karyawan');
    $this->db->where('jenis_kelamin','L');
    $query = $this->db->get();
    return $query->result();
  }

  //pertama
  public function get_karyawan_satuan($id_karyawan){
    $this->db->from('karyawan');
    $this->db->where('id_karyawan',$id_karyawan);
    $query = $this->db->get();
    return $query->result();
  }

  // ketujuh
  public function update_karyawan($id_karyawan,$nama,$jenis_kelamin,$alamat,$email,$no_telp)
  {
    $this->db->where('id_karyawan',$id_karyawan);
    $data = array(
      'nama' => $nama,
      'jenis_kelamin' => $jenis_kelamin,
      'alamat' =>  $alamat,
      'email' =>  $email,
      'no_telp' =>  $no_telp
    );
    $query = $this->db->update('karyawan',$data);
    return $query;
  }

  public function set_karyawan($nama,$jk,$alamat,$email,$telepon){

    $data = array(
      'nama' => $nama,
      'jenis_kelamin' => $jk,
      'alamat' =>  $alamat,
      'email' =>  $email,
      'no_telp' =>  $telepon
    );
    return $this->db->insert('karyawan',$data);
  }
  // delete pertama
  public function delete_karyawan($id_karyawan)
  {
    $this->db->where('id_karyawan',$id_karyawan);
    $query = $this->db->delete('karyawan');
    return $query;
  }
}
 ?>
