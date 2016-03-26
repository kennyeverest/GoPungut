<?php

/**
 *
 */
class DaftarPengelola extends CI_Controller
{

  function __construct()
  {
    # code...
    parent::__construct();
  }
  public function tampil()
  {
    # code...
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $confirmPassword = $this->input->post('confirmPassword');
    $alamat = $this->input->post('alamat');
    $kontak = $this->input->post('kontak');

    // echo $nama."</br>";
    // echo $email."</br>";
    // echo $password."</br>";
    // echo $confirmPassword."</br>";
    // echo $alamat."</br>";
    // echo $kontak."</br>";

  }

  public function signUp()
  {
    # code...
    $username = $this->input->post('username');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    //$confirmPassword = $this->input->post('confirmPassword');
    $alamat = $this->input->post('alamat');
    $kontak = $this->input->post('kontak');

    $data['id_pengelola_sampah'] = NULL;
    $data['username'] = $username;
    $data['password_pengelola'] = $password;
    $data['email_pengelola'] = $email;
    $data['noHp_pengelola'] = $kontak;
    $cek = $this->insertToPengelola($data);
    if($cek>0){
      echo "Pengguna berhasil di daftarkan";
    }
    else {
      # code...
      echo "Gagal";
    }

  }

  private function insertToPengelola($data){
    $this->load->model('Pengelolamodel');
    $isSuccess = $this->Pengelolamodel->daftarPengelola($data);
    return $isSuccess;
  }

}
