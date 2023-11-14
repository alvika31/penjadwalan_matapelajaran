<link href="<?= base_url('templates/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-danger">List Jadwal Mata Pelajaran
            <a href="<?= site_url('admin/add_jadwal_pelajaran') ?>" class="btn btn-danger" style="float:right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Jadwal Mata Pelajaran</a>
            </h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color:#ff471a; color:white">
                        <tr>
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th>Jam Masuk</th>
                            <th>Jam Selesai</th>
                            <th>Hari</th>
                            <th>Kelas</th>
                            <th>Ruangan</th>
                            <th>Guru</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($jadwal as $jadwal) { ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $jadwal->nama_pelajaran ?></td>
                                <td><?= $jadwal->jam_awal ?></td>
                                <td><?= $jadwal->jam_selesai ?></td>
                                <td><?= $jadwal->hari ?></td>
                                <td><?= $jadwal->nama_kelas ?></td>
                                <td><?= $jadwal->nama_ruangan ?></td>
                                <td><?= $jadwal->nama_guru ?></td>
                                <td>
                                    <a href="<?= site_url('admin/edit_jadwal_pelajaran/' . $jadwal->id_mapel) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <button onclick="hapus(<?php echo $jadwal->id_mapel; ?>)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
    function hapus(id_mapel) {
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
                    url: "<?= site_url('admin/delete_jadwal_pelajaran') ?>", //url function delete in controller
                    data: {
                        id_mapel: id_mapel //id get from button delete
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