<link href="<?= base_url('templates/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-danger">List Siswa
            <a href="<?= site_url('admin/add_siswa') ?>" class="btn btn-danger" style="float:right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Siswa</a>
            </h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color:#ff471a; color:white">
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>NIS</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Kelas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($siswa as $users) { ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $users->nama_lengkap ?></td>
                                <td><?= $users->nis ?></td>
                                <td><?= $users->email ?></td>
                                <td><?= $users->jenis_kelamin ?></td>
                                <td><?= $users->nama_kelas ?></td>

                                <td>
                                    <a href="<?= site_url('admin/edit_siswa/' . $users->id_siswa) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <button onclick="hapus(<?php echo $users->id_siswa; ?>)" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<script>
    function hapus(id) {
        Swal.fire({
            title: 'Yakin menghapus Data Siswa?',
            text: "Data yang sudah dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus sekarang!'
        }).then((result) => {
            if (result.value) {
                Swal.fire({
                    title: 'Terhapus!',
                    text: 'Data Siswa berhasil dihapus.',
                    icon: 'success',
                    showConfirmButton: false
                });
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('admin/delete_siswa') ?>", //url function delete in controller
                    data: {
                        id: id //id get from button delete
                    },
                    success: function(data) { //when success will reload page after 3 second
                        window.setTimeout(function() {
                            location.reload();
                        }, 300);
                    }
                });
            }
        })
    }
    <?php if ($this->session->flashdata('success')) { ?>
        var isi = <?php json_encode($this->session->flashdata('success')) ?>
        Swal.fire({
            icon: 'success',
            title: 'Success...',
            text: 'Data Berhasil diedit'
        })
    <?php } ?>

    <?php if ($this->session->flashdata('error')) { ?>
        var isi = <?php json_encode($this->session->flashdata('error')) ?>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Data Eror diedit'
        })
    <?php } ?>
</script>
<!-- /.container-fluid -->