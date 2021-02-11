   <section class="content-header">
       <h3 style="color:blue;">Edit Data Cleaning</h3>
   </section>
   <div class="box">
       <div class="box-header">
           <div class="pull-right">
               <a href="<?= site_url('c_cleaning') ?>" class="btn btn-warning btn-flat">
                   <i class="fa fa-undo"></i> Back
               </a>
           </div>
       </div>
   </div>

   <?php $no = 1;
    foreach ($forklift as $row) { ?>

       <?php echo form_open('c_cleaning/update_cleaning'); ?>
       <div class="col-8">
           <label>No</label>
           <input type="text" name="no" value="<?= $row->int_forklift_id ?>" class="form-control" required>
       </div>
       <br>
       <div class="col-8">
           <label>Area</label>
           <input type="text" name="area" value="<?= $row->txtarea ?>" class="form-control" required>
       </div>
       <br>
       <div class="col-8">
           <label>Wh version</label>
           <input type="text" name="wh_version" value="<?= $row->txtwhversion ?>" class="form-control" required>
       </div>
       <br>
       <div class="col-8">
           <label>Eng version</label>
           <input type="text" name="eng_version" value="<?= $row->txtengversion ?>" class="form-control" required>
       </div>
       <br>
       <div class="col-8">
           <label>Serial number</label>
           <input type="text" name="serial_number" value="<?= $row->txtserialnumber ?>" class="form-control" required>
       </div>
       <br>
       <div class="col-8">
           <label>Pic forklift</label>
           <input type="text" name="pic_forklift" value="<?= $row->txtnamepic ?>" class="form-control" required>
       </div>
       <br>
       <div class="col-8">
           <label>Tahun</label>
           <input type="text" name="tahun" value="<?= $row->inttahun ?>" class="form-control" required>
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