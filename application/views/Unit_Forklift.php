  <div class="row wrapper border-bottom white-bg page-heading">
      <div class="col-lg-10">
          <h3 style="color:blue;">Dashboard Forklift</h3>
          <ol class="breadcrumb">
              <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
              </li>
          </ol>
      </div>
      <div class="col-lg-2">
      </div>
  </div>
  <?php $no = 1;
    foreach ($forklift as $row) { ?>
      <div class="page-body mt-3">
          <div class="row">
              <table>
                  <div class="col-md-3">
                      <div class="ibox">
                          <div class="ibox-content product-box">

                              <div class="product-imitation">
                                  <img src="<?= base_url() . 'assets/img/' . $row->txtgambar ?>" alt="" style="width:200px; height: 200px;">
                              </div>
                              <div class="product-desc">
                                  <small class="text-muted">
                                      Nama Unit : <?php echo $row->txtwhversion ?>
                                  </small>
                                  <br>
                                  <small class="text-muted">
                                      Jenis Unit : <?php echo $row->txtengversion ?>
                                  </small>
                                  <div class="small m-t-xs">
                                      PIC Unit: <?php echo $row->txtnamepic ?>
                                  </div>
                                  <div class="m-t text-righ">
                                      <a href="#" class="btn btn-xs btn-outline btn-primary" data-toggle="tooltip" data-placement="top" title="Checklist Unit" data-original-title="Tooltip on top"><i class="fa fa-check"></i> </a>
                                      <a href="#" class="btn btn-xs btn-outline btn-primary" data-toggle="tooltip" data-placement="top" title="Service Rutin" data-original-title="Tooltip on top"><i class="fa fa-wrench"></i> </a>
                                      <a href="#" class="btn btn-xs btn-outline btn-primary" data-toggle="tooltip" data-placement="top" title="Kerusakan" data-original-title="Tooltip on top"><i class="fa fa-warning"></i> </a>

                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>

          </div>
      </div>
  <?php } ?>
  </table>