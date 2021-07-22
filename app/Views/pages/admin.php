<?= $this->extend('/layout/adminTemplate'); ?>

<?= $this->section('content'); ?>

<h1><?=$title; ?></h1>
<a href="/admin/create" class="btn btn-success">Tambah Produk</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Jenis Barang</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1 ?>
  <?php foreach($products as $product): ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $product['namabrg']; ?></td>
      <td><?=$product['jenisbrg'];?></td>
      <td><?=$product['hargabrg'];?></td>
      <td>
        <a href="/admin/edit/<?= $product['id'] ?>" class="btn btn-warning">Edit</a>
        <form action="/admin/delete" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" id="id" value="<?= $product['id']; ?>">
                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus?');">Delete</button>
        </form>
      </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>




<?= $this->endSection(); ?>