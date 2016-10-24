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
    //put code here
  }

  //create function index
	public function index()
	{
    echo 'this is dashboard';
	}
}
