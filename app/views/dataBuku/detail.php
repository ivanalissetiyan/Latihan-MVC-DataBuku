<div class="container">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    
    <p class="card-text"><?= $data['dataBuku']['no_buku']; ?></p>
    <h3 class="card-subtitle mb-2 text-muted"><?= $data['dataBuku']['judul']; ?></h3>
    <p class="card-text"><?= $data['dataBuku']['pengarang']; ?></p>
    <p class="card-text"><?= $data['dataBuku']['tahun_terbit']; ?></p>
    <p class="card-text"><?= $data['dataBuku']['jenis_buku']; ?></p>
    <p class="card-text"><?= $data['dataBuku']['status']; ?></p>

    <a href="<?= BASEURL; ?>/dataBuku" class="card-link">Kembali</a>

  </div>
</div>


</div>