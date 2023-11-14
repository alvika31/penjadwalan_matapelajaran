 <!-- Begin Page Content -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <div class="container-fluid">

     <!-- Page Heading -->


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
             <?php if (!$rapot) { ?>
                 <div class="alert alert-danger">
                     Data Rapot Belum Ada !
                 </div>
                 <h1></h1>
             <?php } else { ?>
                 <p>Nama Siswa: <?= $rapot->nama_lengkap ?></p>
                 <p>Nama Guru: <?= $pelajaran->nama_guru ?></p>
                 <p>Nis: <?= $rapot->nis ?></p>
                 <p>Email: <?= $rapot->email ?></p>
                 <p>Jenis Kelamin: <?= $rapot->jenis_kelamin ?></p>
                 <p>Tanggal Kirim Rapot: <?= $rapot->tanggal ?></p>
                 <p>Keterangan Rapot: <?= $rapot->keterangan ?></p>
                 <p>File Rapot: <a href="<?= base_url() . '/rapot/' . $rapot->file ?>">unduh</a></p>
             <?php } ?>



         </div>

     </div>
 </div>

 </div>