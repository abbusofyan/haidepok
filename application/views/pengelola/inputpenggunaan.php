<section id="number-tabs">
  <div class="row">
    <div class="col-12">

      <div class="card">

        <div class="card-header">
          <h1 class="mt-0 header-title">Input Penggunaan Ruang Publik</h1>
          <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <form action="<?php echo base_url('Home/input_pasien'); ?>" method="POST" enctype="multipart/form-data" class="wpcf7-form sjpform" id="sjpform">
              <!-- ////////////////////INPUTAN DATA PEMOHON /////////////////////////-->
              <!-- ////////////////////INPUTAN DATA PEMOHON /////////////////////////-->
              <h5 class="text-left ml-3"><i class="ft-user"></i> <strong>Detail Pengguna</strong></h5>
              <fieldset class="mt-2">
                <div class="form-group row">
                  <label class="col-lg-3 label-control" for="namalengkap">NIK*</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control kontrakform" placeholder="NIK"
                    name="nama_pemohon" id="namapemohon" required> 
                  </div>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" placeholder="Nama Lengkap"
                    name="whatsapp_pemohon" id="Whatsapp_pemohon">
                  </div>
                  <div class="col-lg-3">
                    <select name="jenis_kelamin_pemohon" id="jeniskelaminkpemohon" class="form-control" required>
                      <option value="">Jenis Kelamin</option>
                      <option value="Perempuan">Perempuan</option>
                      <option value="Laki-Laki">Laki - Laki</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 label-control" for="notelp">Informasi Kontak*</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" placeholder="No Telp"
                    name="telepon_pemohon" id="telepon_pemohon">
                  </div>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" placeholder="No Whatsapp"
                    name="whatsapp_pemohon" id="Whatsapp_pemohon">
                  </div>
                  <div class="col-lg-4">
                    <input type="email" class="form-control" placeholder="Email"
                    name="email_pemohon" id="emailpemohon">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 label-control" for="alamat_pemohon">Alamat/Rt/Rw</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" placeholder="Alamat"
                    name="alamat_pemohon" id="alamatpemohon">
                  </div>
                  <div class="col-lg-1">
                    <input type="text" class="form-control" placeholder="Rt"
                    name="rt_pemohon" id="rtpemohon">
                  </div>
                  <div class="col-lg-1">
                    <input type="text" class="form-control" placeholder="Rw"
                    name="rw_pemohon" id="rwpemohon">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 label-control" for="tempat">Kec/Kel</label>

                  <div class="col-lg-3">
                    <select class="select2 form-control block kecamatan" id="kd_kecamatanpemohon" name="kd_kecamatan_pemohon" style="width: 100%">
                     <option>Pilih Kecamatan</option>
                     <?php if (!empty($kecamatan)) {
                      foreach ($kecamatan as $key) {?>
                      <option value="<?= $key['kecamatan'] ?>"><?= $key['kecamatan'] ?></option>
                      <?php }
                    } ?>
                  </select>
                </div>
                <div class="col-lg-3">
                  <select class="select2 form-control block kelurahan" id="kd_kelurahanpemohon" name="kd_kelurahan_pemohon" style="width: 100%">
                   <option>Pilih Kelurahan</option>

                 </select>
               </div>
             </div>
        </fieldset>
        <!-- ////////////////////INPUTAN DATA PEMOHON /////////////////////////-->
        <!-- ////////////////////INPUTAN DATA PEMOHON /////////////////////////-->
          <h5 class="text-left ml-3"><i class="ft-user"></i> <strong>Detail Komunitas</strong></h5>
              <fieldset class="mt-2">
                <div class="form-group row">
                  <label class="col-lg-3 label-control" for="namalengkap">Nama Komunitas</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control kontrakform" placeholder="Nama Komunitas"
                    name="nama_pemohon" id="namapemohon" required> 
                  </div>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" placeholder="PIC Komunitas"
                    name="whatsapp_pemohon" id="Whatsapp_pemohon">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 label-control" for="notelp">Informasi Kontak*</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" placeholder="No Telp"
                    name="telepon_pemohon" id="telepon_pemohon">
                  </div>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" placeholder="No Whatsapp"
                    name="whatsapp_pemohon" id="Whatsapp_pemohon">
                  </div>
                  <div class="col-lg-4">
                    <input type="email" class="form-control" placeholder="Email"
                    name="email_pemohon" id="emailpemohon">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 label-control" for="alamat_pemohon">Alamat/Rt/Rw</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" placeholder="Alamat"
                    name="alamat_pemohon" id="alamatpemohon">
                  </div>
                  <div class="col-lg-1">
                    <input type="text" class="form-control" placeholder="Rt"
                    name="rt_pemohon" id="rtpemohon">
                  </div>
                  <div class="col-lg-1">
                    <input type="text" class="form-control" placeholder="Rw"
                    name="rw_pemohon" id="rwpemohon">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 label-control" for="tempat">Kec/Kel</label>

                  <div class="col-lg-3">
                    <select class="select2 form-control block kecamatan" id="kd_kecamatanpemohon" name="kd_kecamatan_pemohon" style="width: 100%">
                     <option>Pilih Kecamatan</option>
                     <?php if (!empty($kecamatan)) {
                      foreach ($kecamatan as $key) {?>
                      <option value="<?= $key['kecamatan'] ?>"><?= $key['kecamatan'] ?></option>
                      <?php }
                    } ?>
                  </select>
                </div>
                <div class="col-lg-3">
                  <select class="select2 form-control block kelurahan" id="kd_kelurahanpemohon" name="kd_kelurahan_pemohon" style="width: 100%">
                   <option>Pilih Kelurahan</option>

                 </select>
               </div>
             </div>
        </fieldset>


        <!-- ////////////////////INPUTAN DATA PASIEN /////////////////////////-->
        <!-- ////////////////////INPUTAN DATA PASIEN /////////////////////////-->
        <h5 class="text-left ml-3"><i class="ft-user"></i> <strong>Detail Pemesanan</strong></h5>
        <fieldset class="mt-2">
          <div class="form-group row">

            <label class="col-lg-3 label-control" for="notelp">Nama Acara</label>
            <div class="col-lg-3">
                    <input type="text" class="form-control" placeholder="Nama Acara"
                    name="whatsapp_pemohon" id="Whatsapp_pemohon">
                  </div>
            <div class="col-lg-3">                        
              <select name="jenisjaminan" class="form-control">
                <option value="">Tipe Acara</option>
                <option value="">Publik</option>
                <option value="">Privat</option>
                <!-- <?php if (!empty($jenisjaminan)) {
                  foreach ($jenisjaminan as $key) {?>
                  <option value="<?= $key['id_jenissjp'] ?>"><?= $key['nama_jenis'] ?></option>
                  <?php }
                } ?> -->
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-lg-3 label-control" for="nik">Periode Penggunaan</label>
            <div class="col-lg-3">
              <input type="text" class="form-control" placeholder="Periode Penggunaan"
              name="nik" id="nikpasien">
            </div>
            <div class="col-lg-3">
                    <input type="text" class="form-control" placeholder="Jumlah Tamu"
                    name="whatsapp_pemohon" id="Whatsapp_pemohon">
                  </div>
          </div>
          <div class="form-group row" id="modalwal">
                            <label class="col-lg-3 label-control" for="modal">Kartu Tanda Penduduk (KTP)*</label>
                            <div class="col-sm-6">
                              <input type="hidden" value="" class="form-control" name="" style="height: 40px;" >
                              <input type="file" id="dokumen" class="form-control" name="" style="height: 40px;" >
                            </div>
                          </div>
                          <div class="form-group row" id="modalwal">
                            <label class="col-lg-3 label-control" for="modal">Proposal</label>
                            <div class="col-sm-6">
                              <input type="hidden" value="" class="form-control" name="" style="height: 40px;" >
                              <input type="file" id="dokumen" class="form-control" name="" style="height: 40px;" >
                            </div>
                          </div>
                          <div class="form-group row" id="modalwal">
                            <label class="col-lg-3 label-control" for="modal">Surat Rekomendasi OPD</label>
                            <div class="col-sm-6">
                              <input type="hidden" value="" class="form-control" name="" style="height: 40px;" >
                              <input type="file" id="dokumen" class="form-control" name="" style="height: 40px;" >
                            </div>
                          </div>
                          <div class="form-group row" id="modalwal">
                            <label class="col-lg-3 label-control" for="modal">Surat Ijin Keramaian</label>
                            <div class="col-sm-6">
                              <input type="hidden" value="" class="form-control" name="" style="height: 40px;" >
                              <input type="file" id="dokumen" class="form-control" name="" style="height: 40px;" >
                            </div>
                          </div>
                          <div class="form-group row" id="modalwal">
                            <label class="col-lg-3 label-control" for="modal">Bukti Pembayaran</label>
                            <div class="col-sm-6">
                              <input type="hidden" value="" class="form-control" name="" style="height: 40px;" >
                              <input type="file" id="dokumen" class="form-control" name="" style="height: 40px;" >
                            </div>
                          </div>
                          <div class="form-group row" id="modalwal">
                            <label class="col-lg-3 label-control" for="modal">Poster Acara</label>
                            <div class="col-sm-6">
                              <input type="hidden" value="" class="form-control" name="" style="height: 40px;" >
                              <input type="file" id="dokumen" class="form-control" name="" style="height: 40px;" >
                            </div>
                          </div>
                          <div class="form-group row" id="modalwal">
                            <label class="col-lg-3 label-control" for="modal">Total Bayar</label>
                            <div class="col-sm-3">
                              <input type="text" value="" class="form-control" name="" style="height: 40px;" >
                              
                            </div>
                          </div>


         

      
     



    <button type="submit" class="btn btn-primary btn-md" id="simpanpengajuan" style="float: right;">
      <i class="ft-check-square"></i> Submit
    </button>
  </fieldset>

  <!-- ////////////////////INPUTAN DATA PEMOHON /////////////////////////-->
  <!-- ////////////////////INPUTAN DATA PEMOHON /////////////////////////-->


