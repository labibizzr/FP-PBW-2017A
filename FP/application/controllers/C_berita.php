<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_berita extends CI_Controller {

	function __construct()
  {
    parent::__construct();
		 $this->load->model('M_berita');
		 $this->load->helper('url_helper');
  }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// preparation
		$jumlah_berita = $this->M_berita->jumlah_berita();
		$per_page = 5;
		$link_count = ceil($jumlah_berita/$per_page);


		// config pagination preparation
		$this->load->library('pagination');
		$config['base_url'] = site_url().'/berita/';
		$config['total_rows'] = $jumlah_berita;
		$config['per_page'] = $per_page;
		$from = $this->uri->segment(2);
		$this->pagination->initialize($config);
		// end of config pagination

		$data['title'] = 'Berita';
		$data['berita'] = $this->M_berita->data_berita($config['per_page'], $from);
		$data['link_count'] = $link_count;
		$data['berita_recent'] = $this->M_berita->get_recent();
		// load view
		$this->load->view('pages/templates/header',$data);
		$this->load->view('pages/berita/index', $data);
		// $this->load->view('pages/berita/sidebar',$data);
		$this->load->view('pages/templates/footer');
	}

	public function view($slug){

		$data['berita'] = $this->M_berita->get_berita_by_slug($slug);
		$data['title'] = $data['berita'][0]['judul'];
		$data['berita_recent'] = $this->M_berita->get_recent();

		$this->load->view('pages/templates/header',$data);
		$this->load->view('pages/berita/berita_detail', $data);
		// $this->load->view('pages/berita/sidebar',$data);
		$this->load->view('pages/templates/footer');
	}
}
