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
