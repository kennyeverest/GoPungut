<?php

/**
 *
 */
class LoginPengelola extends CI_Controller
{

  function __construct()
  {
    # code...
  parent::__construct();
  }

  public function login()
  {
    # code...
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    echo $email."</br>";
    echo $password."</br>";
    $data['email'] = $email;
    $data['password'] = $password;
    $isValid = $this->validate($data);
    if($isValid)
    echo "Berhasil login"."</br>";
    else
    echo "Login gagal"."</br>";

  }

  private function validate($data)
  {
    # code...
    $email = $data['email'];
    $password = $data['password'];

    $this->load->model('Pengelolamodel');
    $query = $this->Pengelolamodel->getUsernamePassword();
    foreach($query->result_array() as $value){
      if(strcmp($email,$value['email_pengelola'])==0 && strcmp($password,$value['password_pengelola'])==0)
      return true;
    }
    return false;

  }

}
