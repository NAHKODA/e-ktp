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
    $this->load->library(array('form_validation', 'pagination'));
    //load model apps
    $this->load->model('apps');
  }

  //create function index
	public function index()
	{
    //checking session user
    if($this->apps->user_id())
    {
        $config['base_url'] = base_url().'admin/ktp/index/';
        $config['total_rows'] = $this->apps->tampil_data()->num_rows();
        $config['per_page'] = 10;
        //instalasi paging
        $this->pagination->initialize($config);
        //deklare halaman
        $halaman            =  $this->uri->segment(4);
        $halaman            =  $halaman==''? 0 : $halaman;
        //create variable data array
        $data = array(
          'title'     => 'Data E-KTP &rsaquo; E-KTP System',
          'ktp'       => TRUE,
          'data_ktp'  => $this->apps->tampil_data_paging($halaman,$config['per_page']),
          'paging'    => $this->pagination->create_links()
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
      //checking form validation
      if($this->form_validation->run() != FALSE)
      {
        $nik = $this->input->post('nik');
        //check NIK
        $checking = $this->apps->check_nik('tbl_ktp', array('nik' => $nik));
        //condition checking
        if($checking != FALSE)
        {
          //create variable data array
          $data = array(
            'title'     => 'Tambah Data E-KTP &rsaquo; E-KTP System',
            'ktp'       => TRUE,
            'error'     => '<div class="alert alert-danger" style="font-family:Roboto">
                              <i class="fa fa-exclamation-circle"></i> NIK <strong>'.$nik.'</strong> yang anda masukkan sudah terdaftar.
                            </div>'
          );
          //load view and parsing data
          $this->load->view('admin/part/header', $data);
          $this->load->view('admin/part/sidebar');
          $this->load->view('admin/layout/ktp/form_tambah');
          $this->load->view('admin/part/footer');
        }else{
          //create data array and get post data
          $insert = array(
            'nik'             => $this->input->post('nik'),
            'nama'            => $this->input->post('nama'),
            'ttl'             => $this->input->post('ttl'),
            'jk'              => $this->input->post('jk'),
            'alamat'          => $this->input->post('alamat'),
            'rtrw'            => $this->input->post('rtrw'),
            'keldes'          => $this->input->post('keldes'),
            'kecamatan'       => $this->input->post('kecamatan'),
            'agama'           => $this->input->post('agama'),
            'status_kawin'    => $this->input->post('status_kawin'),
            'pekerjaan'       => $this->input->post('pekerjaan'),
            'kewarganegaraan' => $this->input->post('kewarganegaraan'),
            'berlaku'         => $this->input->post('berlaku')
          );
          //insert data into database
          $this->db->insert('tbl_ktp', $insert);
          //create notification with session flashdata
          $this->session->set_flashdata('notif', '<div class="alert alert-success" style="font-family:Roboto">
                                                    <i class="fa fa-check-circle"></i> Data berhasil disimpan.
                                                  </div>');
          //redirect
          redirect('admin/ktp/');
        }
      }else{
        //create variable data array
        $data = array(
          'title'     => 'Tambah Data E-KTP &rsaquo; E-KTP System',
          'ktp'       => TRUE,
        );
        //load view and parsing data
        $this->load->view('admin/part/header', $data);
        $this->load->view('admin/part/sidebar');
        $this->load->view('admin/layout/ktp/form_tambah');
        $this->load->view('admin/part/footer');
      }
    }else{
      show_404();
      return FALSE;
    }
  }

  public function edit()
  {
    //checking session username
    if($this->apps->user_id())
    {
        //create form validation
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
        //checking form validation
        if($this->form_validation->run() != FALSE)
        {
            $nik['nik'] = $this->encryption->decode($this->input->post('nik'));
            //create data array and get post data
            $update = array(
              'nama'            => $this->input->post('nama'),
              'ttl'             => $this->input->post('ttl'),
              'jk'              => $this->input->post('jk'),
              'alamat'          => $this->input->post('alamat'),
              'rtrw'            => $this->input->post('rtrw'),
              'keldes'          => $this->input->post('keldes'),
              'kecamatan'       => $this->input->post('kecamatan'),
              'agama'           => $this->input->post('agama'),
              'status_kawin'    => $this->input->post('status_kawin'),
              'pekerjaan'       => $this->input->post('pekerjaan'),
              'kewarganegaraan' => $this->input->post('kewarganegaraan'),
              'berlaku'         => $this->input->post('berlaku')
            );
            //insert data into database
            $this->db->update('tbl_ktp', $update, $nik);
            //create notification with session flashdata
            $this->session->set_flashdata('notif', '<div class="alert alert-success" style="font-family:Roboto">
                                                      <i class="fa fa-check-circle"></i> Data berhasil diupdate.
                                                    </div>');
            //redirect
            redirect('admin/ktp/');
        }else{
          $nik = $this->encryption->decode($this->uri->segment(4));
          //create variable data array
          $data = array(
            'title'     => 'Edit Data E-KTP &rsaquo; E-KTP System',
            'ktp'       => TRUE,
            'data_ktp'  => $this->apps->detail_edit($nik)->row_array()
          );
          //load view and parsing data
          $this->load->view('admin/part/header', $data);
          $this->load->view('admin/part/sidebar');
          $this->load->view('admin/layout/ktp/form_edit');
          $this->load->view('admin/part/footer');
        }
    }else{
      show_404();
      return FALSE;
    }
  }

  public function delete()
  {
    //checking session username
    if($this->apps->user_id())
    {
         $nik['nik'] = $this->encryption->decode($this->uri->segment(4));
        $this->db->delete('tbl_ktp', $nik);
        //create notification with session flashdata
        $this->session->set_flashdata('notif', '<div class="alert alert-success" style="font-family:Roboto">
                                                  <i class="fa fa-check-circle"></i> Data berhasil dihapus.
                                                </div>');
        redirect('admin/ktp/');
    }else{
      show_404();
      return FALSE;
    }

  }

}
