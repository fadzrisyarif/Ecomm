<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Products extends BaseController
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }
    
    public function index(){
        $products = $this->productModel->findAll();
        $data = [
            'title' => 'Daftar Produk',
            //'products' => $this->productModel->get_product()
            'products' => $products
        ];

        //konek db tanpa model
        // $db = \Config\Database::connect();
        // $products = $db->query("SELECT * FROM products");
        // foreach ($products->getResultArray() as $row){
        //     d($row);
        // }

        // $productModel = new \App\Models\ProductModel();
        // $productModel = new ProductModel();
        // dd($products);

        return view('products/index', $data);
    }

    public function detail($id){
        $product = $this->productModel->get_product($id);
        $data = [
            'title' => 'Detail Produk',
            'product' => $product
        ];
         return view('products/detail', $data);
    }
}