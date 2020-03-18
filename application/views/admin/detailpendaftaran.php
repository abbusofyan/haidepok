
<div class="container-fluid">
    <br>

    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                  <?php if($this->session->flashdata('message')){ ?>
                  <div class="alert alert-success" role="alert">
                  <b class="text-primary"><?php echo $this->session->flashdata('message'); ?></b>
                  </div>
                  <?php } ?>
                    <h4 class="mt-0 header-title">Detail Permohonan Pendaftaran Ruang Publik</h4>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div><!-- container fluid -->

</div>

<!-- Required datatable js -->
<script src="<?= base_url()?>assets-admin-pengelola/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets-admin-pengelola/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?= base_url()?>assets-admin-pengelola/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>assets-admin-pengelola/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets-admin-pengelola/plugins/datatables/jszip.min.js"></script>
<script src="<?= base_url()?>assets-admin-pengelola/plugins/datatables/pdfmake.min.js"></script>
<script src="<?= base_url()?>assets-admin-pengelola/plugins/datatables/vfs_fonts.js"></script>
<script src="<?= base_url()?>assets-admin-pengelola/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?= base_url()?>assets-admin-pengelola/plugins/datatables/buttons.print.min.js"></script>
<script src="<?= base_url()?>assets-admin-pengelola/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="<?= base_url()?>assets-admin-pengelola/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?= base_url()?>assets-admin-pengelola/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="<?= base_url()?>assets-admin-pengelola/pages/datatables.init.js"></script>

<link href="<?= base_url()?>assets-admin-pengelola/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url()?>assets-admin-pengelola/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="<?= base_url()?>assets-admin-pengelola/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
