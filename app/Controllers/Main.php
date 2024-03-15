<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Main extends BaseController
{
    public function index()
    {
        $data['validation_errors'] = session()->getFlashdata('errors');

        if(!empty($errors)){
            dd($errors);
        }

        return view('home');
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
