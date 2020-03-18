<section id="number-tabs">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h1 class="mt-0 header-title">Input Ruang Publik</h1>

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
            <form action="<?php echo base_url('Pengelola/inputdataruangpublik'); ?>" method="POST" enctype="multipart/form-data" class="wpcf7-form sjpform" id="sjpform">
              <!-- ////////////////////INPUTAN DATA PEMOHON /////////////////////////-->
              <h5 class="text-left ml-3"><i class="ft-user"></i> <strong>Detail Ruang Publik</strong></h5>
              <fieldset class="mt-2">
                <div class="form-group row">
                <label class="col-lg-3 label-control" for="nama_ruang_publik">Nama Ruang Publik*</label>
                <div class="col-lg-3">
                <input type="text" class="form-control kontrakform" placeholder="Nama Ruang Publik"
                name="nama_ruang_publik" id="namapemohon" required>
                </div>
                <div class="col-lg-3">
                <input type="text" class="form-control" placeholder="PIC Ruang Publik"
                name="pic_ruang_publik" id="Whatsapp_pemohon">
                </div>
                </div>
                <div class="form-group row">
                <label class="col-lg-3 label-control" for="notelp">Informasi Kontak*</label>
                <div class="col-lg-2">
                <input type="text" class="form-control" placeholder="No Telp"
                name="no_telp" id="telepon_pemohon">
                </div>
                <div class="col-lg-2">
                <input type="text" class="form-control" placeholder="No Whatsapp"
                name="no_whatsapp" id="Whatsapp_pemohon">
                </div>
                <div class="col-lg-4">
                <input type="email" class="form-control" placeholder="Email"
                name="email" id="emailpemohon">
                </div>
                </div>
                <div class="form-group row">
                <label class="col-lg-3 label-control" for="alamat_pemohon">Alamat/Rt/Rw</label>
                <div class="col-lg-6">
                <input type="text" class="form-control" placeholder="Alamat"
                name="alamat" id="alamatpemohon">
                </div>
                <div class="col-lg-1">
                <input type="text" class="form-control" placeholder="Rt"
                name="rt" id="rtpemohon">
                </div>
                <div class="col-lg-1">
                <input type="text" class="form-control" placeholder="Rw"
                name="rw" id="rwpemohon">
                </div>
                </div>
                <div class="form-group row">
                <label class="col-lg-3 label-control" for="tempat">Kec/Kel</label>

                <div class="col-lg-3">
                <select class="select2 form-control block kecamatan" id="kecamatan" name="kd_kecamatan" style="width: 100%">
                <option>Pilih Kecamatan</option>
                <?php if (!empty($kecamatan)) {
                foreach ($kecamatan as $kcm) {?>
                <option value="<?= $kcm['kd_kecamatan'] ?>"><?= $kcm['kecamatan'] ?></option>
                <?php }
                } ?>
                </select>
                </div>
                <div class="col-lg-3">
                <select class="select2 form-control block kelurahan" id="kelurahan" name="kd_kelurahan" style="width: 100%">
                <option>Pilih Kelurahan</option>
                </select>
                </div>
                </div>

                <div class="form-group row">
                <label class="col-lg-3 label-control" for="namalengkap">Harga/Kapasitas</label>
                <div class="col-lg-3">
                <input type="text" class="form-control kontrakform" placeholder="Harga"
                name="harga" id="namapemohon" required>
                </div>
                <div class="col-lg-3">
                <input type="text" class="form-control" placeholder="Kapasitas"
                name="kapasitas" id="Whatsapp_pemohon">
                </div>
                </div>

                <div class="form-group row">
                <label class="col-lg-3 label-control" for="namalengkap">Jam Buka-Tutup</label>
                <div class="col-lg-2">
                <input type="time" name="jam_buka" class="form-control">
                </div>
                <div class="col-lg-2">
                <input type="time" name="jam_tutup" class="form-control">
                </div>
                </div>



                <div class="form-group row">
                <label class="col-lg-3 label-control" for="namalengkap">Deskripsi Ruang Publik</label>
                <div class="col-lg-3">
                <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                </div>
                </div>

                <div class="form-group row">
                <label class="col-lg-3 label-control" for="alamat_pemohon">Tipe</label>
                <?php if (!empty($tipe)) {
                foreach ($tipe as $tp) {?>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tipe" id="tipe <?php echo $tp['id_tiperuangpublik']; ?>" value="<?php echo $tp['id_tiperuangpublik']; ?>">
                <label class="form-check-label" for="tipe <?php echo $tp['id_tiperuangpublik']; ?>"><?php echo $tp['nama_tipe']; ?></label>
                </div>
                <?php }
                } ?>
                </div>

                <div class="form-group row">
                <label class="col-lg-3 label-control" for="alamat_pemohon">Jenis Bayar</label>
                <?php if (!empty($jenis_bayar)) {
                foreach ($jenis_bayar as $jns) { ?>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_bayar" id="jenis <?php echo $jns['id_jenisbayar']; ?>" value="<?php echo $jns['id_jenisbayar']; ?>">
                <label class="form-check-label" for="jenis <?php echo $jns['id_jenisbayar']; ?>"><?php echo $jns['nama_jenisbayar']; ?></label>
                </div>
                <?php }
                } ?>
                </div>

                <div class="form-group row">
                <label class="col-lg-3 label-control" for="alamat_pemohon">Fasilitas</label>
                <?php if (!empty($fasilitas)) {
                foreach ($fasilitas as $fsl) { ?>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="fasilitas[]" id="fasilitas <?php echo $fsl['id_fasilitas']; ?>" value="<?php echo $fsl['id_fasilitas']; ?>">
                <label class="form-check-label" for="fasilitas <?php echo $fsl['id_fasilitas']; ?>"><?php echo $fsl['nama_fasilitas']; ?></label>
                </div>
                <?php }
                } ?>
                </div>

                <div class="form-group row">
                <label class="col-lg-3 label-control" for="alamat_pemohon">Tata Tertib</label>
                <?php if (!empty($tatatertib)) {
                foreach ($tatatertib as $tater) { ?>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tatatertib[]" id="tatatertib <?php echo $tater['id_mastertatatertib']; ?>" value="<?php echo $tater['id_mastertatatertib']; ?>">
                <label class="form-check-label" for="tatatertib <?php echo $tater['id_mastertatatertib']; ?>"><?php echo $tater['tata_tertib']; ?></label>
                </div>
                <?php }
                } ?>
                </div>

                <div class="form-group row">
                <label class="col-lg-3 label-control" for="syarat dan ketentuan">Syarat Dan Ketentuan</label>
                <?php if (!empty($syarat)) {
                foreach ($syarat as $syrt) { ?>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="syarat[]" id="syarat <?php echo $syrt['id_syarat']; ?>" value="<?php echo $syrt['id_syarat']; ?>">
                <label class="form-check-label" for="syarat <?php echo $syrt['id_syarat']; ?>"><?php echo $syrt['syarat']; ?></label>
                </div>
                <?php }
                } ?>
                </div>

                <div class="form-group row">
                <label class="col-lg-3 label-control" for="alamat_pemohon">Fungsi</label>
                <?php if (!empty($fungsi)) {
                foreach ($fungsi as $fngs) { ?>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="fungsi[]" id="fungsi <?php echo $fngs['id_masterfungsi']; ?>" value="<?php echo $fngs['id_masterfungsi']; ?>">
                <label class="form-check-label" for="fungsi <?php echo $fngs['id_masterfungsi']; ?>"><?php echo $fngs['nama_fungsi']; ?></label>
                </div>
                <?php }
                } ?>
                </div>

                <div class="form-group row">
                <label class="col-lg-3 label-control" for="alamat_pemohon">Foto-Foto Ruang Publik</label>
                <div class="col-lg-3">
                <input type="file" name="files[]" onchange="preview_image();" class="form-control-file" accept="image/*" multiple id="foto">
                </div>
                </div>

                <div class="row" id="image_preview">
                </div>

                <button type="submit" class="btn btn-primary btn-md" id="simpanpengajuan" style="float: right;">
                <i class="ft-check-square"></i> Submit
                </button>
              </fieldset>
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
function preview_image(){
var total_file=document.getElementById("foto").files.length;

for(var i=0;i<total_file;i++)
{
$('#image_preview').append("<div class='col-md-3 mb-3 foto_ruangpublik"+i+"'><img src='"+URL.createObjectURL(event.target.files[i])+"' width='100%' class='mr-2 mb-2'><br><button type='button' class='btn btn-danger btn-sm foto"+i+"' onclick='delete_preview(this,"+i+")'><i class='mdi mdi-close'></i></button></div>");
console.log(event.target.files[i]);
}

}

function delete_preview(obj, id){
$(".foto_ruangpublik"+id+"").remove();
$(event.target.files[id]).remove();
console.log(id);
}

</script>
<script type="text/javascript">
$(document).ready(function(){

  $('#kecamatan').change(function(){
    var id=$(this).val();
    $.ajax({
      url : "<?php echo site_url('Pengelola/get_data_kelurahan');?>",
      method : "POST",
      data : {id: id},
      async : true,
      dataType : 'json',
      success: function(data){
        console.log(data);
        var html = '<option value="Piilh Kelurahan">Pilih Kelurahan</option>';
        var i;
        for(i=0; i<data.length; i++){
          html += '<option value='+data[i].kd_kelurahan+'>'+data[i].kelurahan+'</option>';
        }
        $('#kelurahan').html(html);
      }
    });
    return false;
  });

});
</script>
