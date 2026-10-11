<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Stocks extends BaseController
{
    public function index()
    {
        // load all products
        $products_model = new ProductModel();
        $products = $products_model
            ->where('id_restaurant', session()->user['id_restaurant'])
            ->findAll();

        $data = [
            'title' => 'Stocks',
            'page' => 'Stocks',
            'products' => $products
        ];

        return view('dashboard/stocks/index', $data);
    }

    public function add($enc_id)
    {
        $id = Decrypt($enc_id);
        if (empty($id)) {
            return redirect()->to('/stocks');
        }

        //load product
        $products_model = new ProductModel();
        $product = $products_model->where('id', $id)->first();

        $data = [
            'title' => 'Stock',
            'page' => 'Adicionar Stock',
            'product' => $product
        ];

        return view('dashboard/stocks/add_frm', $data);
    }

    public function add_submit()
    {
        echo 'add_submit cheghamos';
    }
}
