<?php
class M_users extends CI_Model
{

  function __construct()
  {
    # code..
    // $table = 'users';
    $this->load->database();
  }

  public function is_exist($email){

    $this->db->select('email');
    $this->db->where('email',$email);
    $this->db->from('user');

    $query = $this->db->get();

    if($query->num_rows() == 1)
      return true;
    else
      return false;
  }
public function resetPassword($password){
  $data=array('password' => $password);
    $this->db->where('username', 'admin');
    $this->db->update('user', $data);

}
}
?>
