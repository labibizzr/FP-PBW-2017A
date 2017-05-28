<?php
class M_web extends CI_Model
{

  function __construct()
  {
    # code..
    // $table = 'users';
    $this->load->database();
  }

  public function get_gambar_home($id=FALSE){

    if($id==FALSE){
      $query = $this->db->get('gambar_home');
      return $query->result_array();
    }
    else {
      $query = $this->db->get_where('gambar_home', array('id' => $id));
      // echo var_dump($query);
      return $query->result_array();
    }
  }

  public function update_slider($data,$id){
    $this->db->where('id', $id);
    $this->db->update('gambar_home', $data);
  }

  public function get_desc_kepengurusan(){
    $query = $this->db->get_where('desc_kepengurusan', array('id' => 1));

    return $query->result_array();
  }

  public function update_desc_kepengurusan($data){
    $this->db->where('id',1);
    $this->db->update('desc_kepengurusan',$data);
  }
}
?>
