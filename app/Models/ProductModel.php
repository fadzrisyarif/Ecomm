<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $allowedFields = [
        'namabrg', 
        'jenisbrg',
        'hargabrg',
        'gambar'
    ];

    protected $table = 'products';
    protected $useTimeStamps = true;

    public function get_product($id = false){
        return $this->where(['id' => $id])->first();
    }
}