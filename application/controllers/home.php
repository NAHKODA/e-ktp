<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * @package  Validasi E-KTP
  * @author   Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
  * @since    2016
  * @license  Copyright © 2016 Nahkoda - Development Resource, All Rights Reserved.
*/

// create class dashboadr
class Home extends CI_Controller {

  //create function construct
  function __construct()
  {
    parent::__construct();
    //load library form validation
    $this->load->library(array('form_validation', 'recaptcha'));
    //load model Apps
    $this->load->model('apps');
  }

  //create function index
	public function index()
	{
    //cretae form validation
    $this->form_validation->set_rules('nik', 'Nomor Induk Kependudukan', 'trim|required');
    $this->form_validation->set_rules('g-recaptcha-response', '<b>Captcha</b>', 'callback_getResponseCaptcha');
    //set message form validation
    $this->form_validation->set_message('required',     '<div class="alert alert-danger" style="font-family:Roboto">
                                                          <i class="fa fa-exclamation-circle"></i> {field} harus diisi.
                                                        </div>');
    $this->form_validation->set_message('callback_getResponseCaptcha','<div class="alert alert-danger" style="font-family:Roboto">
                                                                          <i class="fa fa-exclamation-circle"></i> {field} {g-recaptcha-response} harus diisi.
                                                                      </div>');
    //checking kondisi form validation
    if($this->form_validation->run() != FALSE)
    {
      //get data post form
      $nik = $this->input->post('nik');
      //checking data via model
      $checking = $this->apps->checking('tbl_ktp', array('nik' => $nik));
      //conditional checking
      if($checking != FALSE)
      {
        //loop data
        foreach($checking as $hasil)
        {
          $data = array(
            'title'          => 'Homepage - E-KTP System',
            'recaptcha_html'  => $this->recaptcha->render(),
            'nik'             => $hasil->nik,
            'nama'            => $hasil->nama,
            'ttl'             => $hasil->ttl,
            'jk'              => $hasil->jk,
            'alamat'          => $hasil->alamat,
            'rtrw'            => $hasil->rtrw,
            'keldes'          => $hasil->keldes,
            'kecamatan'       => $hasil->kecamatan,
            'agama'           => $hasil->agama,
            'status_kawin'    => $hasil->status_kawin,
            'pekerjaan'       => $hasil->pekerjaan,
            'kewarganegaraan' => $hasil->kewarganegaraan,
            'berlaku'         => $hasil->berlaku

          );
        }
        //load view and parsing data
        $this->load->view('home/part/header.php', $data);
        $this->load->view('home/layout/home.php');
        $this->load->view('home/part/footer.php');
      }else{
        //create variable data
        $data = array(
                  'title' => 'Homepage - E-KTP System',
                  'error' => '<div class="alert alert-danger" style="font-family:Roboto">
                                <i class="fa fa-exclamation-circle"></i> NIK <strong>'.$nik.'</strong> tidak ditemukan data
                              </div>',
                  'recaptcha_html' => $this->recaptcha->render()

        );
        //load view and parsing data
        $this->load->view('home/part/header.php', $data);
        $this->load->view('home/layout/home.php');
        $this->load->view('home/part/footer.php');
      }

    }else{
      //create data array
      $data = array(
        'title'          => 'Homepage - E-KTP System',
        'recaptcha_html' => $this->recaptcha->render()
      );
      $this->load->view('home/part/header.php', $data);
      $this->load->view('home/layout/home.php');
      $this->load->view('home/part/footer.php');
    }
	}

  public function getResponseCaptcha($str)
  {
      $this->load->library('recaptcha');
      $response = $this->recaptcha->verifyResponse($str);
      if ($response['success'])
      {
          return true;
      }
      else
      {
          $this->form_validation->set_message('getResponseCaptcha', ' <div class="alert alert-danger" style="font-family:Roboto">
                                                                          <i class="fa fa-exclamation-circle"></i> %s harus diisi.
                                                                      </div>' );
          return false;
      }
  }

}
