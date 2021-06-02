<?php

namespace App\Controllers;
use App\Models\Database_test;
use CachingIterator\Controller;

class Climate extends BaseController
{
	public function index(){

        return view('Weather.php');
    }

    public function insert(){

        $model = new Database_test();
        echo "object created successfully";
    }
}