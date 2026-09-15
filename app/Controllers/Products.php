<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Produtos',
            'page' => 'Produtos',
        ];

        return view('dashboard/products/index', $data);
    }

    public function new_Product()
    {
        $data = [
            'title' => 'Produtos',
            'page' => 'Novo Produto',
        ];

        return view('dashboard/products/new_product_frm', $data);
    }
}
