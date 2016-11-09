<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * @package  Validasi E-KTP
  * @author   Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
  * @since    2016
  * @license  Copyright © 2016 Nahkoda - Development Resource, All Rights Reserved.
*/

//create class auth
class Apps extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	/* fungsi login auth */
	function login($table,$field1,$field2)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field1);
		$this->db->where($field2);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) {
			return FALSE;
		} else {
			return $query->result();
		}
	}
	/* end fungsi login auth */

	/* fungsi checking nik E-KTP */
	function checking($table,$field)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) {
			return FALSE;
		} else {
			return $query->result();
		}
	}
	/* end fungsi checking nik E-KTP */

	/* fungsi checking NIK */
	function check_nik($table, $field)
	{
		$this->db->select('nik');
		$this->db->from($table);
		$this->db->where($field);
		$this->db->limit(1);
		$query = $this->db->get();
		if($query->num_rows() == 0){
			return FALSE;
		}else{
			return TRUE;
		}
	}
	/* end fungsi checking NIK */

	/* fungsi tampil data ktp */
	function tampil_data()
	{
			return $this->db->get('tbl_ktp');
	}
	/* end fungsi tampil data ktp */

	/* fungsi data paging ktp */
	function tampil_data_paging($halaman,$batas)
	{
			$query = "SELECT * FROM tbl_ktp limit $halaman, $batas";
			return $this->db->query($query);
	}
	/* end fungsi data paging ktp */

	/* fungsi detail edit ktp */
	function detail_edit($nik)
	{
			$nik  =   array('nik'=>$nik);
			return $this->db->get_where('tbl_ktp',$nik);
	}
	/* end fungsi detail edit ktp */

	/* fungsi restrict halaman */
  function user_id()
  {
    return $this->session->userdata('user_id');
  }
  function username()
  {
    return $this->session->userdata('username');
  }
  function password()
  {
    return $this->session->userdata('password');
  }
	/* end fungsi restrict */

	/* fungsi logout */
	function logout()
	{
		$this->session->sess_destroy();
	}
	/* end fungsi logout */

}
