 <!-- Begin Page Content -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <div class="container-fluid">

     <!-- Page Heading -->

     <h1 class="h3 mb-2 text-gray-800"><?= $guru['nama_kelas'] ?>. Wali Kelas: <?= $guru['nama_guru'] ?></h1>
     <?php if (validation_errors()) { ?>
         <div class="alert alert-danger" role="alert">
             <?= validation_errors(); ?>
         </div>
     <?php } ?>

     <!-- DataTales Example -->
     <div class="card shadow mb-4 mt-3">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-danger">Tambah Rapot Siswa</h6>
         </div>
         <div class="px-5 pb-4 mt-4">
             <form method="post" action="<?= site_url('guru/add_rapot') ?>" enctype="multipart/form-data">
                 <div class="form-group">
                     <label for="exampleFormControlSelect1">Kelas:</label>
                     <input type="hidden" name="id_kelas" value="<?= $kelas['id_kelas'] ?>">
                     <input type="email" class="form-control" value="<?= $kelas['nama_kelas'] ?>" id="exampleFormControlInput1" placeholder="name@example.com" disabled>
                 </div>
                 <div class="form-group">
                     <label for="exampleFormControlSelect1">Siswa:</label>
                     <select class="form-control" name="id_siswa" id="exampleFormControlSelect1">
                         <?php foreach ($siswa as $siswa) { ?>
                             <option value="<?= $siswa->id_siswa ?>"><?= $siswa->nama_lengkap ?></option>
                         <?php } ?>
                     </select>
                 </div>
                 <div class="form-group">
                     <label for="exampleFormControlFile1">Upload Rapot:</label>
                     <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                 </div>
                 <div class="form-group">
                     <label for="exampleFormControlTextarea1">Keterangan:</label>
                     <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3"></textarea>
                 </div>
                 <input type="submit" value="Tambah Rapot" class="btn btn-success" />
             </form>
         </div>

     </div>
 </div>

 </div>