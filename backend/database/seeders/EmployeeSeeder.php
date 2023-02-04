<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::truncate();

        Employee::create([
            'first_name' => 'Philip',
            'last_name' => 'Anthropy',
            'position' => 'Web Developer',
        ]);

        Employee::create([
            'first_name' => 'Martha',
            'last_name' => 'Corey',
            'position' => 'Web Developer',
        ]);

        Employee::create([
            'first_name' => 'Thomas',
            'last_name' => 'Danforth',
            'position' => 'Web Developer',
        ]);

        Employee::create([
            'first_name' => 'John',
            'last_name' => 'Hathorne',
            'position' => 'Web Designer',
        ]);

        Employee::create([
            'first_name' => 'James',
            'last_name' => 'Timbersen',
            'position' => 'Web Designer',
        ]);

        Employee::create([
            'first_name' => 'Ben',
            'last_name' => 'Mclem',
            'position' => 'Web Designer',
        ]);
    }
}
