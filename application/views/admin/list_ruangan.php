<link href="<?= base_url('templates/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-danger">List Ruangan
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" style="float:right"><i class="fa fa-plus-circle" aria-hidden="true"></i> 
                Tambah Ruangan
            </button>
            </h3>
        </div>
        <div class="card-body">
            <div class="table-responsive" >
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color:#ff471a; color:white">
                        <tr>
                            <th>No</th>
                            <th>Kode Ruangan</th>
                            <th>Nama Ruangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($ruangan as $ruangan) { ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $ruangan->kode_ruangan ?></td>
                                <td><?= $ruangan->nama_ruangan ?></td>
                                <td>
                                    <a href="<?= site_url('admin/edit_ruangan/' . $ruangan->id_ruangan) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <button onclick="hapus(<?php echo $ruangan->id_ruangan; ?>)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Ruangan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= site_url('admin/add_ruangan') ?>" method="post">
                        <label>Kode Ruangan:</label>
                        <input type="text" name="kode_ruangan" class="form-control" id="exampleLastName" required>
                        <label>Nama Ruangan:</label>
                        <input type="text" name="nama_ruangan" class="form-control" id="exampleLastName" required>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" name="save" class="btn btn-primary" value="Tambah Ruangan" />
                </div>
                </form>
            </div>
        </div>
    </div>

</div>
<script>
    function hapus(id_ruangan) {
        Swal.fire({
            title: 'Yakin menghapus Data Ruangan?',
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
                    text: 'Data Ruangan berhasil dihapus.',
                    icon: 'success',
                    showConfirmButton: false
                });
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('admin/delete_ruangan') ?>", //url function delete in controller
                    data: {
                        id_ruangan: id_ruangan //id get from button delete
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
            text: 'Data Berhasil Ditambahkan'
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