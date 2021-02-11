<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h3 style="color:blue;">MASTER TABLE PIC FORKLIFT</h3>
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
                <a href="<?= site_url('forklift/add') ?>" class="btn btn-success btn-flat">
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
                                <th>PIC FORKLIFT</th>
                                <th>TAHUN</th>
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
                                    <td class="text-center" width="160px">
                                        <a href="<?= site_url('forklift/edit_forklift/' . $row->intno) ?>" class="btn btn-primary btn-xs">
                                            <i class="fa fa-pencil"></i> Update
                                        </a>
                                        <a href="<?= site_url('forklift/del/' . $row->intno) ?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
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
<!-- sweet alert untuk create data -->
<script>
    <?php
    $flashdata = $this->session->flashdata('msg');
    if ($flashdata == 'sukses') {
    ?>
        setTimeout(function() {
            swal({
                title: "Data Berhasil Disimpan!",
                text: "You clicked the button!",
                type: "success"
            }, );
        }, 1300);
    <?php } ?>
</script>
<!-- sweet alert untuk hapus data -->
<script>
    <?php
    $flashdata = $this->session->flashdata('msg');
    if ($flashdata == 'sukses2') {
    ?>
        setTimeout(function() {
            swal({
                title: "Data Berhasil Dihapus!",
                text: "You clicked the button!",
                type: "success"
            }, );
        }, 1300);
    <?php } ?>
</script>
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