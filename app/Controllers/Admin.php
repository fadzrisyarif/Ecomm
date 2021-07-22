<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Admin extends BaseController
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }
	public function index()
	{
        $products = $this->productModel->findAll();
		$data = [
            'title' => 'Admin Page',
            'products' => $products
        ];
		return view('pages/admin', $data);
	}
    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data',

        ];
        return view('pages/create', $data);
    }
    public function save()
    {
        $filegambar = $this->request->getFile('gambar');

        $filegambar->move('img');

        $namagambar = $filegambar->getName();

        $this->productModel->save([
            'namabrg' => $this->request->getVar('namabrg'),
            'jenisbrg' => $this->request->getVar('jenisbrg'),
            'hargabrg' => $this->request->getVar('hargabrg'),
            'gambar' => $namagambar
        ]);
        return redirect()->to('/admin');
    }
    public function delete()
    {
        $this->productModel->delete([
            'id' => $this->request->getVar('id')
        ]);
        return redirect()->to('/admin');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data Produk',
            'product' => $this->productModel->get_product($id)
        ];

        return view('pages/edit', $data);
    }
    public function update($id){
        $filegambar = $this->request->getFile('gambar');

        $filegambar->move('img');

        $namagambar = $filegambar->getName();
        $this->productModel->save([
            'id' => $id,
            'namabrg' => $this->request->getVar('namabrg'),
            'jenisbrg' => $this->request->getVar('jenisbrg'),
            'hargabrg' => $this->request->getVar('hargabrg'),
            'gambar' => $namagambar
        ]);
        return redirect()->to('/admin');
    }
}
