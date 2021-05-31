<?php

namespace App\Controllers;
use App\Models\Database_test;
use CachingIterator\Controller;

class Student_detail extends BaseController
{
	public function index(){

        $model = new Database_test();
        print_r($model->findAll());
    }
}