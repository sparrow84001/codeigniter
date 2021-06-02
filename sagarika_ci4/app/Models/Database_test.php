<?php
namespace App\Models;
use CodeIgniter\Model;

class Database_test extends Model{

    protected $table='student';
    protected $allowedFields=['name','email','password'];
}