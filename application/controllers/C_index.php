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
    $this->load->helper('form');
  }

  public function index()
  {
    $this->load->helper('form');
    $this->load->view('V_index');
  }

  public function send_email()
  {
    $name       = $this->input->post('name');
    $subject    = $this->input->post('subject');
    $message    = $this->input->post('message');
    $from_email = $this->input->post('email');
    $to_email   = "adamfahmil020@gmail.com";

    $config = array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => $from_email,
      'smtp_pass' => 'xxx',
      'mailtype'  => 'html',
      'charset'   => 'iso-8859-1'
    );

    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");

    $this->email->from($from_email, $name);
    $this->email->to($to_email);
    $this->email->subject($subject);
    $this->email->message($message);

    // Send email
    if ($this->email->send()) {
      echo "Berhasil terkirim!";
    } else {
      $this->load->view('V_index');
    }

  }
}

 ?>
