<?php

use App\GroupOfEmployees;
use Illuminate\Database\Seeder;

class Group_of_employeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group_of_employee = new GroupOfEmployees();
        $group_of_employee->id = 1;
        $group_of_employee->name = 'Quản lí nhân sự';
        $group_of_employee->save();

        $group_of_employee = new GroupOfEmployees();
        $group_of_employee->id = 2;
        $group_of_employee->name = 'Quản lí nhân viên';
        $group_of_employee->save();

        $group_of_employee = new GroupOfEmployees();
        $group_of_employee->id = 3;
        $group_of_employee->name = 'Lễ tân';
        $group_of_employee->save();

        $group_of_employee = new GroupOfEmployees();
        $group_of_employee->id = 4;
        $group_of_employee->name = 'Hòa thượng';
        $group_of_employee->save();

    }
}
