 <!-- Begin Page Content -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <div class="container-fluid">

     <!-- Page Heading -->

     <h1 class="h3 mb-2 text-gray-800">Edit Guru</h1>
     <?php if (validation_errors()) { ?>
         <div class="alert alert-danger" role="alert">
             <?= validation_errors(); ?>
         </div>
     <?php } ?>

     <!-- DataTales Example -->
     <div class="card shadow mb-4 mt-3">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-danger">Form Edit Guru</h6>
         </div>
         <div class="px-5 pb-4 mt-4">

             <form method="post" class="user" action="<?= site_url('admin/updateGuru') ?>">
                 <div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <label>Nama Lengkap:</label>
                         <input type="text" name="nama_guru" value="<?= $guru['nama_guru'] ?>" class="form-control" id="exampleFirstName" required>
                         <input type="hidden" name="id_guru" value="<?= $guru['id_guru'] ?>" class="form-control" id="exampleFirstName" required>
                     </div>
                     <div class="col-sm-6">
                         <label>NIP:</label>
                         <input type="text" name="nip" value="<?= $guru['nip'] ?>" class="form-control" id="exampleLastName" required>
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <label>Email:</label>
                         <input type="text" name="email" value="<?= $guru['email'] ?>" class="form-control" id="exampleInputEmail" required>
                     </div>
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <label>Jenis Kelamin:</label>
                         <select class="form-control" name="jenis_kelamin" required>
                             <option value="">=========Pilih Jenis Kelamin===========</option>
                             <option value="Pria" <?= $guru['jenis_kelamin'] === 'Pria' ? 'selected' : '' ?>>Pria</option>
                             <option value="Wanita" <?= $guru['jenis_kelamin'] === 'Wanita' ? 'selected' : '' ?>>Wanita</option>
                         </select>

                     </div>

                 </div>
                 <div class="form-group row">
                     <div class="col-sm-12 mb-3 mb-sm-0">
                         <label>Jabatan:</label>
                         <select class="form-control" name="jabatan" required>
                             <option value="Wali Kelas" <?= $guru['jabatan'] === 'Wali Kelas' ? 'selected' : '' ?>>Wali Kelas</option>
                             <option value="Pengajar" <?= $guru['jabatan'] === 'Pengajar' ? 'selected' : '' ?>>Pengajar</option>
                         </select>

                     </div>

                 </div>
                 <input type="submit" value="Edit Guru" name="save" class="btn btn-danger btn-user">

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