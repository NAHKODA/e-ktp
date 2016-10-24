<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-md-3">
      <div class="list-group">
        <div class="list-group-item" style="background-color:#f5f5f5">Panel System</div>
        <a href="<?php print base_url() ?>admin/dashboard/" class="list-group-item <?php if(isset($dashboard)) { echo 'active-panel-member'; } ?>"><i class="fa fa-home"></i> Dashboard </a>
        <a href="<?php print base_url() ?>admin/ktp/" class="list-group-item <?php if(isset($ktp)) { echo 'active-panel-member'; } ?>"><i class="fa fa-bookmark"></i> Kelola E-KTP</a>
        <a href="<?php print base_url() ?>admin/setting/" class="list-group-item <?php if(isset($setting)) { echo 'active-panel-member'; } ?>"><i class="fa fa-cogs"></i> Setting</a>
      </div>
      <div class="list-group">
        <div class="list-group-item" style="background-color:#900;color:#fff">Logout System</div>
        <a href="<?php print base_url() ?>admin/dashboard/logout/" class="list-group-item"> Logout System <i class="fa fa-sign-out"></i></a>
      </div>
    </div>
