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
             <h6 class="m-0 font-weight-bold text-danger">Data Rapot Siswa</h6>
         </div>
         <div class="px-5 pb-4 mt-4">
             <p>Nama Siswa: <?= $rapot->nama_lengkap ?></p>
             <p>Nis: <?= $rapot->nis ?></p>
             <p>Email: <?= $rapot->email ?></p>
             <p>Jenis Kelamin: <?= $rapot->jenis_kelamin ?></p>
             <p>Tanggal Kirim Rapot: <?= $rapot->tanggal ?></p>
             <p>Keterangan Rapot: <?= $rapot->keterangan ?></p>
             <p>File Rapot: <a href="<?= base_url() . '/rapot/' . $rapot->file ?>">unduh</a></p>

         </div>

     </div>
 </div>

 </div>