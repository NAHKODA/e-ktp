<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Fika Ridaul Maulayya">
  <link rel="icon" href="<?php print base_url('assets/img/home.svg') ?>">
  <title><?php print $title ?></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="<?php print base_url('assets/css/font-awesome/css/font-awesome.css') ?>">
  <link rel="stylesheet" href="<?php print base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php print base_url('assets/css/custom.css') ?>">
</head>
  <body>
    <nav class="penandaku-navbar navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="penandaku-logo-navbar" href="<?php print base_url() ?>">
               <img class="penandaku-logo" src="<?php print base_url('assets/img/logo-view.png') ?>" />
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php if($this->session->userdata('user_id')) { ?>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php print $this->session->userdata('nama'); ?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php print base_url() ?>admin/dashboard/"><i class="fa fa-home"></i> Dashboard</a></li>
                  <li><a href="<?php print base_url() ?>admin/setting/"><i class="fa fa-cogs"></i> Setting</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php print base_url() ?>admin/dashboard/logout/"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
            <?php }else{ ?>
              <?php
                $attributes = array('id' => 'frm_login', 'class' => 'navbar-form navbar-right');
                echo form_open('admin/auth/', $attributes)
              ?>
              <div class="form-group">
                  <input type="text" name="username" placeholder="Username or Email" class="form-control">
              </div>
              <div class="form-group">
                  <input type="password" name="password" placeholder="Password" class="form-control">
              </div>
                  <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Signing in..." class="penandaku-login btn btn-success" style="font-family:Roboto;font-weight:normal">Sign in</button>
              <?php echo form_close(); ?>
         <?php } ?>
        </div>
      </div>
    </nav>
