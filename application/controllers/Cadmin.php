<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin extends CI_Controller {

  // memanggil construct dari  class_parents
  public function __construct(){
    parent::__construct();
    // $this->load->model('m_admin');
    // $this->load->model('M_inputbarang');
    $this->load->helper('url_helper');
  }

	public function index()
	{
		$this->load->view('admin/inputkaryawan');
    $this->load->view('admin/inputbarang');
    $this->load->view('admin/inputsupplier');
    $this->load->view('admin/inputpengiriman');
    $this->load->view('admin/inputpenyuplaian');

    // $this->load->view('admin/create');
	}

  public function inputkaryawan() {
    $this->load->model('M_inputkaryawan');
    $data['karyawan'] = $this->M_inputkaryawan->get_karyawan();

    $this->load->view('admin/views/V_karyawan',$data);
  }

  public function inputbarang() {
    $this->load->model('M_inputbarang');
    $data['barang'] = $this->M_inputbarang->get_barang();

    $this->load->view('admin/views/V_barang',$data);
  }

  public function inputsupplier() {
    $this->load->model('M_inputsupplier');
    $data['supplier'] = $this->M_inputsupplier->get_supplier();

    $this->load->view('admin/views/V_supplier',$data);
  }

  public function inputpengiriman() {
    $this->load->model('M_inputpengiriman');
    $data['pengiriman_brg'] = $this->M_inputpengiriman->get_pengiriman();

    $this->load->view('admin/views/V_pengiriman',$data);
  }

  public function inputpenyuplaian() {
    $this->load->model('M_inputpenyuplaian');
    $data['penyuplaian'] = $this->M_inputpenyuplaian->get_penyuplaian();

    $this->load->view('admin/views/V_penyuplaian',$data);
  }

  //CRUD
  public function create(){

    $nama = $this->input->post('nama_barang');
    $keterangan = $this->input->post('keterangan_barang');
    $jenis = $this->input->post('jenis_barang');
    $harga = $this->input->post('harga_barang');
    $stok = $this->input->post('stok_barang');

    $input_barang = $this->M_inputbarang->set_barang($nama,$keterangan,$jenis,$harga,$stok);

    if ($input_barang) {
      // echo "yyyyyyyyyyyyyeeeeeeeeeeeeeee";
      redirect(base_url('admin/input?pesan=berhasil'));
    }else {
      // echo "tydaq.....!!!!! :'(";
      redirect(base_url('admin/input?pesan=gagal dech'));
    }
  }

  public function update($id){

    $nama = $this->input->post('nama_barang');
    $keterangan = $this->input->post('keterangan_barang');
    $jenis = $this->input->post('jenis_barang');
    $harga = $this->input->post('harga_barang');
    $stok = $this->input->post('stok_barang');

    $input_barang = $this->M_inputbarang->set_barang($nama,$keterangan,$jenis,$harga,$stok);

    if ($input_barang) {
      // echo "yyyyyyyyyyyyyeeeeeeeeeeeeeee";
      redirect(base_url('admin/update?pesan=berhasil'));
    }else {
      // echo "tydaq.....!!!!! :'(";
      redirect(base_url('admin/update?pesan=gagal dech'));
    }
  }
}
?>
