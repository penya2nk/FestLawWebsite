<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  Class index
 */
class C_index extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('V_index');
  }
}

 ?>
