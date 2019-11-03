<?php

namespace App\Http\Controllers;

use App\GroupOfEmployees;
use Illuminate\Http\Request;

class EmployeesGroupController extends Controller
{
    public function index()
    {
        $groupOfEmployees = GroupOfEmployees::all();
        return view('group.list', compact('groupOfEmployees'));
    }

}
