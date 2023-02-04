<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Employee;

class EmployeeController extends Controller
{
    public function list() {
        $role = Auth::user()->role;
        if ($role == "Manager") {
            $employees = Employee::all();
        } else {
            $employees = Employee::where('position', $role)->get();
        }

        return view('list', compact('employees'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $role = Auth::user()->role;

        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
        ]);

        $employee = [
            'first_name' => $request->first_name,
            'last_name' => $request->first_name,
            'position' => $role == "Manager" ? $request->position : $role,
        ];

        Employee::create($employee);
        return redirect('/employee-list')->with('success', 'Employee has been created');
    }

    public function edit($id) {
        $employee = Employee::findOrFail($id);
        return view('edit', compact('employee'));
    }

    public function update(Request $request, $id) {
        $employee = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
        ]);

        Employee::whereId($id)->update($employee);
        return redirect('/employee-list')->with('success', 'Employee has been updated');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect('/employee-list')->with('success', 'Employee has been deleted');
    }
}
