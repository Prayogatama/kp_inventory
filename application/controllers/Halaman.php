<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halaman extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

  public function view($halaman = 'index'){

		// jika halaman yang dituju ada atau tidak dengan metode view 404.
    // if (!file_exists(APPPATH."views/pages/".$halaman.'.php')) {
    //   show_404();
    // }
		if (!file_exists(APPPATH."views/inventory/".$halaman.'.php')) {
      show_404();
    }

		//isi judul adalah halaman page nya,
    $data['judul'] = $halaman;

    // $this->load->view('templates/header', $data);
		$this->load->view('inventory/template/header', $data);

		// memanggil halaman dari folder page dengan metode halaman statis
    // $this->load->view('pages/'.$halaman);
		$this->load->view('inventory/'.$halaman);

		//yang berubah dihalaman kontainer atau page saja
    // $this->load->view('templates/footer');
		$this->load->view('inventory/template/footer');
  }
}
