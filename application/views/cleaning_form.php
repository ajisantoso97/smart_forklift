<div class="ibox-content">
    <div class="text-center">
        <a href="<?= site_url('c_cleaning') ?>" class="btn btn-warning btn-flat">
            <i class="fa fa-undo"></i> Back
        </a>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h3 style="color:blue;" class="m-t-none m-b">Tambah Data</h3>
            <form role="form" method="post" action="addProses">
                <div class="form-group"><label>No</label> <input type="text" name="No" class="form-control"></div>
                <div class="form-group"><label>Area</label> <input type="text" name="Area" class="form-control"></div>
                <div class="form-group"><label>WH Version</label> <input type="text" name="WH_Version" class="form-control"></div>
                <div class="form-group"><label>ENG Version</label> <input type="text" name="ENG_Version" class="form-control"></div>
                <div class="form-group"><label>Serial Number</label> <input type="text" name="Serial_Number" class="form-control"></div>
                <div class="form-group"><label>Pic Forklift</label> <input type="text" name="Pic_Forklift" class="form-control"></div>
                <div class="form-group"><label>Tahun</label> <input type="text" name="Tahun" class="form-control"></div>
                <div class="form-group">
                    <button type="submit" name="" class="btn btn-success btn-flat">
                        <i class="fa fa-paper-plane"></i> Save
                    </button>
                    <button type="Reset" class="btn btn-flat">Reset</button>
                </div>
                <br>
                
            </form>
        </div>
    </div>
</div>