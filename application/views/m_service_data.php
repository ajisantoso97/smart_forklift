<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h3 style="color:blue;">MASTER TABLE SERVICE FORKLIFT</h3>
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
                <a href="<?= base_url('dashboard/add') ?>" class="btn btn-success btn-flat">
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
                                <th>EQUIPMENT</th>
                                <th>LOKASI</th>
                                <th>JAN</th>
                                <th>FEB</th>
                                <th>MAR</th>
                                <th>APR</th>
                                <th>MEI</th>
                                <th>JUN</th>
                                <th>JUL</th>
                                <th>AGST</th>
                                <th>SEP</th>
                                <th>OKT</th>
                                <th>NOV</th>
                                <th>DES</th>
                                <th class="text-center">ACTION</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($forklift as $row) { ?>
                                <tr>
                                    <td>
                                        <?php echo $no++; ?>
                                    </td>
                                    <!-- <td>
                                           <?php echo $row->intno ?>
                                       </td> -->
                                    <td>
                                        <?php echo $row->txtequipment ?>
                                    </td>
                                    <td>
                                        <?php echo $row->txtlokasi ?>
                                    </td>
                                    <td>
                                        <?php echo $row->txtjan ?>
                                    </td>
                                    <td>
                                        <?php echo $row->txtfeb ?>
                                    </td>
                                    <td>
                                        <?php echo $row->txtmar ?>
                                    </td>
                                    <td>
                                        <?php echo $row->txtapr ?>
                                    </td>
                                    <td>
                                        <?php echo $row->txtmei ?>
                                    </td>
                                    <td>
                                        <?php echo $row->txtjun ?>
                                    </td>
                                    <td>
                                        <?php echo $row->txtjul ?>
                                    </td>
                                    <td>
                                        <?php echo $row->txtagst ?>
                                    </td>
                                    <td>
                                        <?php echo $row->txtsep ?>
                                    </td>
                                    <td>
                                        <?php echo $row->txtokt ?>
                                    </td>
                                    <td>
                                        <?php echo $row->txtnov ?>
                                    </td>
                                    <td>
                                        <?php echo $row->txtdes ?>
                                    </td>
                                    <td class="text-center" width="160px">
                                        <a href="<?= site_url('service_forklift/edit_service/' . $row->int_service_id) ?>" class="btn btn-primary btn-xs">
                                            <i class="fa fa-pencil"></i> Update
                                        </a>
                                        <a href="<?= site_url('dashboard/service_forklift/del/' . $row->int_service_id) ?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
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