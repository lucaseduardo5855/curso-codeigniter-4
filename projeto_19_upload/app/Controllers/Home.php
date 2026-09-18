<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['erro'] = session()->getFlashdata('erro');

        return view ('upload_frm', $data);
    }

    public function upload_submit() 
    {
        $file = $this->request->getFile('file_upload');

        if ($file === null || ! $file->isValid()) {
            return redirect()->back()->withInput()->with('erro', 'ficheiro não carregado');
        }

        // form validation
        $validation = $this->validate([
            'file_upload' => [
                'label' => 'ficheiro',
                'rules' => [
                    'uploaded[file_upload]',
                    'mime_in[file_upload,image/jpg,image/jpeg]',
                    'max_size[file_upload,1024]'
                ],
                'errors' => [
                    'uploaded' => 'O campo {field} não foi carregado',
                    'mime_in' => 'O {field} não é uma imagem válida',
                    'max_size' => 'O {field} é muito grande'
                ],
            ]
        ]);

        if (! $validation) {
            return redirect()->back()->withInput()->with('erro', $this->validator->getError('file_upload'));
        }

        echo 'ficheiro carregado com sucesso';
    }
}
