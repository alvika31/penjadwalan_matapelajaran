 <!-- Begin Page Content -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <div class="container-fluid">

     <!-- Page Heading -->

     <h1 class="h3 mb-2 text-gray-800">My Profile</h1>
     <?php if (validation_errors()) { ?>
         <div class="alert alert-danger" role="alert">
             <?= validation_errors(); ?>
         </div>
     <?php } ?>

     <!-- DataTales Example -->
     <div class="card shadow mb-4 mt-3">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-danger">Edit Profile</h6>
         </div>
         <div class="px-5 pb-4 mt-4">

             <form method="post" class="user" action="<?= site_url('admin/updateMyProfile') ?>">
                 <div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <label>Nama Lengkap:</label>
                         <input type="hidden" name="id" value=" <?= $this->session->userdata('id'); ?>" class="form-control" id="exampleFirstName">
                         <input type="text" name="nama_admin" value="<?= $profile['nama_admin'] ?>" class="form-control" id="exampleFirstName">

                     </div>
                     <div class="col-sm-6">
                         <label>Username:</label>
                         <input type="text" name="username" class="form-control" value="<?= $profile['username'] ?>" id="exampleLastName">
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="col-sm-12 mb-3 mb-sm-0">
                         <label>Email:</label>
                         <input type="text" name="email" class="form-control" value="<?= $profile['email'] ?>" id="exampleInputEmail">
                     </div>
                 </div>

                 <input type="submit" value="Change Profile" name="save" class="btn btn-danger btn-user">

                 <hr>

             </form>
         </div>

     </div>

     <div class="card shadow mb-4 mt-3">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-danger">Change Password</h6>
         </div>
         <div class="px-5 pb-4 mt-4">

             <form method="post" class="user" action="<?= site_url('admin/updateMyPassword') ?>">
                 <div class="form-group row">
                     <div class="col-sm-12 mb-3 mb-sm-0">
                         <label>New Password:</label>
                         <input type="hidden" name="id" value=" <?= $this->session->userdata('id'); ?>" class="form-control" id="exampleFirstName">
                         <input type="text" name="password" class="form-control" id="exampleInputEmail">
                     </div>
                 </div>

                 <input type="submit" value="Change Password" name="save" class="btn btn-danger btn-user">

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
             window.location = "<?= site_url('admin/my_profile') ?>";
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