</form>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>

<link rel="stylesheet" type="text/css" href="<?= base_url()?>app-assets/vendors/css/forms/icheck/icheck.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>app-assets/vendors/css/forms/selects/select2.min.css">
<script src="<?= base_url()?>app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script> 
<script src="<?= base_url()?>app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>app-assets/vendors/js/forms/repeater/jquery.repeater.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>app-assets/js/scripts/forms/form-repeater.js" type="text/javascript"></script>
<script type="text/javascript">
 $('.skin-polaris input').iCheck({
  checkboxClass: 'icheckbox_polaris',
  increaseArea: '-10%'
});
  // Multiple Select Placeholder
  function diagnosa2() {
    $('.kd_diagnosa').select2({
      placeholder: "Pilih penyakit",
    });
  }
  $(document).ready(function(){
      //getkelurahan();
      diagnosapenyakit();
      diagnosa2();
     // $('.diagnosalainnya').hide();
    });
  $('#kd_kecamatanpemohon').change(function(){
    getkelurahan();
  })
  function getkelurahan() {
    var data = $('#kd_kecamatanpemohon').val();
    $.ajax({
      url : "<?= base_url();?>/Home/getKelurahan",
      method : "POST",
      data : {id: data},
      async : false,
      dataType : 'json',
      success: function(data){
        var html = '<option>Pilih Kelurahan</option>';
        var i;
        for(i=0; i<data.length; i++){
          html += '<option value = "'+data[i].kelurahan+'">'+data[i].kelurahan+'</option>';
        }
        $('#kd_kelurahanpemohon').html(html);

      }
    });
  }
  // $('.checkbox').on('ifChecked', function (event) {
  //   $('.diagnosalainnya').show();
  // });

  // $('.checkbox').on('ifUnchecked', function (event) {
  //   $('.diagnosalainnya').hide();
  // });
  $('.add').click(function (argument) {
    diagnosapenyakit();
    diagnosa2();
    $('.skin-polaris input').iCheck({
      checkboxClass: 'icheckbox_polaris',
      increaseArea: '-10%'
    });
  });
  function diagnosapenyakit() {
   $('.diagnosapenyakit').each(function(index) {
    $('.kd_topik').select2({
     placeholder: "Pilih Topik"
   }).eq(index).on('select2:select', function (evt) {
    var data = $(this).val();
    $.ajax({
      url : "<?= base_url();?>/Home/getDiagnosa",
      method : "POST",
      data : {id: data},
      async : false,
      dataType : 'json',
      success: function(data){
        var html = '<option>Pilih Diagnosa</option>';
        var i;
        for(i=0; i<data.length; i++){
          html += '<option value = "'+data[i].namadiag+'">'+data[i].namadiag+'</option>';
        }
        $('.kd_diagnosa').eq(index).html(html);

      }
    });
  });
 });
 }
    //  $('.add').click(function() {
    //       $('.kd_topik').each(function(index) {
    //         //console.log(index)
    //   $('.kd_topik').eq(index).change(function(){

    // })
    // })
    //  })


    function getdiagnosa() {
      var data = $('#kd_topik').val();
      $.ajax({
        url : "<?= base_url();?>/Home/getDiagnosa",
        method : "POST",
        data : {id: data},
        async : false,
        dataType : 'json',
        success: function(data){
          var html = '<option>Pilih Diagnosa</option>';
          var i;
          for(i=0; i<data.length; i++){
            html += '<option value = "'+data[i].namadiag+'">'+data[i].namadiag+'</option>';
          }
          $('#kd_diagnosa').html(html);

        }
      });
    }
    $('#kd_kecamatanpasien').change(function(){
      getkelurahanpasien();
    })
    function getkelurahanpasien() {
      var data = $('#kd_kecamatanpasien').val();
      $.ajax({
        url : "<?= base_url();?>/Home/getKelurahan",
        method : "POST",
        data : {id: data},
        async : false,
        dataType : 'json',
        success: function(data){
          var html = '<option>Pilih Kelurahan</option>';
          var i;
          for(i=0; i<data.length; i++){
            html += '<option value = "'+data[i].kelurahan+'">'+data[i].kelurahan+'</option>';
          }
          $('#kd_kelurahanpasien').html(html);

        }
      });
    }
    // $('#simpanpengajuan').click(function() {
    //   var tes = $('.sjpform').serialize();
    //   console.log(decodeURIComponent(tes));
    // })

  </script>

  <script>
   $(document).ready(function() {
    //$('.js-example-basic-multiple').select2({placeholder: "Pilih Diagnosa"});
  });
</script>