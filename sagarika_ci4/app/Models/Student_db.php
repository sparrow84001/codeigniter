<?php
namespace App\Models;
use CodeIgniter\Model;

class Student_db extends Model{

    protected $table='student_db';
    protected $allowedFields=['name','roll_no','dob','gender','subject'];
}