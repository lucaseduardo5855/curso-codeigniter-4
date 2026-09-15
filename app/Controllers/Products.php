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
        echo 'new produt';
    }
}
