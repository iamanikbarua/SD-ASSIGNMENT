<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use DB;

class EmployeeController extends Controller
{     
    public function all(){
        $employee = Employees::all();
        return view ('Employee',compact('employees'));
    }
    public function create(){
        return view('employee.create');

       
    } 
    public function store(Request $r){
      $obj = new Employees(); 

        $obj->name = $r->name;          
        $obj->email = $r->email;
        $obj->birth_date = $r->birth_date;
        $obj->salary = $r->salary;
        $obj->gender= $r->gender;
        $obj->address = $r->address;
        
        $obj->save();
        
        return redirect('/')

    
    }
}
    
//     public function home(){
//         $employee=DB::table('employee')->get();
//         return view('employee.all',compact('employee'));
//     }
//     public function employee(){
//         return view('employee.all');
//     }
//     public function edit($id){
//        $employee = DB :: table('employee')
//        ->where('id', '=',$id)
//        ->first(); //as it will always return a single row
//         return view('employee.edit', compact('employee'));
//     }




//      public function store(Request $req){
//         $name = $req->name;
//         $email= $req->email;
//         $salary= $req->salary;
//         $birth_date= $req->birth_date;
//         $department= $req->department;
//         $active= $req->active;
//         $gender= $req->gender;
// //query builder syntax
//         DB::table('employee')->insert([
//             'name' => $name,
//             'email' => $email,
//             'salary' => $salary,
//             'birth_date' => $birth_date,
//             'department' => $department,
//             'active' => $active,
//             'gender' => $gender
//         ]);

//         return redirect()->back()->with('msg','Created Sucessfully');
        
//      }
//      public function update(Request $req, $id){

//         $name = $req->name;
//         $email= $req->email;
//         $salary= $req->salary;
//         $birth_date= $req->birth_date;
//         $department= $req->department;
//         $active= $req->active;
//         $gender= $req->gender;

//         $affected = DB::table('employee')
//               ->where('id', $id)
//               ->update([
//                  'name'=> $name,
//                  'email'=> $email,
//                  'salary'=> $salary,
//                  'birth_date'=> $birth_date,
//                  'department'=> $department,
//                  'active'=> $active,
//                  'gender'=>$gender,

//             ]
//         );
//         return redirect()->back()->with('msg','Updated Sucessfully');
//      }
// public function delete($id){

//     DB::table('employee')->where('id','=',$id)->delete();

//     return redirect()->back()->with('msg','Deleted Sucessfully');
// }

//     }