<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Main extends BaseController
{
    public function index()
    {
        $data['validation_errors'] = session()->getFlashdata('errors');

        return view('home', $data);
    }

    public function submit(){

        $validation = $this->validate([

            'email' => [
                
                'label' =>'Email',
                'rules' => 'required','valid_email',
                'errors' =>  [
                    'required' => 'O campo {field} é obrigatório',
                    'valid_email' => 'O campo {field} deve ser um email válido'
                ]

            ],
            'area' => [
                
                'label' =>'Area',
                'rules' => 'required',
                'errors' =>  [
                    'required' => 'O campo {field} é obrigatório',
                ]

            ],
            'complaint' => [
                
                'label' =>'Reclamação',
                'rules' => 'required', 'max_length[3000]',
                'errors' =>  [
                    'required' => 'O campo {field} é obrigatório',
                    'max_Length' => 'O campo {field} deve ter no maximo {param} caracteres'
                ]

            ],
        ]);

        if(!$validation){
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        dd([
            $this->request->getPost(),
            $this->request->getFiles()
        ]);
    }
}
