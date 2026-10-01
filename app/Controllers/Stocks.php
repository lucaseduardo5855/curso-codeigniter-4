<?php

namespace App\Controllers;

class Stocks extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Stocks',
            'page' => 'Stocks'
        ];

        return view('dashboard/stocks/index', $data);
    }
}
