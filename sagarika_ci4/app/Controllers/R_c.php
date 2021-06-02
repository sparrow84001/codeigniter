<?php

namespace App\Controllers;
use App\Models\Database_test;
use CachingIterator\Controller;

class R_c extends BaseController
{
	public function index(){

        return view('Register.php');
    }

    public function insert(){

       /*$data =['name'=>$this->request->getVar('name'),
                'email'=>$this->request->getVar('email'),
                'password'=>$this->request->getVar('password')];
        
        $model= new Database_test();
        $model->insert($data); */
        echo "done";
    }
}