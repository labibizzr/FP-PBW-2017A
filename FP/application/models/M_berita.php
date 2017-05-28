<?php
/**
 *
 */
class M_berita extends CI_Model
{

  function __construct()
  {
    # code..
    $this->load->database();
  }

  public function login_authen(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $this->db->select('*');
    $this->db->where('username',$username);
    // $this->db->where('password',$password);
    $this->db->from('user');
    $query = $this->db->get();
    $row = $query->row_array();
    $password_hash = $row['password'];
    // echo $row['username'].$row['password'];
    			if (password_verify($password,$password_hash)) {
    			return true;
    			}
    			else{
    			return false;
    			}
  }

  public function get_berita($id_berita=FALSE){

    if($id_berita==FALSE){
      $query = $this->db->get('berita');
      return $query->result_array();
    }
    else {
      $query = $this->db->get_where('berita', array('id_berita' => $id_berita));
      // echo var_dump($query);
      return $query->result_array();
    }

  }
  function data_berita($number,$offset){
		return $query = $this->db->get('berita',$number,$offset)->result_array();
	}

  function get_recent($limit=5){
    $this->db->order_by('id_berita','DESC');
    $this->db->limit($limit);
    return $query = $this->db->get('berita')->result_array();
  }
	function jumlah_berita(){
		return $this->db->get('berita')->num_rows();
	}

  public function get_berita_by_slug($slug){
      $query = $this->db->get_where('berita', array('slug' => $slug));
      return $query->result_array();
  }

  public function update_berita($data,$id_berita){
    $this->db->where('id_berita', $id_berita);
    $this->db->update('berita', $data);
  }

  public function set_berita($data){

    return $this->db->insert('berita', $data);
  }

  public function delete_berita($id_berita){
    $this->db->where_in('id_berita', $id_berita);
    $this->db->delete('berita');

  }

}

 ?>
