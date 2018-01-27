<?php
class M_inputsupplier extends CI_Model{

  public function __construct(){
    $this->load->database();
  }

  public function get_inputsupplier(){
      $query = $this->db->get('supplier');
      return $query->result();
  }
  public function get_supplier(){
    $this->db->from('supplier');
    $this->db->where('nama_supplier','parjo');
    $query = $this->db->get();
    return $query->result();
  }
  //pertama edit
  public function get_supplier_satuan($id_supplier){
    $this->db->from('supplier');
    $this->db->where('id_supplier',$id_supplier);
    $query = $this->db->get();
    return $query->result();
  }
  // ketujuh edit
  public function update_supplier($id_supplier,$nama_supplier,$alamat_supplier,$no_telp,$nama_instansi,$id_barang)
  {
    $this->db->where('id_supplier',$id_supplier);
    $data = array(
      'nama_supplier' => $nama_supplier,
      'alamat_supplier' => $alamat_supplier,
      'no_telp' =>  $no_telp,
      'nama_instansi' =>  $nama_instansi
    );
    $query = $this->db->update('supplier',$data);
    return $query;
  }
  public function set_supplier($nama,$alamat,$telepon,$nama_instansi){

    $data = array(
      'nama_supplier' => $nama,
      'alamat_supplier' => $alamat,
      'no_telp' => $telepon,
      'nama_instansi' => $nama_instansi
      // 'id_barang' => $id_barang
    );
    return $this->db->insert('supplier',$data);
  }
  // delete pertama
  public function delete_supplier($id_supplier)
  {
    $this->db->where('id_supplier',$id_supplier);
    $query = $this->db->delete('supplier');
    return $query;
  }
}
 ?>
