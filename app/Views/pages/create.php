<?=  $this->extend('layout/adminTemplate');?>

<?= $this->section('content'); ?>

<h1><?= $title; ?></h1>

<div class="container">
    <div class="row">
        
    <form action="/admin/save" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
  <div class="mb-3">
    <label for="namabrg" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="namabrg" name="namabrg" required autofocus >
  </div>
  <div class="mb-3">
    <label for="hargabrg" class="form-label">Harga Barang</label>
    <input type="text" class="form-control" id="hargabrg" name="hargabrg" required>
  </div>
  <div class="mb-3">
    <label for="jenisbrg" class="form-label">Jenis Barang</label>
    <input type="text" class="form-control" id="jenisbrg" name="jenisbrg" required>
  <div class="mb-3">
    <label for="gambar" class="form-label">Gambar</label>
    <div class="mb-3">
      <label for="gambar" class="form-label">Ambil Gambar</label>
      <input class="form-control" type="file" id="gambar" name="gambar"required>
    </div>
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
</div>


<?= $this->endSection(); ?>