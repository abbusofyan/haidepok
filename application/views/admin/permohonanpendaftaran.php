<section id="configuration">
  <style type="text/css">
  .table th{
    width: 10%;
  }
  .table th, .table td {
    padding-top: 0.75rem;
    padding-right: 2rem;
    padding-bottom: 0.75rem;
    padding-left: 20px;
  }
  th {
    white-space: pre-wrap;
  }
  </style>
  <div class="row">
    <div class="col-12">
      <?php if($this->session->flashdata('message')){ ?>
      <div class="alert alert-success" role="alert">
      <b class="text-dark"><?php echo $this->session->flashdata('message'); ?></b>
      </div>
      <?php } ?>
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Permohonan Pendaftaran Ruang Publik</h4>
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
          <button type="button" id="entryklaim" aria-expanded="true" class="btn btn-primary btn-sm ml-2"><i class="mdi mdi-plus"></i>Ruang Publik</button>
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped table-bordered zero-configuration" style="cursor:pointer">
                <thead>
                  <tr>
                    <th>Nama Ruang</th>
                    <th>Alamat</th>
                    <th>Jenis</th>
                    <th>Fungsi</th>
                    <th>Status</th>
                    <th>Aksi</th>
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
                    <td><a href='".base_url('Admin/detailpendaftaran/'.$rp['id_ruangpublik'])."'>".$rp['nama_ruangpublik']."</a></td>
                    <td>".$rp['alamat_ruangpublik'].", ".$rp['kel_ruangpublik'].", Kec. ".$rp['kec_ruangpublik'].", Kota Depok, Jawa Barat</td>
                    <td>".$rp['nama_tipe']."</td>
                    <td>-</td>
                    <td><span class='badge badge-".$color."'>".$status."</span></td>
                    <td>
                      <div class='btn-group btn-group-toggle' data-toggle='buttons'>
                        <button type='button' data-toggle='modal' data-target='#setuju".$rp['id_ruangpublik']."' class='btn btn-info btn-circle'>
                        <i class='la la-check'></i></button>
                        <button type='button' data-toggle='modal' data-target='#tolak".$rp['id_ruangpublik']."' class='btn btn-danger btn-circle ml-1'>
                        <i class='la la-close'></i></button>
                      </div>
                    </td>
                    </tr>";
                    // modal
                    ?>
                    <div class="modal inmodal" id="setuju<?php echo $rp['id_ruangpublik']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                         <div class="modal-content animated fadeIn">
                            <div class="modal-header">
                                <h3>Perhatian <?php echo $rp['id_ruangpublik']; ?></h3>
                            </div>
                                <div class="modal-body">
                                   <p>Apakah anda yakin ingin menyetujui permohonan pendaftaran Ruang Publik?</p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Tidak</button>
                                    <a href="<?php echo base_url('Admin/approveruangpublik/'.$rp['id_ruangpublik'].'/3');?>" class="btn btn-primary">Ya</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal inmodal" id="tolak<?php echo $rp['id_ruangpublik']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                         <div class="modal-content animated fadeIn">
                            <div class="modal-header">
                                <h3>Perhatian <?php echo $rp['id_ruangpublik']; ?></h3>
                            </div>
                                <div class="modal-body">
                                   <p>Apakah anda yakin ingin Menolak permohonan registrasi ?</p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Tidak</button>
                                    <a href="<?php echo base_url('Admin/approveruangpublik/'.$rp['id_ruangpublik'].'/4');?>" class="btn btn-primary">Ya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="modal inmodal" id="setuju" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content animated fadeIn">
<div class="modal-header">
<h3>Perhatian</h3>
</div>
<div class="modal-body">
   <p>Apakah anda yakin ingin menyetujui permohonan Registrasi ?</p>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-white" data-dismiss="modal">Tidak</button>
  <button type="button" class="btn btn-primary" data-dismiss="modal">Ya</button>
</div>
</div>
</div>
</div>

<div class="modal inmodal" id="tolak" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content animated fadeIn">
<div class="modal-header">
<h3>Perhatian</h3>
</div>
<div class="modal-body">
   <p>Apakah anda yakin ingin Menolak permohonan registrasi ?</p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-white" data-dismiss="modal">Tidak</button>
    <button type="button" class="btn btn-primary" data-dismiss="modal">Ya</button>
</div>
</div>
</div>
</div>

</section>
