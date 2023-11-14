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
            Jadwal Pelajaran <?= $this->session->userdata('nama_guru') ?>
         </div>
         <div class="px-5 pb-4 mt-4 row">

             <?php $i = 1;
                foreach ($jadwal as $jadwal) { ?>
                 <div class="col-3 mt-4">
                     <div class="card">
                         <h5 class="card-header"><?= $jadwal->nama_pelajaran ?></h5>
                         <div class="card-body">
                             <p class="card-text">Hari: <?= $jadwal->hari ?></p>
                             <p class="card-text">Jam: <?= $jadwal->jam_awal ?> - <?= $jadwal->jam_selesai ?></p>
                             <p class="card-text">Kelas: <?= $jadwal->nama_kelas ?></p>
                             <p class="card-text">Ruangan: <?= $jadwal->nama_ruangan ?></p>
                             <p class="card-text">Guru: <?= $jadwal->nama_guru ?></p>
                         </div>
                     </div>
                 </div>

             <?php } ?>

         </div>
     </div>
     <?php if (!$jadwal) { ?>
         <div class="alert alert-danger" role="alert">
             Data Jadwal Belum Ada!
         </div>
     <?php } ?>
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