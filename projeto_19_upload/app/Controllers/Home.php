<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view ('upload_frm');
    }

    public function upload_submit() 
    {
        echo '<pre>';

        // buscar todos os dados dos ficheiros carregados
        // print_r($this->request->getFiles(''));
        // print_r($this->request->getFile('file_upload'));
        
        //verificar se o envio foi feito com sucesso
        if ($this->request->getFile('file_upload')->isValid()) {
            echo 'ok';
        } else {
            echo 'nok';
        }
    }
}
