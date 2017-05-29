<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class C_admin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
		 $this->load->model('M_berita');
     $this->load->model('M_users');
     $this->load->model('M_web');
		 $this->load->helper('url_helper');
  }

  public function login(){
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = "Halaman login";

    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if($this->form_validation->run() == FALSE)  {

     $this->load->view('admin/login', $data);

      }

      else {
        $isLogin = $this->M_berita->login_authen();
        if (!$isLogin){
          echo "Username/Password salah";
        }
        else {
          $_SESSION['username'] = $this->input->post('username');
          redirect('/admin/beranda');
        }
      }
    }
    public function lupapassword(){
      $this->load->helper('form');
      $this->load->library('form_validation');


      $data['title'] = "Lupa password";

      $this->form_validation->set_rules('email', 'Email', 'required');

      if($this->form_validation->run() == FALSE)  {

       $this->load->view('admin/lupa_password', $data);

        }

        else {
          $email = $this->input->post('email');
          $is_exist = $this->M_users->is_exist($email);
          if (!$is_exist){
            echo "Email tidak ada";
          }
          else {
            $password = 'iX123';
            $password_hashed = password_hash($password, PASSWORD_DEFAULT);
            $this->M_users->resetPassword($password_hashed);

            //$sender = 'smurfingsasa0@gmail.com';
            $config['protocol'] = 'smtp';
            $config['smtp_host'] ='ssl://smtp.gmail.com';
            $config['smtp_port'] = 465;
            $config['smtp_user'] = 'smurfingsasa0@gmail.com';
            $config['smtp_pass'] = 'cuckyboy';
            $config['mailtype'] = 'text';
            $config['charset'] = 'iso-8859-1';
            $this->load->library('email',$config);
            $this->email->set_newline("\r\n");
            $this->email->from('smurfingsasa0@gmail.com', 'no-reply');
            $this->email->to('labibizzr@gmail.com');
            // $this->email->cc('another@another-example.com');
            // $this->email->bcc('them@their-example.com');

            $this->email->subject('Reset Password Admin');
            $this->email->message('Password baru adalah '. $password);

            if($this->email->send())
            echo 'email terkirim';
            else {
              echo 'email tdk terkirim';
            }
          }
        }
    }

    private function resetPassword(){

    }
      public function beranda(){
        $data['title'] = "Beranda Admin";
        $data['jenis'] = "beranda";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/hal_cpanel',$data);
        $this->load->view('admin/templates/footer', $data);
      }

      public function berita_tampil(){
        $data['title'] = "Manajemen Posting - Admin";
        $data['jenis'] = "berita_tampil";
        $array = $this->M_berita->get_berita();
        $data['berita'] = $array;
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/hal_cpanel',$data);
        $this->load->view('admin/templates/footer');
      }

      public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = "Buat berita";
        $data['jenis'] = "berita_create";

        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');


        if ($this->form_validation->run() == FALSE)
        {
          $this->load->view('admin/templates/header', $data);
          $this->load->view('admin/hal_cpanel',$data);
          $this->load->view('admin/templates/footer');
        }
        else {
          // echo var_dump($_FILES['gambar']);
          $url_gambar = $this->do_upload("Berita");
          $data=array(
            'penulis' => $this->input->post('penulis'),
            'judul' => $this->input->post('judul'),
            'slug' => url_title($this->input->post('judul')),
            'tanggal' => date('Y-m-d'),
            'isi' => $this->input->post('isi'),
            'gambar' => $url_gambar
          );
          $this->M_berita->set_berita($data);
          redirect('admin/berita_tampil');
        }
      }

      public function berita_update($id_berita){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = "Update berita";
        $data['jenis'] = "berita_update";
        $data['berita'] = $this->M_berita->get_berita($id_berita);
        $new_m = array();
          foreach ($data['berita'] as $item) {
            foreach ($item as $key => $value) {
              $new_m[$key] = $value;
                  }
        }
        $data['berita'] = $new_m;
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');


        if ($this->form_validation->run() == FALSE)
        {
          $this->load->view('admin/templates/header', $data);
          $this->load->view('admin/hal_cpanel',$data);
          $this->load->view('admin/templates/footer');
        }
        else {
          // echo var_dump($_FILES['gambar']);
          $url_gambar = $this->do_upload("Berita");
          if ($url_gambar == "")
            $url_gambar = $new_m['gambar'];

          $data=array(
            'penulis' => $this->input->post('penulis'),
            'judul' => $this->input->post('judul'),
            'slug' => url_title($this->input->post('judul')),
            'isi' => $this->input->post('isi'),
            'gambar' => $url_gambar
          );
          $this->M_berita->update_berita($data,$id_berita);
          redirect('admin/berita_tampil');
        }
      }

      public function delete($id_berita){
        $this->M_berita->delete_berita($id_berita);
        redirect('admin/berita_tampil');
      }

      public function manajemen_home(){
        $data['title'] = "Manajemen home";
        $data['jenis'] = "manajemen_home";
        $array = $this->M_web->get_gambar_home();
        $data['gambar'] = $array;
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/hal_cpanel',$data);
        $this->load->view('admin/templates/footer', $data);

      }

      public function home_update($id){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = "Manajemen home - update";
        $data['jenis'] = "home_update";

        $data['data'] = $this->M_web->get_gambar_home($id);
        $new_m = array();
          foreach ($data['data'] as $item) {
            foreach ($item as $key => $value) {
              $new_m[$key] = $value;
                  }
        }
        $data['data'] = $new_m;
        $this->form_validation->set_rules('title_caption', 'Penulis', 'required');
        $this->form_validation->set_rules('isi_caption', 'Judul', 'required');



        if ($this->form_validation->run() == FALSE)
        {
          $this->load->view('admin/templates/header', $data);
          $this->load->view('admin/hal_cpanel',$data);
          $this->load->view('admin/templates/footer');
        }
        else {

          $url_gambar = $this->do_upload("Home");
          if ($url_gambar == "")
            $url_gambar = $new_m['gambar'];

          $data=array(
            'title_caption' => $this->input->post('title_caption'),
            'isi_caption' => $this->input->post('isi_caption'),
            'gambar' => $url_gambar
          );

          $this->M_web->update_slider($data,$id);
          redirect('admin/manajemen_home');
        }
      }

      public function home_delete($id){
        $data=array(
          'title_caption' => '',
          'isi_caption' => '',
          'gambar' => ''
        );
        $this->M_web->update_slider($data,$id);
        redirect('admin/manajemen_home');
      }

      public function manajemen_kepengurusan(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = "Manajemen kepengurusan";
        $data['jenis'] = "manajemen_kepengurusan";

        $data['data'] = $this->M_web->get_desc_kepengurusan();
        $new_m = array();
          foreach ($data['data'] as $item) {
            foreach ($item as $key => $value) {
              $new_m[$key] = $value;
                  }
        }
        $data['data'] = $new_m;
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE)
        {
          $this->load->view('admin/templates/header', $data);
          $this->load->view('admin/hal_cpanel',$data);
          $this->load->view('admin/templates/footer');
        }
        else {

          $url_gambar = $this->do_upload("Organigram");
          if ($url_gambar == "")
            $url_gambar = $new_m['organigram'];

          $dataInput=array(
            'deskripsi' => $this->input->post('deskripsi'),
            'organigram' => $url_gambar
          );
          $this->M_web->update_desc_kepengurusan($dataInput);
          redirect('admin/manajemen_home');
        }
      }
// PRIVATE
      private function do_upload($path){
        $type = explode('.', $_FILES["gambar"]["name"]);
  			$type = $type[count($type)-1];
        $type = strtolower($type);
  			$location = "./assets/img_upload/".$path."/";
  			$url = $location.uniqid(rand()).".".$type;
  			if(in_array($type, array("jpg","jpeg","gif","png")))
  			 	if(is_uploaded_file($_FILES["gambar"]["tmp_name"]))
  			 	if(move_uploaded_file($_FILES["gambar"]["tmp_name"],$url))
  					return substr($url,1);
  			return "";
      }


}


 ?>
