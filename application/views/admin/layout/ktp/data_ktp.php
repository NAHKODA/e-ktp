<div class="col-md-9">
  <?php print $this->session->flashdata('notif'); ?>
    <div class="panel panel-default">
      <div class="panel-heading"><i class="fa fa-bookmark"></i> Data E-KTP</div>
      <div class="panel-body">
        <a href="<?php print base_url() ?>admin/ktp/tambah/" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Data</a>
        <table class="table table-bordered table-striped" style="margin-top:10px">
          <tbody>
          <thead>
            <tr>
              <th class="text-center">No.</th>
              <th class="text-center">NIK</th>
              <th class="text-center">NAMA LENGKAP</th>
              <th class="text-center">BERLAKU</th>
              <th class="text-center">OPTIONS</th>
            </tr>
          </thead>
          <?php
      		    $no = $this->uri->segment('4') + 1;
      		    foreach($data_ktp->result() as $hasil){
      		?>
            <tr>
              <td class="text-center"><?php echo $no++; ?></td>
              <td class="text-center"><?php echo $hasil->nik ?></td>
              <td><?php echo $hasil->nama ?></td>
              <td class="text-center" ><?php echo $hasil->berlaku ?></td>
              <td class="text-center"><?php echo anchor('admin/ktp/edit/'.$this->encryption->encode($hasil->nik), '<i class="fa fa-edit"></i> Edit') ?> || <?php echo anchor('admin/ktp/delete/'.$this->encryption->encode($hasil->nik), '<i class="fa fa-trash"></i> Delete') ?> </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <?php echo $this->pagination->create_links(); ?>
      </div>
    </div>
</div>

</div>
</div>
