<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
   public function create(){
       return view ('employee.create');
   }
   
   public function store(Request $r){
    
       $obj = new Employee();
       $obj->name =  $r->name;
       $obj->email = $r->email;
       $obj->birth_date = $r->birth_date;
       $obj->salary = $r->salary;
       $obj->gender = $r->gender;
       $obj->address = $r->address;
     
       $obj->save(); //ORM = Object relational Mapping; Eloquent orm
   }
}
