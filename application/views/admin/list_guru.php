<link href="<?= base_url('templates/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">List Guru</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <a href="<?= site_url('admin/add_guru') ?>" type="button" class="btn btn-primary mb-4">Tambah Guru</a>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>NIP</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>

                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>NIP</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1;
                        foreach ($guru as $users) { ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $users->nama_guru ?></td>
                                <td><?= $users->nip ?></td>
                                <td><?= $users->email ?></td>
                                <td><?= $users->jenis_kelamin ?></td>
                                <td><?= $users->jabatan ?></td>
                                <td>
                                    <a href="<?= site_url('admin/edit_guru/' . $users->id_guru) ?>" class="btn btn-success">Edit</a>
                                    <button onclick="hapus(<?php echo $users->id_guru; ?>)" class="btn btn-danger">Delete</button>
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
    function hapus(id_guru) {
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
                    text: 'Data Guru berhasil dihapus.',
                    icon: 'success',
                    showConfirmButton: false
                });
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('admin/delete_guru') ?>", //url function delete in controller
                    data: {
                        id_guru: id_guru //id get from button delete
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