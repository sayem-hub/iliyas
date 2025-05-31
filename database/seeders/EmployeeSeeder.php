<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'name' => 'John Doe',
                'email' => 'john@gmailcom',
                'phone' => '1234567890',
                'salary' => 50000,
                'address' => '123 Main St, City, Country',
                'designation_id' => 2,
                'department_id' => 1,
                'inserted_by' => 1, // Assuming the admin user has ID 1
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@gmailcom',
                'phone' => '0987654321',
                'salary' => 60000,
                'address' => '456 Elm St, City, Country',
                'designation_id' => 1,
                'department_id' => 2,
                'inserted_by' => 1, // Assuming the admin user has ID 1
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@gmailcom',
                'phone' => '1122334455',
                'salary' => 55000,
                'address' => '789 Oak St, City, Country',
                'designation_id' => 2,
                'department_id' => 1,
                'inserted_by' => 1, // Assuming the admin user has ID 1
            ],
        ];
        foreach ($employees as $employee) {
            Employee::updateOrCreate($employee);
        }
    }
}
