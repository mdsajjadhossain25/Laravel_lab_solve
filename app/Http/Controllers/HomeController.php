<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request){
        $search = $request['search'] ?? "";
        if($search !=""){
            $employees = Employee::where('name', 'LIKE', "%$search%")
            ->orwhere('designation', 'LIKE', "%$search%")
            ->orwhere('email', 'LIKE', "%$search%")
            ->latest('created_at')
            ->paginate(10);
        }
        else{
            $employees = Employee::latest('created_at')->paginate(20);
        }
        return view('welcome', compact('employees', 'search'));
    }
}
