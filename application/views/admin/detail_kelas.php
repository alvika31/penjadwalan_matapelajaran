 <!-- Begin Page Content -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <div class="container-fluid">

     <!-- Page Heading -->

     <h1 class="h3 mb-2 text-gray-800"><?= $kelas['nama_kelas'] ?>. Wali Kelas: <?= $kelas['nama_guru'] ?></h1>
     <?php if (validation_errors()) { ?>
         <div class="alert alert-danger" role="alert">
             <?= validation_errors(); ?>
         </div>
     <?php } ?>

     <!-- DataTales Example -->
     <div class="card shadow mb-4 mt-3">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-danger">Jumlah Siswa: <?= $jumlah_kelas ?> Orang</h6>
         </div>
         <div class="px-5 pb-4 mt-4 row">

             <?php $i = 1;
                foreach ($detail_kelas as $siswa) { ?>
                 <div class="col-3 mt-4">
                     <div class="card">
                         <h5 class="card-header"><?= $siswa->nama_lengkap ?></h5>
                         <div class="card-body">
                             <h5 class="card-title">Nis: <?= $siswa->nis ?></h5>
                             <p class="card-text">Email: <?= $siswa->email ?></p>
                             <p class="card-text">Jenis Kelamin: <?= $siswa->jenis_kelamin ?></p>
                         </div>
                     </div>
                 </div>

             <?php } ?>




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
             window.location = "<?= site_url('admin/list_guru') ?>";
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