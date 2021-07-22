<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php
    function rupiah($angka){
	
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
     
    }
?>

<div class="container">
    <div class="row">
        <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img class="prd" src="/img/<?= $product['gambar'] ?>" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $product['namabrg'] ?></h5>
                    <p class="card-text"><small class=""><?= rupiah($product['hargabrg']) ?></small></p>
                    <form action="/products/order" method="post" >
                    <div class="row">
                    <div class="col-sm-6">
                    <div class="input-group">
                        <div></div>
                        <div><input type="number" min="1" value="1" class="form-control" aria-label="Amount (to the nearest dollar)"></div>
                        <div><button type="button" class="btn btn-success">Beli Sekarang</button></div>
                    </div>
                    </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<script>
export default {
    data (){
        return {
            qty: null
        }
    }
}
</script>

<?= $this->endSection();?>