<?php

/**
 *
 */
class SignUpPs extends CI_Controller
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
    echo $nama;
  }
}
