<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * @package  Validasi E-KTP
  * @author   Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
  * @since    2016
  * @license  Copyright © 2016 Nahkoda - Development Resource, All Rights Reserved.
*/

// create class dashboadr
class Ktp extends CI_Controller {

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
    //checking session user
    if($this->apps->user_id())
    {
        //create variable data array
        $data = array(
          'title'     => 'Data E-KTP &rsaquo; E-KTP System',
          'ktp'       => TRUE,
        );
        //load view and parsing data
        $this->load->view('admin/part/header', $data);
        $this->load->view('admin/part/sidebar');
        $this->load->view('admin/layout/ktp/data_ktp');
        $this->load->view('admin/part/footer');
    }else{
        //session not registered
        show_404();
        return FALSE;
    }
	}

  public function tambah()
  {
    //checking session username
    if($this->apps->user_id())
    {
      //create form validation
      $this->form_validation->set_rules('nik', 'NIK', 'required');
      $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('ttl', 'Tempat Tanggal lahir', 'required');
      $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
      $this->form_validation->set_rules('alamat', 'Alamat', 'required');
      $this->form_validation->set_rules('rtrw', 'RT/RW', 'required');
      $this->form_validation->set_rules('keldes', 'Kelurahan Desa', 'required');
      $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
      $this->form_validation->set_rules('agama', 'Agama', 'required');
      $this->form_validation->set_rules('status_kawin', 'Status Kawin', 'required');
      $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
      $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required');
      $this->form_validation->set_rules('berlaku', 'Berlaku', 'required');
      //set message form validation
      $this->form_validation->set_message('required', '<div class="alert alert-danger" style="font-family:Roboto">
                                                          <i class="fa fa-exclamation-circle"></i> {field} harus diisi.
                                                      </div>');
      //create variable data array
      $data = array(
        'title'     => 'Tambah Data E-KTP &rsaquo; E-KTP System',
        'ktp'       => TRUE,
      );
      //create variable subdata array
      $sub_data = array(
        'type'            => 'tambah',
        'nik'             => '',
        'nama'            => '',
        'ttl'             => '',
        'jk'              => '',
        'alamat'          => '',
        'rtrw'            => '',
        'keldes'          => '',
        'kecamatan'       => '',
        'agama'           => '',
        'status_kawin'    => '',
        'pekerjaan'       => '',
        'kewarganegaraan' => '',
        'berlaku'         => ''
      );
      //load view and parsing data
      $this->load->view('admin/part/header', $data);
      $this->load->view('admin/part/sidebar', $sub_data);
      $this->load->view('admin/layout/ktp/form_ktp');
      $this->load->view('admin/part/footer');
    }else{
      show_404();
      return FALSE;
    }
  }

}
