<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\StockModel;

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

        // get distinct suppliers within stocks table that belongs to this restaurants
        $stocks_model = new StockModel();
        $stocks_suppliers = $stocks_model->get_stock_suppliers(session()->user['id_restaurant']);


        $data = [
            'title' => 'Stock',
            'page' => 'Adicionar Stock',
            'product' => $product,
            'stock_suppliers' => $stocks_suppliers
        ];

        return view('dashboard/stocks/add_frm', $data);
    }

    public function add_submit()
    {
        echo 'add_submit cheghamos';
    }
}
