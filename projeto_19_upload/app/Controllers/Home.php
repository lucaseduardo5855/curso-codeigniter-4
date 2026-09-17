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
        // if ($this->request->getFile('file_upload')->isValid()) {
        //     echo 'ok';
        // } else {
        //     echo 'nok';
        // }

        //atribuição de dados de um ficheiro a uma variavel
       $ficheiro = $this->request->getFile('file_upload');
        // if ($ficheiro->isValid()) {
        //     echo 'ok';
        // } else {
        //     echo 'nok';
        // }

        // buscar dados de um ficheiro
        echo '<br>';
        echo $ficheiro->getClientName();
        //ou
        echo '<br>';
        echo $ficheiro->getName();

        echo '<br>';
        echo $ficheiro->getTempName();

        echo '<br>';
        echo $ficheiro->getExtension();

        echo '<br>';
        echo $ficheiro->getMimeType();

        echo '<br>';
        echo $ficheiro->getSize();

        echo '<br>';
        echo $ficheiro->getSizeByUnit('kb') . 'kb';

        echo '<br>';
        echo $ficheiro->getSizeByUnit('mb') . 'mb';
    }
}
