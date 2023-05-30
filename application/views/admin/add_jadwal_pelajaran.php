 <!-- Begin Page Content -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <div class="container-fluid">

     <!-- Page Heading -->

     <h1 class="h3 mb-2 text-gray-800"> Tambah Jadwal Pelajaran</h1>
     <?php if (validation_errors()) { ?>
         <div class="alert alert-danger" role="alert">
             <?= validation_errors(); ?>
         </div>
     <?php } ?>

     <!-- DataTales Example -->
     <div class="card shadow mb-4 mt-3">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-danger">Tambah Jadwal Pelajaran</h6>
         </div>
         <div class="px-5 pb-4 mt-4">

             <form method="post" class="user" action="<?= site_url('admin/do_add_jadwal_pelajaran') ?>">
                 <div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <label>Mata Pelajaran:</label>
                         <input type="text" name="nama_pelajaran" class="form-control" id="exampleFirstName" required>
                     </div>
                     <div class="col-sm-6 row">
                         <div class="col-6">
                             <label>Jam Awal:</label>
                             <input type="time" name="jam_awal" class="form-control" id="exampleLastName" required>
                         </div>
                         <div class="col-6">
                             <label>Jam Akhir:</label>
                             <input type="time" name="jam_selesai" class="form-control" id="exampleLastName" required>
                         </div>
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <label>Hari:</label>
                         <select name="hari" id="hari" class="form-control">
                             <option value="senin">Senin</option>
                             <option value="selasa">Selasa</option>
                             <option value="rabu">Rabu</option>
                             <option value="kamis">Kamis</option>
                             <option value="jumat">Jumat</option>
                         </select>
                     </div>
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <label>Kelas:</label>
                         <select class="form-control" name="id_kelas" required>
                             <?php foreach ($kelas as $kelas) { ?>
                                 <option value="<?= $kelas->id_kelas ?>"><?= $kelas->nama_kelas ?></option>
                             <?php } ?>
                         </select>

                     </div>

                 </div>
                 <div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <label>Ruangan:</label>
                         <select class="form-control" name="id_ruangan" required>
                             <?php foreach ($ruangan as $ruangan) { ?>
                                 <option value="<?= $ruangan->id_ruangan ?>"><?= $ruangan->nama_ruangan ?></option>
                             <?php } ?>
                         </select>
                     </div>
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <label>Pengajar:</label>
                         <select class="form-control" name="id_guru" required>
                             <?php foreach ($guru as $guru) { ?>
                                 <option value="<?= $guru->id_guru ?>"><?= $guru->nama_guru ?></option>
                             <?php } ?>
                         </select>

                     </div>

                 </div>

                 <input type="submit" value="Simpan Jadwal" name="save" class="btn btn-danger btn-user">

                 <hr>

             </form>
         </div>

     </div>
 </div>

 </div>
 <script>
     <?php if ($this->session->flashdata('success')) { ?>
         var isi = <?php json_encode($this->session->flashdata('success')) ?>
         Swal.fire({
             icon: 'success',
             title: 'Success...',
             text: 'Data Berhasil ditambahkan'
         }).then(function() {
             window.location = "<?= site_url('admin/list_siswa') ?>";
         });
     <?php } ?>

     <?php if ($this->session->flashdata('error')) { ?>
         var isi = <?php json_encode($this->session->flashdata('error')) ?>
         Swal.fire({
             icon: 'error',
             title: 'Oops...',
             text: 'Data Eror ditambahkan'
         })
     <?php } ?>
 </script>
 <!-- /.container-fluid -->