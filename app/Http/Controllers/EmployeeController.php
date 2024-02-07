<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function addEmployee(){
        return view('employees.create');
    }
    public function saveEmployee(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'joining_date' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'email' => 'required|email|max:255',
            'mobile_no' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);
        $employee = Employee::create($validatedData);
        return redirect()->route('added_successfully', $employee->id)->with('success', 'Employee added successfully');
    }
    public function addedSuccess($id){
        return view('employees.added_successfully')->with('id', $id);
    }
    public function deleteEmployee($id){
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('home');
    }
    public function editEmployee($id){
        $employee = Employee::find($id);
        return view('employees.edit_employee',compact('employee'));
    }
    public function updatEmployee($id, Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'joining_date' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'email' => 'required|email|max:255',
            'mobile_no' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);
        $employee = Employee::find($id);
        $employee->update($validatedData);
        return redirect()->route('updated_successfully', $employee->id)->with('success', 'Updated Successfully');
    }
    public function updateSuccess($id){
        return view('employees.added_successfully')->with(['id', $id]);
    }

    public function view($id){
        $employee = Employee::find($id);
        return view('employees.view', compact('employee'));
    }
}
