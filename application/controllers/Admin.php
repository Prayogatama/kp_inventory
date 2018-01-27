<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  // memanggil construct dari  class_parents
  public function __construct(){
    parent::__construct();
    // panggil library session sama helper auth (helper yg dibikin sendiri) untuk cek udah login
    $this->load->library('session');
    $this->load->helper('auth');
    // $this->load->model('m_admin');
    $this->load->model('M_inputbarang');
    $this->load->model('M_inputsupplier');
    $this->load->model('M_inputkaryawan');
    $this->load->model('M_inputpenyuplaian');
    $this->load->helper('url_helper');
  }

	public function index()
	{
    // fungsi cek_auth diambil dari helper auth,
    // fungsi ini untuk menguji apakah user udah login atau belom
    // wajib dikasih di setiap halaman yang untuk ngaksesnya butuh kondisi kalo usernya udah login
    cek_auth();
		// $this->load->view('admin/inputbarang');
    // $this->load->view('admin/inputsupplier');
    // $this->load->view('admin/register_karyawan');
    // $this->load->view('admin/penyuplaian');
	}
  public function dasboard(){
    $this->load->view('admin/inputbarang');
    $this->load->view('admin/inputsupplier');
    $this->load->view('admin/register_karyawan');
    $this->load->view('admin/penyuplaian');
  }

  public function view($slug = NULL)
	{
    $data['news_item'] = $this->news_model->get_news($slug);

		$this->load->view('news/view', $data);
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

  public function input()
  {
    $data['pesan'] = $this->input->get('pesan');
    //panggil fungsi dari modelnya
    $this->load->view('admin/inputbarang',$data);
  }

  public function input_supplier()
  {
    $data['pesan'] = $this->input->get('pesan');
    $this->load->view('admin/input_suppliers',$data);
  }

  // CRUD Barang
  public function create_karyawan(){

    $nama = $this->input->post('nama');
    $jk= $this->input->post('jenis_kelamin');
    $alamat = $this->input->post('alamat');
    $email = $this->input->post('email');
    $telepon = $this->input->post('no_telp');

    $input_karyawan = $this->M_inputkaryawan->set_karyawan($nama,$jk,$alamat,$email,$telepon);

    if ($input_karyawan) {
      redirect(base_url('daftarkaryawan'));
    }else {
      redirect(base_url('register_karyawan'));
    }
  }
  public function create_barang(){

    $nama = $this->input->post('nama_barang');
    $keterangan = $this->input->post('keterangan_barang');
    $jenis = $this->input->post('jenis_barang');
    $harga = $this->input->post('harga_barang');
    $stok = $this->input->post('stok_barang');

    $input_barang = $this->M_inputbarang->set_barang($nama,$keterangan,$jenis,$harga,$stok);

    if ($input_barang) {
      redirect(base_url('daftarbarang'));
    }else {
      redirect(base_url('inputbarang'));
    }
  }
  public function create_supplier(){

    $nama = $this->input->post('nama_supplier');
    $alamat = $this->input->post('alamat_supplier');
    $telepon = $this->input->post('no_telp');
    $nama_instansi = $this->input->post('nama_instansi');
    // $id_barang = $this->input->post('id_barang');

    $input_supplier = $this->M_inputsupplier->set_supplier($nama,$alamat,$telepon,$nama_instansi);

    if ($input_supplier) {
      redirect(base_url('daftarsupplier'));
    }else {
      redirect(base_url('inputsupplier'));
    }
  }
  public function create_penyuplaian(){

    $jumlah = $this->input->post('jumlah');
    $tgl = $this->input->post('tgl_pembelian');
    $total = $this->input->post('total_bayar');

    $input_penyuplaian= $this->M_inputpenyuplaian->set_penyuplaian($jumlah,$tgl,$total);

    if ($input_penyuplaian) {
      redirect(base_url('daftarpenyuplaian'));
    }else {
      redirect(base_url('inputpenyuplaian'));
    }
  }
  //kedua
  public function edit_barang(){

    $id_barang = $this->input->get('id_barang');
    $barang = $this->M_inputbarang->get_barang_satuan($id_barang);
    foreach ($barang as $barang) {
      echo '<div id="id_barang">'.$barang->id_barang.'</div>';
      echo '<div id="nama_barang">'.$barang->nama_barang.'</div>';
      echo '<div id="keterangan_barang">'.$barang->keterangan_barang.'</div>';
      echo '<div id="jenis_barang">'.$barang->jenis_barang.'</div>';
      echo '<div id="harga_barang">'.$barang->harga_barang.'</div>';
      echo '<div id="stok_barang">'.$barang->stok_barang.'</div>';
    }

  }
  // kedua edit
  public function edit_supplier(){

    $id_supplier = $this->input->get('id_supplier');
    $supplier = $this->M_inputsupplier->get_supplier_satuan($id_supplier);
    foreach ($supplier as $supplier) {
      echo '<div id="id_supplier">'.$supplier->id_supplier.'</div>';
      echo '<div id="nama_supplier">'.$supplier->nama_supplier.'</div>';
      echo '<div id="alamat_supplier">'.$supplier->alamat_supplier.'</div>';
      echo '<div id="no_telp">'.$supplier->no_telp.'</div>';
      echo '<div id="nama_instansi">'.$supplier->nama_instansi.'</div>';
      echo '<div id="id-barang">'.$supplier->id_barang.'</div>';
    }
  }
  //kedua
  public function edit_karyawan(){

    $id_karyawan = $this->input->get('id_karyawan');
    $karyawan = $this->M_inputkaryawan->get_karyawan_satuan($id_karyawan);
    foreach ($karyawan as $karyawan) {
      echo '<div id="id_karyawan">'.$karyawan->id_karyawan.'</div>';
      echo '<div id="nama">'.$karyawan->nama.'</div>';
      echo '<div id="jenis_kelamin">'.$karyawan->jenis_kelamin.'</div>';
      echo '<div id="alamat">'.$karyawan->alamat.'</div>';
      echo '<div id="email">'.$karyawan->email.'</div>';
      echo '<div id="no_telp">'.$karyawan->no_telp.'</div>';
      echo '<div id="id_jabatan">'.$karyawan->id_jabatan.'</div>';
    }
  }
  //kedua
  public function edit_penyuplaian(){

    $id_penyuplaian = $this->input->get('id_penyuplaian');
    $penyuplaian = $this->M_inputpenyuplaian->get_penyuplaian_satuan($id_penyuplaian);
    foreach ($penyuplaian as $penyuplaian) {
      echo '<div id="id_penyuplaian">'.$penyuplaian->id_penyuplaian.'</div>';
      echo '<div id="id_supplier">'.$penyuplaian->id_supplier.'</div>';
      echo '<div id="jumlah">'.$penyuplaian->jumlah.'</div>';
      echo '<div id="tgl_pembelian">'.$penyuplaian->tgl_pembelian.'</div>';
      echo '<div id="total_bayar">'.$penyuplaian->total_bayar.'</div>';
    }
  }

  // keenam
  public function update_barang()
  {
    $id_barang = $this->input->post('id_barang');
    $nama_barang = $this->input->post('nama_barang');
    $keterangan_barang = $this->input->post('keterangan_barang');
    $jenis_barang = $this->input->post('jenis_barang');
    $harga_barang = $this->input->post('harga_barang');
    $stok_barang = $this->input->post('stok_barang');

    $barang = $this->M_inputbarang->update_barang($id_barang,$nama_barang,$keterangan_barang,$jenis_barang,$harga_barang,$stok_barang);
    if ($barang) {
      redirect(base_url('daftarbarang'));
    }
  }
  // keenam
  public function update_supplier()
  {
    $id_supplier = $this->input->post('id_supplier');
    $nama_supplier = $this->input->post('nama_supplier');
    $alamat_supplier = $this->input->post('alamat_supplier');
    $no_telp= $this->input->post('no_telp');
    $nama_instansi = $this->input->post('nama_instansi');
    $id_barang = $this->input->post('id_barang');

    $supplier = $this->M_inputsupplier->update_supplier($id_supplier,$nama_supplier,$alamat_supplier,$no_telp,$nama_instansi,$id_barang);
    if ($supplier) {
      redirect(base_url('daftarsupplier'));
    }
  }
  //keenam
  public function update_karyawan()
  {
    $id_karyawan = $this->input->post('id_karyawan');
    $nama = $this->input->post('nama');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $alamat = $this->input->post('alamat');
    $email = $this->input->post('email');
    $no_telp = $this->input->post('no_telp');

    $karyawan = $this->M_inputkaryawan->update_karyawan($id_karyawan,$nama,$jenis_kelamin,$alamat,$email,$no_telp);
    if ($karyawan) {
      redirect(base_url('daftarkaryawan'));
    }
  }
    //keenam
    public function update_penyuplaian()
    {
      $id_penyuplaian = $this->input->post('id_penyuplaian');
      $id_supplier = $this->input->post('id_supplier');
      $jumlah = $this->input->post('jumlah');
      $tgl_pembelian = $this->input->post('tgl_pembelian');
      $total_bayar = $this->input->post('total_bayar');

      $penyuplaian = $this->M_inputpenyuplaian->update_penyuplaian($id_penyuplaian,$id_supplier,$jumlah,$tgl_pembelian,$total_bayar);
      if ($penyuplaian) {
        redirect(base_url('daftarpenyuplaian'));
      }
    }

    // delete kedua
    public function delete_barang(){
    $id_barang = $this->input->post('id_barang');
    $barang = $this->M_inputbarang->delete_barang($id_barang);
    if ($barang) {
      redirect(base_url('daftarbarang'));
      }
    }

    // delete kedua
    public function delete_supplier(){
      $id_supplier = $this->input->post('id_supplier');
      $supplier = $this->M_inputsupplier->delete_supplier($id_supplier);
      if ($supplier) {
        redirect(base_url('daftarsupplier'));
      }
    }
    // delete kedua
    public function delete_karyawan(){
      $id_karyawan = $this->input->post('id_karyawan');
      $karyawan = $this->M_inputkaryawan->delete_karyawan($id_karyawan);
      if ($karyawan) {
        redirect(base_url('daftarkaryawan'));
      }
    }
    // delete kedua
    public function delete_penyuplaian(){
      $id_penyuplaian = $this->input->post('id_penyuplaian');
      $penyuplaian = $this->M_inputpenyuplaian->delete_penyuplaian($id_penyuplaian);
      if ($penyuplaian) {
        redirect(base_url('daftarpenyuplaian'));
      }
    }
}
