<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['validation_errors'] = session()->getFlashdata('validation_errors');

        return view('upload_frm', $data);
    }

    public function upload_submit()
    {
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
            return redirect()->back()->withInput()->with('validation_errors', $this->validator->getErrors());
        }

        // file upload
        $file = $this->request->getFile('file_upload');

        //mover para a pasta padrão
        // $file->move(WRITEPATH . 'uploads');

        //mover para pasta padrão com novo nome
        // $file->move(WRITEPATH . 'uploads', 'novo_nome.jpg');

        //mover para pasta padrão com nome aleatorio
        // $file_name = $file->getRandomName();
        // $file->move(WRITEPATH . 'uploads', $file->getRandomName());

        //mover para pasta especifica
        // $file->move(WRITEPATH . 'uploads/ficheiros');

        //mover para pasta public
        $file->move(ROOTPATH . 'public/assets/images', 'avatar.jpg');
    }


}
