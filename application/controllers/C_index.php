<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  Class index
 */
class C_index extends AnotherClass
{

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('welcome_message');
  }
}

 ?>
