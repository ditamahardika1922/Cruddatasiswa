<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){

        $data = Employee::all();
        
            return view('datasiswa',compact('data'));
    }

    public function tambahsiswa(){
        return view('tambahsiswa');
    }


    public function insertdata(Request $request){   
        // dd($request->all());       
        Employee::create($request->all());

    }
}
