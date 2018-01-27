<?php
/**
 * base_code : mufidmove@gmail.com
 */
class Chat_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  public function set_message($id_akun_kirim,$id_akun_terima,$message)
  {
    $row = array(
      'id_akun_kirim'   => $id_akun_kirim,
      'id_akun_terima'  => $id_akun_terima,
      'time'            => 'current_time()',
      'date'            => 'current_date()',
      'message'         => $message
    );
    return $this->db->insert('chat',$row);
  }
  public function get_message($id_akun_ts)
  {
    $this->db->from('chat');
    $this->db->where('id_akun_ts',$id_akun_ts);
    $data = $this->db->get();
    return $data->result();
  }
}
