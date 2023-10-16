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
     <?php echo $this->session->flashdata('message'); ?>
     <!-- DataTales Example -->
     <div class="card shadow mb-4 mt-3">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-danger">Jumlah Siswa: <?= $jumlah_siswa ?> Orang</h6>
         </div>
         <div class="px-5 pb-4 mt-4 row">


             <div class="col-6 mt-4">
                 <h5>Siswa Belum Dikirim Rapot</h5>
                 <table class="table">
                     <thead>

                         <tr>
                             <th scope="col">#</th>
                             <th scope="col">Nama Lengkap</th>
                             <th scope="col">Nis</th>
                             <th scope="col">Email</th>
                             <th scope="col">Jenis Kelamin</th>
                             <th scope="col">Action</th>

                         </tr>
                     </thead>
                     <tbody>
                         <?php $i = 1;
                            foreach ($siswa as $siswa) { ?>
                             <tr>
                                 <th scope="row"><?= $i++ ?></th>
                                 <td><?= $siswa->nama_lengkap ?></td>
                                 <td><?= $siswa->nis ?></td>
                                 <td><?= $siswa->email ?></td>
                                 <td><?= $siswa->jenis_kelamin ?></td>
                                 <td> <a href="<?= site_url('guru/tambah_rapot/' . $siswa->id_siswa) ?>" class="btn btn-success">Tambah Rapot</a></td>

                             </tr>
                         <?php } ?>
                     </tbody>
                 </table>

             </div>
             <div class="col-6 mt-4">
                 <h5>Siswa Sudah Dikirim Rapot</h5>
                 <table class="table">
                     <thead>

                         <tr>
                             <th scope="col">#</th>
                             <th scope="col">Nama Lengkap</th>
                             <th scope="col">Nis</th>
                             <th scope="col">Email</th>
                             <th scope="col">Jenis Kelamin</th>
                             <th scope="col">Action</th>

                         </tr>
                     </thead>
                     <tbody>
                         <?php $i = 1;
                            foreach ($siswa_rapot as $siswa) { ?>
                             <tr>
                                 <th scope="row"><?= $i++ ?></th>
                                 <td><?= $siswa->nama_lengkap ?></td>
                                 <td><?= $siswa->nis ?></td>
                                 <td><?= $siswa->email ?></td>
                                 <td><?= $siswa->jenis_kelamin ?></td>
                                 <td> <a href="<?= site_url('guru/detail_rapot/' . $siswa->id_siswa) ?>" class="btn btn-primary">Lihat Rapot</a></td>

                             </tr>
                         <?php } ?>
                     </tbody>
                 </table>

             </div>






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