<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

    <div class="container">
    <h1>Daftar Produk</h1>
                 
            <div class="row">
            <?php foreach ($products as $product) : ?>
                        <div class="col-sm-4 prd">
                        <a href="/products/<?= $product['id'] ?>">
                            <div class="card d-flex align-items-center" style="width: 18rem;">
                            <img class="sampul" src="/img/<?= $product['gambar']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title prd-ttl"><?= $product['namabrg'] ?></h5>
                            </div>
                            </div>
                        </a>
                        </div>
            
                        

            <?php endforeach; ?>
            </div>
    </div>
<?= $this->endSection(); ?>