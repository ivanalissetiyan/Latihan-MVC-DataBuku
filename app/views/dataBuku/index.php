<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();  ?>
        </div>

    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Data Buku
            </button>
        </div>
    </div>  

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/dataBuku/cari" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Judul Buku" name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Search</button>
                    </div>
                </div>

            </form>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Data Buku</h3>
            <ul class="list-group">
                <?php foreach ($data['dataBuku'] as $dataBuku) : ?>
                    <li class="list-group-item list-group-item-primary">
                        <?= $dataBuku['no']; ?>
                        .
                        <?= $dataBuku['judul']; ?>
                        <a class="badge badge-danger badge-pill float-right ml-2" onclick="return confirm('Yakin, Ingin Dihapus?');" href="<?= BASEURL; ?>/dataBuku/hapus/<?= $dataBuku['no']; ?>">Hapus</a>
                        <a href="<?= BASEURL; ?>/dataBuku/ubah/<?= $dataBuku['no']; ?>" class="badge badge-warning badge-pill float-right ml-2 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-no="<?= $dataBuku['no']; ?>">Edit</a>
                        <a class="badge badge-success badge-pill float-right ml-2" href="<?= BASEURL; ?>/dataBuku/detail/<?= $dataBuku['no']; ?>">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>

    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/dataBuku/tambah" method="post">
                    <input type="hidden" name="no" id="no">
                    <div class="form-group">
                        <label for="no_buku">No Buku</label>
                        <input type="number" class="form-control" id="no_buku" name="no_buku">
                    </div>

                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>

                    <div class="form-group">
                        <label for="pengarang">Pengarang</label>
                        <input type="text" class="form-control" id="pengarang" name="pengarang">
                    </div>

                    <div class="form-group">
                        <label for="tahun_terbit">Tahun Terbit</label>
                        <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit">
                    </div>

                    <div class="form-group">
                        <label for="jenis_buku">Jenis Buku</label>
                        <input type="text" class="form-control" id="jenis_buku" name="jenis_buku">
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option>--Silahkan Pilih--</option>
                            <option value="Ready">Ready</option>
                            <option value="No Ready ">No Ready</option>

                        </select>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>