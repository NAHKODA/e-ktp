<div class="col-md-9">
  <div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-folder-open"></i> Form E-KTP</div>
    <div class="panel-body">
      <?php
        $attributes = array('id' => 'frm_bookmark');
        echo form_open('admin/ktp/tambah/', $attributes)
        ?>
        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              NIK
          </label>
          <input type="text" class="form-control" name="nik" value="<?php echo set_value('nik'); ?>"  placeholder="NIK" style="font-family:'Roboto';font-weight:normal">
          <?php echo form_error('nik'); ?>
        </div>

        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Nama Lengkap
          </label>
          <input type="text" class="form-control" name="nama" value="<?php echo set_value('nama'); ?>" placeholder="Nama Lengkap" style="font-family:'Roboto';font-weight:normal">
          <?php echo form_error('nama'); ?>
        </div>

        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Tempat, Tanggal lahir
          </label>
          <input type="text" class="form-control" name="ttl"  placeholder="Tempat, Tanggal lahir" value="<?php echo set_value('ttl'); ?>" style="font-family:'Roboto';font-weight:normal">
          <?php echo form_error('ttl'); ?>
        </div>

        <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Menyimpan..." class="penandaku-btn-bookmark btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
</div>
</div>
