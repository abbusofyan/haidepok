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
      <b class="text-primary"><?php echo $this->session->flashdata('message'); ?></b>
      </div>
      <?php } ?>
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Daftar Permohonan Registrasi</h4>
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
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <div class="row">
                <div class="col-lg-12">
                  <div class="element mb-1 p-r-15">
                    <button type="button" id="entryklaim" aria-expanded="true" class="btn btn-primary btn-sm ml-2">
                    <i class="la la-window-close"></i>Ruang Publik</button>
                  </div>
                </div>
              </div>
              <div class="row mb-1" style="padding-left: 15px; padding-right: 15px;" id="advancedfilterform">

              </div>
              <div class="row" style="padding-left: 15px; padding-right: 15px;">
                <div class="col-lg-3 filter">
                  <select name="" id="" class="form-control" style="width: 100%">
                    <option value="">Semua Puskesmas</option>
                  </select>
                </div>
                <div class="col-lg-3 filter">
                  <select name="" id="" class="form-control">
                    <option value="">Semua Rumah Sakit</option>
                  </select>
                </div>
                <div class="col-lg-3 filter">
                  <select name="" id="" class="form-control">
                    <option value="">Semua Status</option>
                  </select>
                </div>
                <div class="col-lg-3">
                  <div class="position-relative has-icon-left">
                    <input type="text" class="form-control" placeholder="Cari NIK, Nama Pasien">
                    <div class="form-control-position">
                      <i class="ft-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <table class="table table-striped table-bordered zero-configuration" style="cursor:pointer">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>Ahmad Hidayat</td>
                      <td>Jl. Merdeka No.1, Mekar Jaya, Kec. Sukmajaya, Kota Depok</td>
                      <td>ahmadhidayat@gmail.com</td>
                      <td>083872637283</td>
                      <td>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                          <button type="button" data-toggle="modal" data-target="#setuju" class="btn btn-info btn-sm" >
                          <i class="la la-check"></i>
                          <button type="button" data-toggle="modal" data-target="#tolak" class="btn btn-danger btn-circle btn-sm ml-1">
                          <i class="la la-close"></i>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <td>Jeremy Siahaan</td>
                      <td>Jl. Nangka Raya No.68, Depok Jaya, Kec. Pancoran Mas, Kota Depok</td>
                      <td>jeremysiahaan@gmail.com</td>
                      <td>082137268473</td>
                      <td>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                          <button type="button" data-toggle="modal" data-target="#setuju" class="btn btn-info btn-sm" >
                          <i class="la la-check"></i>
                          <button type="button" data-toggle="modal" data-target="#tolak" class="btn btn-danger btn-circle btn-sm ml-1">
                          <i class="la la-close"></i>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <td>Kevin Leonard</td>
                      <td>Jl. Margonda Raya No.54, Depok, Kec. Pancoran Mas, Kota Depok</td>
                      <td>kevinleonard2gmail.com</td>
                      <td>089372637482</td>
                      <td>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                          <button type="button" data-toggle="modal" data-target="#setuju" class="btn btn-info btn-sm" >
                          <i class="la la-check"></i>
                          <button type="button" data-toggle="modal" data-target="#tolak" class="btn btn-danger btn-circle btn-sm ml-1">
                          <i class="la la-close"></i>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <td>Geri Firmansyah</td>
                      <td>Jl. Margonda Raya No.54, Depok, Kec. Pancoran Mas, Kota Depok</td>
                      <td>gerifirmansyah@gmail.com</td>
                      <td>089672638273</td>
                      <td>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                          <button type="button" data-toggle="modal" data-target="#setuju" class="btn btn-info btn-sm" >
                          <i class="la la-check"></i>
                          <button type="button" data-toggle="modal" data-target="#tolak" class="btn btn-danger btn-circle btn-sm ml-1">
                          <i class="la la-close"></i>
                        </div>
                      </td>
                    </tr>
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
