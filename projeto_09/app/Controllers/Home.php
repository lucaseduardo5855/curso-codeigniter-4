<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function metodo_um()
    {
 
        $data = [
            'titulo' => 'Este é o titulo',
            'conteudo' => 'Este é o conteúdo da página um'

        ];

        return view('pagina_um', $data);
    }

    public function metodo_dois()
    {
        $data ['nome'] = 'Lucas';
        $data ['apelido'] = 'Jotinha';
        $data ['idade'] = 23;

        return view('pagina_dois/header', $data)
              .view('pagina_dois/main', $data)
              .view('pagina_dois/footer');
    }

    public function metodo_tres($id)
    {
        $data['id'] = $id;
        $data['nome'] = 'Lucas';

        return view('pagina_tres', $data);
    }

    public function metodo_quatro($id, $nome) 
    {
        $data['id'] = $id;
        $data['nome'] = $nome;

        return view('pagina_quatro', $data);
    }

    public function metodo_cinco($id = 1000)
    {
        $data['id'] = $id;
        
        return view('pagina_cinco', $data);
    }
}
