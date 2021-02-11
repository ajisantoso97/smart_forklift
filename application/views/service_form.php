<div class="ibox-content">
    <div class="text-center">
        <a href="<?= site_url('dashboard/service_forklift') ?>" class="btn btn-warning btn-flat">
            <i class="fa fa-undo"></i> Back
        </a>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h3 style="color:blue;" class="m-t-none m-b">Tambah Data</h3>
            <form role="form" method="post" action="addProses">
                <div class="form-group"><label>No</label> <input type="text" name="No" class="form-control"></div>
                <div class="form-group"><label>Equipment</label> <input type="text" name="Equipment" class="form-control"></div>
                <div class="form-group"><label>Lokasi</label> <input type="text" name="Lokasi" class="form-control"></div>
                <div class="form-group"><label>Jan</label> <input type="text" name="Jan" class="form-control"></div>
                <div class="form-group"><label>Feb</label> <input type="text" name="Feb" class="form-control"></div>
                <div class="form-group"><label>Mar</label> <input type="text" name="Mar" class="form-control"></div>
                <div class="form-group"><label>Apr</label> <input type="text" name="Apr" class="form-control"></div>
                <div class="form-group"><label>Mei</label> <input type="text" name="Mei" class="form-control"></div>
                <div class="form-group"><label>Jun</label> <input type="text" name="Jun" class="form-control"></div>
                <div class="form-group"><label>Jul</label> <input type="text" name="Jul" class="form-control"></div>
                <div class="form-group"><label>Agst</label> <input type="text" name="Agst" class="form-control"></div>
                <div class="form-group"><label>Sep</label> <input type="text" name="Sep" class="form-control"></div>
                <div class="form-group"><label>Okt</label> <input type="text" name="Okt" class="form-control"></div>
                <div class="form-group"><label>Nov</label> <input type="text" name="Nov" class="form-control"></div>
                <div class="form-group"><label>Des</label> <input type="text" name="Des" class="form-control"></div>

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