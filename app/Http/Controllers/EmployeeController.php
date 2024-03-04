<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employee = Employee::get();

        return view('employee.index', ['employee' => $employee]);
    }

    public function create(){
        return view('employee.create');
    }

    public function store(Request $request){
        //validate data
        $request->validate([
            'employee_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'salary' => 'required', 
        ]);

        $employee = new Employee;
       
        $employee->employee_id = $request->employee_id;
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->salary = $request->salary;

        $employee->save();
        return back()->withSuccess('Employee Created !!!');
    }

    public function edit($id){
        $employee = Employee::where('id', $id)->first();
        
        return view('employee.edit', ['employee' => $employee]);
    }

    public function update(Request $request, $id){
         //validate data
         $request->validate([
            'employee_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'salary' => 'required', 
        ]);

        $employee = Employee::where('id', $id)->first();
        
        $employee->employee_id = $request->employee_id;
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->salary = $request->salary;

        $employee->save();
        return back()->withSuccess('Employee Updated !!!');
    }

    public function delete($id){
        $employee = Employee::where('id', $id)->first();
        $employee->delete();
        return back()->withSuccess('Employee Deleted !!!');
    }
}
