<section id="configuration">
  <div class="row">
    <div class="col-12">
      <?php if($this->session->flashdata('message')){ ?>
      <div class="alert alert-success" role="alert">
      <b class="text-primary"><?php echo $this->session->flashdata('message'); ?></b>
      </div>
      <?php } ?>
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Data Ruang Publik</h4>
          <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
              <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
              <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-content collapse show">
          <a href="<?php echo base_url('Pengelola/inputruangpublik');?>" class="btn btn-primary btn-sm ml-2" id="entryklaim">tambah</a>
          <div class="card-body card-dashboard">
              <table class="table table-striped table-bordered zero-configuration">
                <thead>
                  <tr>
                    <th>Nama Ruang Publik</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Tipe</th>
                    <th>Jenis Bayar</th>
                    <th>Fungsi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($ruangpublik as $rp) {
                    switch ($rp['status_pendaftaran']) {
                      case '1':
                        $color = "warning";
                        $status = "Diajukan";
                        break;

                      case '2':
                        $color = "primary";
                        $status = "Diproses";
                        break;

                      case '3':
                        $color = "success";
                        $status = "Disetujui";
                        break;

                      case '4':
                        $color = "danger";
                        $status = "Ditolak";
                        break;

                      default:
                        // code...
                        break;
                    }

                    echo "<tr>
                    <td>".$rp['nama_ruangpublik']."</td>
                    <td>".$rp['alamat_ruangpublik'].", ".$rp['kel_ruangpublik'].", Kec. ".$rp['kec_ruangpublik'].", Kota Depok, Jawa Barat</td>
                    <td><span class='badge badge-".$color."'>".$status."</span></td>
                    <td>".$rp['nama_tipe']."</td>
                    <td>".$rp['nama_jenisbayar']."</td>
                    <td>Taman Bermain Keluarga</td>
                    <td><a href='".base_url()."/Pengelola/detailruangpublik/".$rp['id_ruangpublik']."' class='btn btn-primary btn-sm'>detail</a>
                    <a href='#' class='btn btn-danger btn-sm'>hapus</a></td>
                    </tr>";
                  } ?>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
