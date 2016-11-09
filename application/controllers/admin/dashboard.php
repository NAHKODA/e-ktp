<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * @package  Validasi E-KTP
  * @author   Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
  * @since    2016
  * @license  Copyright © 2016 Nahkoda - Development Resource, All Rights Reserved.
*/

// create class dashboadr
class Dashboard extends CI_Controller {

  //create function construct
  function __construct()
  {
    parent::__construct();
    //load model apps
    $this->load->model('apps');
  }

  //create function index
	public function index()
	{
    //checking session user
    if($this->apps->user_id())
    {
        //create variable data array
        $data = array(
          'title'     => 'Dashboard &rsaquo; E-KTP System',
          'dashboard' => TRUE,
        );
        //load view and parsing data
        $this->load->view('admin/part/header', $data);
        $this->load->view('admin/part/sidebar');
        $this->load->view('admin/layout/dashboard');
        $this->load->view('admin/part/footer');
    }else{
        //session not registered
        show_404();
        return FALSE;
    }
	}

  //create function logout System
  public function logout()
  {
    //checking session user
    if($this->apps->user_id())
    {
      //destroy session userdata
      $this->apps->logout();
      //redirect Login
      redirect('/');
    }else{
      //session not registered
      show_404();
      return FALSE;
    }
  }

}
