 <!-- Begin Page Content -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <div class="container-fluid">

     <!-- Page Heading -->

     <h1 class="h3 mb-2 text-gray-800">Edit Ruangan</h1>
     <?php if (validation_errors()) { ?>
         <div class="alert alert-danger" role="alert">
             <?= validation_errors(); ?>
         </div>
     <?php } ?>

     <!-- DataTales Example -->
     <div class="card shadow mb-4 mt-3">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-danger">Form Edit Ruangan</h6>
         </div>
         <div class="px-5 pb-4">
             <form method="post" class="user" action="<?= site_url('admin/update_ruangan') ?>">
                 <div class="form-group row">
                     <div class="col-sm-12 mb-3 mb-sm-0 mt-4">
                         <label>Kode Ruangan:</label>
                         <input type="text" name="kode_ruangan" class="form-control" id="exampleFirstName" value="<?= $ruangan['kode_ruangan'] ?>" required>
                         <input type="hidden" name="id_ruangan" class="form-control" id="exampleFirstName" value="<?= $ruangan['id_ruangan'] ?>" required>
                     </div>

                 </div>
                 <div class="form-group row">
                     <div class="col-sm-12 mb-3 mb-sm-0 mt-2">
                         <label>Nama Ruangan:</label>
                         <input type="text" name="nama_ruangan" class="form-control" id="exampleFirstName" value="<?= $ruangan['nama_ruangan'] ?>" required>

                     </div>

                 </div>

                 <input type="submit" value="Edit Ruangan" name="save" class="btn btn-danger btn-user">

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