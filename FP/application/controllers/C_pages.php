<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pages extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		 $this->load->model('M_web');
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
		$data['title'] = "Home";
		$gambar = $this->M_web->get_gambar_home();
		$slider;
		$count = 0;
		foreach ($gambar as $item){
			if($item['gambar'] == "")
				break;
				else
			$count++;
			// echo var_dump($item['gambar']);
		}
		for($i=0; $i<$count; $i++){
			$slider[$i]= $gambar[$i];
		}
		$data['slider'] = $slider;
		$data['berita_recent'] = $this->M_berita->get_recent(3);

		$this->load->view('pages/templates/header', $data);
		$this->load->view('pages/index',$data);
		$this->load->view('pages/templates/footer');
	}

	public function prokda(){
		$data['title'] = 'Prokda';
		$data['berita_recent'] = $this->M_berita->get_recent();
		$this->load->view('pages/templates/header', $data);
		$this->load->view('pages/prokda',$data);
		$this->load->view('pages/templates/footer');
	}

	public function kepengurusan(){
		$data['title'] = 'Kepengurusan';
		$data['data'] = $this->M_web->get_desc_kepengurusan();
		$data['berita_recent'] = $this->M_berita->get_recent();

		$this->load->view('pages/templates/header', $data);
		$this->load->view('pages/kepengurusan',$data);
		$this->load->view('pages/templates/footer');
	}
}
