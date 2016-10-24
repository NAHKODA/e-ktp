<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * @package  Validasi E-KTP
  * @author   Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
  * @since    2016
  * @license  Copyright © 2016 Nahkoda - Development Resource, All Rights Reserved.
*/

// create class auth
class Auth extends CI_Controller {

  //create function construct
  function __construct()
  {
    parent::__construct();
    //load library form validation
    $this->load->library('form_validation');
    //load model apps
    $this->load->model('apps');
  }

  //create function index
	public function index()
	{
    //checking session userdata
    if($this->apps->user_id())
    {
      //jika session sudah terdaftar, alihkan dashboard
      redirect('admin/dashboard');
    }else{
      //create condition form validation
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      //cretae message form validation
      $this->form_validation->set_message('required', '<div class="alert alert-danger" style="font-family:Roboto">
                                                          <i class="fa fa-exclamation-circle"></i> {field} harus diisi.
                                                       </div>');
      //condition checking form validation
      if($this->form_validation->run() == FALSE)
      {
        //create variable data
        $data = array(
                  'title' => 'Login - E-KTP System'
        );
        //load view and parsing data
        $this->load->view('admin/auth', $data);
      }else{
        //get data form and cretae a variable
        $username = $this->input->post('username', TRUE);
        $password = SHA1(MD5(MD5(SHA1($this->input->post('password', TRUE)))));
        //create variable and checking via model apps
        $checking = $this->apps->login('tbl_user', array('username' => $username), array('password' => $password));
        //checking variable $checking
        if($checking != FALSE)
        {
          //loop data
          foreach($checking as $user)
          {
            //create session data
            $this->session->set_userdata(array(
              'user_id'   => $user->id_user,
              'username'  => $user->username,
              'password'  => $user->password,
              'nama'      => $user->nama_user
            ));
            //redirect ke dashboard
            redirect('admin/dashboard');
          }
        }else{
          //create variable data
          $data = array(
                    'title' => 'Login - E-KTP System',
                    'error' => '<div class="alert alert-danger" style="font-family:Roboto">
                                  <i class="fa fa-exclamation-circle"></i> Username atau Password Anda salah.
                                </div>'
          );
          //load view and parsing data
          $this->load->view('admin/auth', $data);
        }
      }
    }
	}
}
