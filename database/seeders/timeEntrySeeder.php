<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class timeEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('time_entries')->insert([
            'project_ID'=>'3',
            'task_ID'=>'4',
            'Hours'=>'1',
            'date'=>'2021-08-13',
            'description'=>'Billing calculation'
        ]);
    }
}
