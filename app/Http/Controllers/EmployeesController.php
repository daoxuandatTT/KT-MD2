<?php

namespace App\Http\Controllers;

use App\Employees;
use App\GroupOfEmployees;
use App\Http\Requests\EmployeesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmployeesController extends Controller
{
    public function index()
    {
        $groupOfEmployees = GroupOfEmployees::all();
        $employees = Employees::paginate(3);
        return view('employees.list', compact('groupOfEmployees', 'employees'));
    }

    public function create()
    {
        $groupOfEmployees = GroupOfEmployees::all();
        return view('employees.create', compact('groupOfEmployees'));
    }

    public function store(EmployeesRequest $request)
    {
        $employee = new Employees();
        $employee->group_of_employees_id = $request->input('groupOfEmployee');
        $employee->name = $request->input('name');
        $employee->gender = $request->input('gender');
        $employee->phone = $request->input('phone');
        $employee->id_code = $request->input('id_code');
        $employee->save();
        Session::flash('success', 'Thêm thành công');
        return redirect()->route('employees.index');
    }

    public function edit($id)
    {
        $employee = Employees::findOrFail($id);
        $groupOfEmployees = GroupOfEmployees::all();
        return view('employees.edit', compact('employee', 'groupOfEmployees'));
    }

    public function update(EmployeesRequest $request, $id)
    {
        $employee = Employees::findOrFail($id);
        $employee->group_of_employees_id = $request->input('groupOfEmployee');
        $employee->name = $request->input('name');
        $employee->gender = $request->input('gender');
        $employee->phone = $request->input('phone');
        $employee->id_code = $request->input('id_code');
        $employee->save();
        Session::flash('success', 'Chỉnh sửa thành công');
        return redirect()->route('employees.index');
    }

    public function delete($id)
    {
        $employee = Employees::findOrFail($id);
        $employee->delete();
        return redirect()->route('employees.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('employees.index');
        }
        $employees = Employees::where('name', 'LIKE', '%' . $keyword . '%')->paginate(1);
        $groupOfEmployees = GroupOfEmployees::all();
        return view('employees.list', compact('employees', 'groupOfEmployees'));
    }
}
