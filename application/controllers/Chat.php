<?php
/**
 * base_code: mufidmove@gmail.com
 */
class Chat extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('chat_model');
    $this->load->helper('url');
    $this->load->library('session');
  }

  function send_message_user()
  {
    $id_akun_kirim = $this->session->id_akun;
    $id_akun_terima= '1';
    $message       = $this->input->post('message');
    $this->chat_model->set_message($id_akun_kirim,$id_akun_terima,$message);
  }

  function send_message_admin()
  {
    $id_akun_kirim = $this->session->id_akun;
    $id_akun_terima= $this->input->post('id_akun_terima');
    $message       = $this->input->post('message');
    $this->chat_model->set_message($id_akun_kirim,$id_akun_terima,$message);
  }

  function receive_message_user()
  {
    $id_akun_ts = $this->session->id_akun;
    $data = $this->chat_model->get_message($id_akun_ts);
    echo json_encode($data);
  }

  // ambil data chat admin
  function receive_message_admin()
  {
    $id_akun_ts= $this->input->post('id_akun_terima');
    $data = $this->chat_model->get_message($id_akun_ts);
    echo json_encode($data);
  }
}
