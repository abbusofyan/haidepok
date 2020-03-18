        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->

                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">
                            <br>


                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">

                                            <h4 class="mt-0 he</h4>
                                            <!-- <button type="button" id="entryklaim" aria-expanded="true" class="btn btn-primary btn-sm" style="float: right;"><i class="mdi mdi-plus"></i>Aksi</button> -->
                                            <button type="button" id="entryklaim" aria-expanded="true" class="btn btn-primary btn-sm" style="float: right;"><i class="mdi mdi-plus"></i>Ruang Publik</button>
                                            <!-- <button type="button" id="entryklaim" aria-expanded="true" class="btn btn-primary btn-sm" style="float: right;"><i class="mdi mdi-plus"></i>Ruang Publik</button> -->
                                            <!-- <p class="text-muted m-b-30 font-14">DataTables has most features enabled by
                                                default, so all you need to do to use it with your own tables is to call
                                                the construction function: <code>$().DataTable();</code>.
                                            </p> -->

                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <!-- <th><div class="skin skin-polaris check-all"><input type="checkbox" id="check-all"></div></th> -->
                                                    <th>Nama Ruang Publik</th>
                                                    <th>Alamat</th>
                                                    <th>Status</th>
                                                    <th>Tipe</th>
                                                    <th>Jenis Bayar</th>
                                                    <th>Fungsi</th>

                                                </tr>
                                                </thead>


                                                <tbody>
                                                <tr>
                                                    <td>Taman Merdeka</td>
                                                    <td>Jl. Merdeka No.1, Mekar Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16411</td>
                                                    <td><span class="badge badge-warning">Diajukan</span></td>
                                                    <td>Out Door</td>
                                                    <td>Gratis</td>
                                                    <td>Taman Bermain Keluarga</td>


                                                </tr>
                                                <tr>
                                                    <td>Taman Lembah Gurame</td>
                                                    <td>Jl. Nangka Raya No.68, Depok Jaya, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16432</td>
                                                    <td></span></td>
                                                    <td>Out Door</td>
                                                    <td>Gratis</td>
                                                    <td>Taman Bermain Keluarga</td>


                                                </tr>
                                                <tr>
                                                    <td>Aula Perpustakaan</td>
                                                    <td>Jl. Margonda Raya No.54, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431</td>
                                                    <td></span></td>
                                                    <td>In Door</td>
                                                    <td>Berbayar</td>
                                                    <td>Seminar, Rapat</td>

                                                </tr>
                                                <tr>
                                                    <td>Gedung Dibaleka 2</td>
                                                    <td>Jl. Margonda Raya No.54, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431</td>
                                                    <td></span></td>
                                                    <td>In Door</td>
                                                    <td>Berbayar</td>
                                                    <td>Seminar, Rapat</td>

                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->



            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->




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
