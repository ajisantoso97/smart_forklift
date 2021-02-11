   <section class="content-header">
       <h3 style="color:blue;">Edit Data Service</h3>
   </section>
   <div class="box">
       <div class="box-header">
           <div class="pull-right">
               <a href="<?= site_url('dashboard/service_forklift') ?>" class="btn btn-warning btn-flat">
                   <i class="fa fa-undo"></i> Back
               </a>
           </div>
       </div>
   </div>

   <?php $no = 1;
    foreach ($forklift as $row) { ?>

       <?php echo form_open('service_forklift/update_service'); ?>
       <div class="col-8">
           <label>No</label>
           <input type="text" name="no" value="<?= $row->int_service_id ?>" class="form-control" required>
       </div>
       <br>
       <div class="col-8">
           <label>Equipment</label>
           <input type="text" name="area" value="<?= $row->txtequipment ?>" class="form-control" required>
       </div>
       <br>
       <div class="col-8">
           <label>Lokasi</label>
           <input type="text" name="wh_version" value="<?= $row->txtlokasi ?>" class="form-control" required>
       </div>
       <br>
       <div class="col-8">
           <label>Januari</label>
           <input type="text" name="eng_version" value="<?= $row->txtjan ?>" class="form-control" required>
       </div>
       <br>
       <div class="col-8">
           <label>Februari</label>
           <input type="text" name="serial_number" value="<?= $row->txtfeb ?>" class="form-control" required>
       </div>
       <br>
       <div class="col-8">
           <label>Maret</label>
           <input type="text" name="pic_forklift" value="<?= $row->txtmar ?>" class="form-control" required>
       </div>
       <br>
       <div class="col-8">
           <label>April</label>
           <input type="text" name="tahun" value="<?= $row->txtapr ?>" class="form-control" required>
       </div>
       <div class="col-8">
           <label>Mei</label>
           <input type="text" name="tahun" value="<?= $row->txtmei ?>" class="form-control" required>
       </div>
       <div class="col-8">
           <label>Juni</label>
           <input type="text" name="tahun" value="<?= $row->txtjun ?>" class="form-control" required>
       </div>
       <div class="col-8">
           <label>Juli</label>
           <input type="text" name="tahun" value="<?= $row->txtjul ?>" class="form-control" required>
       </div>
       <div class="col-8">
           <label>Agustus</label>
           <input type="text" name="tahun" value="<?= $row->txtagst ?>" class="form-control" required>
       </div>
       <div class="col-8">
           <label>September</label>
           <input type="text" name="tahun" value="<?= $row->txtsep ?>" class="form-control" required>
       </div>
       <div class="col-8">
           <label>Oktober</label>
           <input type="text" name="tahun" value="<?= $row->txtokt ?>" class="form-control" required>
       </div>
       <div class="col-8">
           <label>November</label>
           <input type="text" name="tahun" value="<?= $row->txtnov ?>" class="form-control" required>
       </div>
       <div class="col-8">
           <label>Desember</label>
           <input type="text" name="tahun" value="<?= $row->txtdes ?>" class="form-control" required>
       </div>
       <br>
       <div class="col-8">
           <button type="submit" class="btn btn-success btn-flat">
               <i class="fa fa-paper-plane"></i> Save
           </button>
           <button type="Reset" class="btn btn-flat">Reset</button>
       </div>

       <br><br><br>
       <?php echo form_close(); ?>
   <?php } ?>