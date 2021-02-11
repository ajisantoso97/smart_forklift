<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h3 style="color:blue;">TABLE CLEANING FORKLIFT</h3>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?= base_url() ?>assets/css/bootstrap.min.css" class="dropdown-item">Config option 1</a>
                        </li>
                        <li><a href="#" class="dropdown-item">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <a href="<?= site_url('c_cleaning/add') ?>" class="btn btn-success btn-flat">
                    <i class="fa fa-user-plus"></i> Create
                </a>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table id="dataTables-example" class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <!-- <th>intno</th> -->
                                <th>AREA</th>
                                <th>WH VERSION</th>
                                <th>ENG VERSION</th>
                                <th>SERIAL NUMBER</th>
                                <th style="min-width:100px">PIC FORKLIFT</th>
                                <th>TAHUN</th>
                                <th>QR CODE</th>
                                <th class="text-center">ACTION</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($cleaning as $row) { ?>
                                <tr>
                                    <td>
                                        <?php echo $no++; ?>
                                    </td>
                                    <!-- <td>
                                           <?php echo $row->int_forklift_id ?>
                                       </td> -->
                                    <td>
                                        <?php echo $row->txtarea ?>
                                    </td>
                                    <td>
                                        <?php echo $row->txtwhversion ?>
                                    </td>
                                    <td>
                                        <?php echo $row->txtengversion ?>
                                    </td>
                                    <td>
                                        <?php echo $row->txtserialnumber ?>
                                    </td>
                                    <td>
                                        <?php echo $row->txtnamepic ?>
                                    </td>
                                    <td>
                                        <?php echo $row->inttahun ?>
                                    </td>
                                    <td>
                                        <?php

                                        $qrCode = new Endroid\QrCode\QrCode('Serial Number : ' . $row->txtserialnumber . "\n" . 'Area : ' . $row->txtarea . "\n" . 'Nama Unit : ' . $row->txtwhversion . "\n" . 'Jenis Unit : ' . $row->txtengversion . "\n" . 'Nama PIC : ' . $row->txtnamepic . "\n" . 'Tahun : ' . $row->inttahun);
                                        $qrCode->writeFile('assets/img/qr' . $row->txtserialnumber . '.png');
                                        ?>
                                        <img src="<?= base_url('assets/img/qr' . $row->txtserialnumber . '.png') ?>" alt="QR CODE" style="width:100px">
                                    </td>
                                    <td class="text-center" style="vertical-align:middle;">
                                        <a style="margin-bottom: 10px;" href="<?= site_url('c_cleaning/edit_cleaning/' . $row->int_forklift_id) ?>" class="btn btn-primary btn-xs">
                                            <i class="fa fa-pencil"></i> Update
                                        </a>
                                        <a href="<?= site_url('c_cleaning/del/' . $row->int_forklift_id) ?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
                                    </td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [{
                    extend: 'copy'
                },
                {
                    extend: 'csv'
                },
                {
                    extend: 'excel',
                    title: 'ExampleFile'
                },
                {
                    extend: 'pdf',
                    title: 'ExampleFile'
                },

                {
                    extend: 'print',
                    customize: function(win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]

        });

    });
</script>