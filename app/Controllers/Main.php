<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Main extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function submit(){

        dd([
            $this->request->getPost(),
            $this->request->getFiles()
        ]);
    }
}
