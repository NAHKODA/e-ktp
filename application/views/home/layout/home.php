<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-default" style="font-family:'Roboto'">
        <div class="panel-body">
          <?php
            $attributes = array('id' => 'frm_login');
            echo form_open('/', $attributes)
            ?>
            <div class="form-group">
              <label style="font-weight:normal">NIK :</label>
              <input type="text" name="nik" class="form-control" value="<?php echo set_value('nik') ?>" placeholder="Enter your NIK">
              <?php echo form_error('nik'); ?>
            </div>
            <div class="form-group">
              <?php echo $recaptcha_html;?>
              <?php echo form_error('g-recaptcha-response'); ?>
            </div>
            <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Checking..." class="penandaku-btn-login btn btn-sm btn-success">CEK NIK <i class="fa fa-search"></i></button>
          <?php echo form_close(); ?>
        </div>
    </div>
    </div>
    <div class="col-md-8">
      <?php print $this->session->flashdata('notif'); ?>
      <?php if(isset($error)) { echo $error; } ?>
        <div class="panel panel-default">
          <div class="panel-heading"><i class="fa fa-user"></i> Detail Informasi</div>
          <div class="panel-body">
            <?php if(isset($nik)) {  ?>
                <table class="table table-bordered table-striped" style="margin-top:10px">
                  <tbody>
                  <thead>
                    <tr>
                      <th class="text-center">Atrribute</th>
                      <th class="text-center">Value</th>
                    </tr>
                  </thead>
                    <tr>
                      <td>NIK </td>
                      <td><strong><?php if(isset($nik)) { echo $nik; } ?></strong></td>
                    </tr>
                    <tr>
                      <td>NAMA LENGKAP </td>
                      <td><strong><?php if(isset($nama)) { echo $nama; } ?></strong></td>
                    </tr>
                    <tr>
                      <td>TEMPAT TANGGAL LAHIR </td>
                      <td><strong><?php if(isset($ttl)) { echo $ttl; } ?></strong></td>
                    </tr>
                    <tr>
                      <td>JENIS KELAMIN </td>
                      <td><strong><?php if(isset($jk)) { echo $jk; } ?></strong></td>
                    </tr>
                    <tr>
                      <td>ALAMAT </td>
                      <td><strong><?php if(isset($alamat)) { echo $alamat; } ?></strong></td>
                    </tr>
                    <tr>
                      <td>RT/RW </td>
                      <td><strong><?php if(isset($rtrw)) { echo $rtrw; } ?></strong></td>
                    </tr>
                    <tr>
                      <td>KELURAHAN/DESA </td>
                      <td><strong><?php if(isset($keldes)) { echo $keldes; } ?></strong></td>
                    </tr>
                    <tr>
                      <td>KECAMATAN </td>
                      <td><strong><?php if(isset($kecamatan)) { echo $kecamatan; } ?></strong></td>
                    </tr>
                    <tr>
                      <td>AGAMA </td>
                      <td><strong><?php if(isset($agama)) { echo $agama; } ?></strong></td>
                    </tr>
                    <tr>
                      <td>STATUS KAWIN </td>
                      <td><strong><?php if(isset($status_kawin)) { echo $status_kawin; } ?></strong></td>
                    </tr>
                    <tr>
                      <td>PEKERJAAN </td>
                      <td><strong><?php if(isset($pekerjaan)) { echo $pekerjaan; } ?></strong></td>
                    </tr>
                    <tr>
                      <td>KEWARGANEGARAAN </td>
                      <td><strong><?php if(isset($kewarganegaraan)) { echo $kewarganegaraan; } ?></strong></td>
                    </tr>
                    <tr>
                      <td>BERLAKU </td>
                      <td><strong><?php if(isset($berlaku)) { echo $berlaku; } ?></strong></td>
                    </tr>
                  </tbody>
                </table>
                <?php } ?>
          </div>
        </div>
    </div>
  </div>
</div>
