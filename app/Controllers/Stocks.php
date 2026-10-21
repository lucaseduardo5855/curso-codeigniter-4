<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\StockModel;
use CodeIgniter\Model;
use Config\Validation;

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

    //---------------------------------------------------------------------
    //add stock
    //---------------------------------------------------------------------

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
            'stock_suppliers' => $stocks_suppliers,
            'validation_errors' => session()->getFlashdata('validation_errors'),
            'server_error' => session()->getFlashdata('server_error')
        ];

        return view('dashboard/stocks/add_frm', $data);
    }

    public function add_submit()
    {
        // form validation
        $validation = $this->validate($this->_stock_add_form_validation());

        if (!$validation) {
            return redirect()->back()->withInput()->with('validation_errors', $this->validator->getErrors());
        }

        // check if id_product is valid
        $id_product = Decrypt($this->request->getPost('id_product'));

        if (empty($id_product)) {
            return redirect()->back()->withInput()->with('server_error', 'Ocorreu um erro tente novamente');
        }

        // get post data
        $text_stock = $this->request->getPost('text_stock');
        $text_supplier = $this->request->getPost('text_supplier');
        $text_reason = $this->request->getPost('text_reason');
        $text_date = $this->request->getPost('text_date');

        // store stock movement
        $stocks_model = new StockModel();
        $stocks_model->insert([
            'id_product' => $id_product,
            'stock_quantity' => intval($text_stock),
            'stock_in_out' => 'IN',
            'stock_supplier' => $text_supplier,
            'reason' => $text_reason,
            'movement_date' => $text_date
        ]);

        //increment product stock
        $products_model = new ProductModel();
        $products_model->where('id', $id_product)
                       ->set('stock', 'stock+' . intval($text_stock), false)
                       ->update();
        return redirect()->to('/stocks');
    }

    //---------------------------------------------------------------------
    //remove stock
    //---------------------------------------------------------------------

    public function add_remove($enc_id)
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
            'page' => 'Remover Stock',
            'product' => $product,
            'validation_errors' => session()->getFlashdata('validation_errors'),
            'server_error' => session()->getFlashdata('server_error')
        ];

        return view('dashboard/stocks/remove_frm', $data);
    }

    public function remove_submit()
    {
        // form validation
        $validation = $this->validate($this->_stock_remove_form_validation());
        if (!$validation) {
            return redirect()->back()->withInput()->with('validation_errors', $this->validator->getErrors());
        }

        // check if id_product is valid
        $id_product = Decrypt($this->request->getPost('id_product'));
        if (empty($id_product)) {
            return redirect()->back()->withInput()->with('server_error', 'Ocorreu um erro, ente novamente.');
        }

        // get post data
        $text_stock = $this->request->getPost('text_stock');
        $text_reason = $this->request->getPost('text_reason');
        $text_date = $this->request->getPost('text_date');

        //check if stock is available
        $products_model = new ProductModel();
        $product = $products_model->where('id', $id_product)->first();
        if ($product->stock < intval($text_stock)) {
            return redirect()->back()->withInput()->with('server_error', 'O estoque atual é inferior a quantidade existente.');
        }

        //store stock movement
        $stocks_model = new StockModel();
        $stocks_model->insert([
            'id_product' => $id_product,
            'stock_quantity' => intval($text_stock),
            'stock_in_out' => 'OUT',
            'stock_supplier' => 'Owner',
            'reason' => $text_reason,
            'movement_date' => $text_date
        ]);

        // decrement product stock
        $products_model->where('id', $id_product)
                       ->set('stock', 'stock-' . intval($text_stock), false)
                       ->update();
        return redirect()->to('/stocks');
    }

    //---------------------------------------------------------------------
    //stock movements
    //---------------------------------------------------------------------

    public function movements($enc_id)
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
           'page' => 'Movimentos Stock',
           'datatables' => true,
           'product' => $product,
           'movements' => $this->_stock_movement($id)
        ];

        return view('dashboard/stocks/movements', $data);
    }

    //---------------------------------------------------------------------
    //private stock movements
    //---------------------------------------------------------------------


    private function _stock_add_form_validation()
    {
        // stock form validation rules
        return [
            'id_product' => [
                'rules' => 'required'
            ],
            'text_stock' => [
                'label' => 'Quantidade',
                'rules' => 'required|numeric|greater_than[0]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.',
                    'numeric' => 'O campo {field} deve conter apenas números.',
                    'greater_than' => 'O campo {field} deve conter um valor maior que {param}.',
                ],
            ],
            'text_supplier' => [
                'label' => 'Fornecedor',
                'rules' => 'required',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.',
                ],
            ],
            // text_reason not required
            'text_date' => [
                'label' => 'Data do movimento',
                'rules' => 'required|valid_date[Y-m-d H:i]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.',
                    'valid_date' => 'O campo {field} deve conter data válida (Y-m-d H:i).',
                ],
            ],
        ];
    }

    private function _stock_remove_form_validation()
    {
        // stock form validation rules
        return [
            'id_product' => [
                'rules' => 'required'
            ],
            'text_stock' => [
                'label' => 'Quantidade',
                'rules' => 'required|numeric|greater_than[0]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.',
                    'numeric' => 'O campo {field} deve conter apenas números.',
                    'greater_than' => 'O campo {field} deve conter um valor maior que {param}.',
                ],
            ],
            // text_reason not required
            'text_date' => [
                'label' => 'Data do movimento',
                'rules' => 'required|valid_date[Y-m-d H:i]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.',
                    'valid_date' => 'O campo {field} deve conter data válida (Y-m-d H:i).',
                ],
            ],
        ];
    }

    private function _stock_movement($id_product, $filters = [])
    {
        // load stock movement for the product limit to 10000 records
        $stocks_model = new StockModel();
        $movements = $stocks_model->where('id_product', $id_product)
                                  ->orderBy('movement_date', 'DESC')
                                  ->findAll(10000);
        //filters
        return $movements;

    }
}
