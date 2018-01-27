<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
    // panggil library session sama helper auth (helper yg dibikin sendiri) untuk cek udah login
    $this->load->library('session');
    $this->load->helper('auth');
	}

	// front-end
	public function index()
	{
		$this->load->helper('url_helper');
		$this->load->view('inventory/index');
	}
	public function products()
	{
		$this->load->helper('url_helper');
		$this->load->view('inventory/products');
	}
	public function category()
	{
		$this->load->helper('url_helper');
		$this->load->view('inventory/category');
	}
	public function contact()
	{
		$this->load->helper('url_helper');
		$this->load->view('inventory/contact');
	}
	public function about()
	{
		$this->load->helper('url_helper');
		$this->load->view('inventory/aboutUs');
	}
	public function single()
	{
		$this->load->helper('url_helper');
		$this->load->view('inventory/single-page1');
	}
	public function login()
	{
		$this->load->helper('url_helper');
		$this->load->view('admin/login');
	}
	public function login_admin()
	{
		$this->load->helper('url_helper');
		$this->load->view('admin/login_admin');
	}
	public function register_admin()
	{
		$this->load->helper('url_helper');
		$this->load->view('admin/register_admin');
	}
	public function register_karyawan()
	{
		$this->load->helper('url_helper');
		$this->load->view('admin/register_karyawan');
	}
	public function register_pembeli()
	{
		$this->load->helper('url_helper');
		$this->load->view('admin/register_pembeli');
	}
	public function keranjang(){
		$this->load->helper('url_helper');
		$this->load->view('inventory/keranjang');
	}
	public function pengiriman(){
		$this->load->helper('url_helper');
		$this->load->view('inventory/pengiriman');
	}

	// page Admin
	public function daftartabel()
	{
		$this->load->helper('url_helper');
		$this->load->view('admin/daftartabel');
	}
	public function dasboard()
	{
		cek_auth();
		$this->load->helper('url_helper');
		$this->load->view('admin/dasboard');
	}
	public function daftarbarang()
	{
		cek_auth();
		$this->load->helper('url_helper');
		$this->load->model('M_inputbarang');
		$data['barang'] = $this->M_inputbarang->get_inputbarang();
		$this->load->view('admin/daftarbarang',$data);
	}
	public function daftarkaryawan()
	{
		cek_auth();
		$this->load->helper('url_helper');
		$this->load->model('M_inputkaryawan');
		$data['karyawan'] = $this->M_inputkaryawan->get_inputkaryawan();
		$this->load->view('admin/daftarkaryawan',$data);
	}
	public function daftarsupplier()
	{
		cek_auth();
		$this->load->helper('url_helper');
		$this->load->model('M_inputsupplier');
		$data['supplier'] = $this->M_inputsupplier->get_inputsupplier();
		$this->load->view('admin/daftarsupplier',$data);
	}
	public function daftarpengiriman()
	{
		cek_auth();
		$this->load->helper('url_helper');
		$this->load->model('M_inputpengiriman');
		$data['pengiriman_brg'] = $this->M_inputpengiriman->get_inputpengiriman();
		$this->load->view('admin/daftarpengiriman',$data);
	}
	public function daftarpenyuplaian()
	{
		cek_auth();
		$this->load->helper('url_helper');
		$this->load->model('M_inputpenyuplaian');
		$data['penyuplaian'] = $this->M_inputpenyuplaian->get_inputpenyuplaian();
		$this->load->view('admin/daftarpenyuplaian',$data);
	}
	public function header()
	{
		$this->load->helper('url_helper');
		// $this->load->view('admin/header');
		// $this->load->view('admin/footer');
	}
	public function inputbarang()
	{
		$this->load->helper('url_helper');
		$this->load->view('admin/inputbarang');
	}
	public function inputkaryawan()
	{
		$this->load->helper('url_helper');
		$this->load->view('admin/inputkaryawan');
	}
	public function inputpembeli()
	{
		$this->load->helper('url_helper');
		$this->load->view('admin/inputpembeli');
	}
	public function inputpenyuplaian()
	{
		$this->load->helper('url_helper');
		$this->load->view('admin/inputpenyuplaian');
	}
	public function inputsupplier()
	{
		$this->load->helper('url_helper');
		$this->load->view('admin/inputsupplier');
	}
	public function koneksi()
	{
		$this->load->helper('url_helper');
		$this->load->view('admin/koneksi');
	}
	//laporan
	public function laporanbarang(){
		$this->load->helper('url_helper');
		$this->load->model('M_inputbarang');
		$data['barang'] = $this->M_inputbarang->get_inputbarang();
		$this->load->view('admin/laporanbarang',$data);
	}
	public function laporankaryawan(){
		$this->load->helper('url_helper');
		$this->load->model('M_inputkaryawan');
		$data['karyawan'] = $this->M_inputkaryawan->get_inputkaryawan();
		$this->load->view('admin/laporankaryawan',$data);
	}
	public function laporanpengiriman(){
		$this->load->helper('url_helper');
		$this->load->model('M_inputpengiriman');
		$data['pengiriman_brg'] = $this->M_inputpengiriman->get_inputpengiriman();
		$this->load->view('admin/laporanpengiriman',$data);
	}
	public function laporanpenyuplaian(){
		$this->load->helper('url_helper');
		$this->load->model('M_inputpenyuplaian');
		$data['penyuplaian'] = $this->M_inputpenyuplaian->get_inputpenyuplaian();
		$this->load->view('admin/laporanpenyuplaian',$data);
	}
	public function laporansupplier(){
		$this->load->helper('url_helper');
		$this->load->model('M_inputsupplier');
		$data['supplier'] = $this->M_inputsupplier->get_inputsupplier();
		$this->load->view('admin/laporansupplier',$data);
	}
	//CRUD
	public function create_barang(){
		$this->load->helper('url_helper');
		$this->load->model('M_inputbarang');
		$data['barang'] = $this->M_inputbarang->set_barang();

		$this->load->view('admin/inputbarang',$data);
	}
	public function create_supplier(){
		$this->load->helper('url_helper');
		$this->load->model('M_inputsupplier');
		$data['supplier'] = $this->M_inputsupplier->set_supplier();

		$this->load->view('admin/inputsupplier',$data);
	}
	public function create_penyuplaianr(){
		$this->load->helper('url_helper');
		$this->load->model('M_inputpenyuplaian');
		$data['penyuplaian'] = $this->M_inputpenyuplaian->set_penyuplaian();

		$this->load->view('admin/inputpenyuplaian',$data);
	}
}
