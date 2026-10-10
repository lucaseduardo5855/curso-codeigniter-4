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
}
