<?php
/**
 * model buat tabel akun
 */
class Akun_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function cek_akun($username,$password)
  {
    $this->db->from('akun');
    $this->db->where('user',$username);
    $this->db->where('pass',MD5($password));
    $query = $this->db->get();
    $data = $query->row();
    $ada_data = count($data) > 0;
    return $ada_data;
  }

  public function get_akun($username,$password)
  {
    $this->db->from('akun');
    $this->db->where('user',$username);
    $this->db->where('pass',MD5($password));
    $query = $this->db->get();
    $data = $query->row();
    return $data;
  }

  public function set_akun($username,$password)
  {
    $data = array(
      'user' => $username,
      'pass' => $password,
      'hak_akses' => 'pembeli'
    );
    return $this->db->insert('akun',$data);
  }
}
