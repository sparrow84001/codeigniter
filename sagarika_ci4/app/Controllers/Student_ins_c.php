<?php

namespace App\Controllers;
use App\Models\Student_db;
use CachingIterator\Controller;

class Student_ins_c extends BaseController
{
	public function index(){

        return view('Student_ins.php');
    }

    public function insert(){

        $data =['name'=>$this->request->getVar('name'),
                'roll_no'=>$this->request->getVar('roll_number'),
                'dob'=>$this->request->getVar('dob'),
                'gender'=>$this->request->getVar('gender'),
                'subject'=>$this->request->getVar('subjects')
                ];          
        $model= new Student_db();
        $model->insert($data);
        echo '<script>alert("data insert")</script>';
        return view('Student_ins.php');
    }
    public function Update_c(){
        return view('Student_update.php');
    }
    public function search($search_rollno){    

        $model= new Student_db();
        $sdata= $model->where('search_rollno',$search_rollno)->first();
        echo "$sdata";
        //return view('Student_update.php',$data);
    }
    public function update(){

        $model1 =new Student_db();
        $roll_no= $this->request->getVar('');
        $data1=['name'=>$this->request->getVar('name'),
                'roll_no'=>$this->request->getVar('roll_number'),
                'dob'=>$this->request->getVar('dob'),
                'gender'=>$this->request->getVar('gender'),
                'subject'=>$this->request->getVar('subjects')
        ];
        $model1->update($roll_no,$data1);          

    }
}