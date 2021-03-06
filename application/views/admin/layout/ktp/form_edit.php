<div class="col-md-9">
<?php if(isset($error)) { echo $error; } ?>
  <div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-bookmark"></i> Form E-KTP</div>
    <div class="panel-body">      
      <?php
        $attributes = array('id' => 'frm_bookmark');
        echo form_open('admin/ktp/edit/', $attributes)
        ?>
        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Nama Lengkap
          </label>
          <input type="text" class="form-control" name="nama" value="<?php echo $data_ktp['nama']; ?>" placeholder="Nama Lengkap" style="font-family:'Roboto';font-weight:normal">
          <input type="hidden" name="nik" value="<?php echo $this->encryption->encode($data_ktp['nik']); ?>">
          <?php echo form_error('nama'); ?>
        </div>

        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Tempat, Tanggal lahir
          </label>
          <input type="text" class="form-control" name="ttl"  placeholder="Tempat, Tanggal lahir" value="<?php echo $data_ktp['ttl']; ?>" style="font-family:'Roboto';font-weight:normal">
          <?php echo form_error('ttl'); ?>
        </div>

        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Jenis Kelamin
          </label>
          <input type="text" class="form-control" name="jk"  placeholder="Jenis Kelamin" value="<?php echo $data_ktp['jk']; ?>" style="font-family:'Roboto';font-weight:normal">
          <?php echo form_error('jk'); ?>
        </div>

        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Alamat
          </label>
          <textarea class="form-control" name="alamat" value="<?php echo $data_ktp['alamat']; ?>" rows="6" placeholder="Alamat"><?php echo $data_ktp['alamat']; ?></textarea>
          <?php echo form_error('alamat'); ?>
        </div>

        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              RT/RW
          </label>
          <input type="text" class="form-control" name="rtrw"  placeholder="RT/RW" value="<?php echo $data_ktp['rtrw']; ?>" style="font-family:'Roboto';font-weight:normal">
          <?php echo form_error('rtrw'); ?>
        </div>

        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Kelurahan/Desa
          </label>
          <input type="text" class="form-control" name="keldes"  placeholder="Kelurahan/Desa" value="<?php echo $data_ktp['keldes']; ?>" style="font-family:'Roboto';font-weight:normal">
          <?php echo form_error('keldes'); ?>
        </div>

        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Kecamatan
          </label>
          <input type="text" class="form-control" name="kecamatan"  placeholder="Kecamatan" value="<?php echo $data_ktp['kecamatan']; ?>" style="font-family:'Roboto';font-weight:normal">
          <?php echo form_error('kecamatan'); ?>
        </div>

        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Agama
          </label>
          <input type="text" class="form-control" name="agama"  placeholder="Agama" value="<?php echo $data_ktp['agama']; ?>" style="font-family:'Roboto';font-weight:normal">
          <?php echo form_error('agama'); ?>
        </div>

        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Status Kawin
          </label>
          <input type="text" class="form-control" name="status_kawin"  placeholder="Status Kawin" value="<?php echo $data_ktp['status_kawin']; ?>" style="font-family:'Roboto';font-weight:normal">
          <?php echo form_error('status_kawin'); ?>
        </div>

        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Pekerjaan
          </label>
          <input type="text" class="form-control" name="pekerjaan"  placeholder="Pekerjaan" value="<?php echo $data_ktp['pekerjaan']; ?>" style="font-family:'Roboto';font-weight:normal">
          <?php echo form_error('pekerjaan'); ?>
        </div>

        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Kewarganegaraan
          </label>
          <input type="text" class="form-control" name="kewarganegaraan"  placeholder="Kewarganegaraan" value="<?php echo $data_ktp['kewarganegaraan']; ?>" style="font-family:'Roboto';font-weight:normal">
          <?php echo form_error('kewarganegaraan'); ?>
        </div>

        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Berlaku
          </label>
          <input type="text" class="form-control" name="berlaku"  placeholder="Tahun Berlaku" value="<?php echo $data_ktp['berlaku']; ?>" style="font-family:'Roboto';font-weight:normal">
          <?php echo form_error('berlaku'); ?>
        </div>

        <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Mengupdate..." class="penandaku-btn-bookmark btn btn-success">Update</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
</div>
</div>
