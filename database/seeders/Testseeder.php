<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Testseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tests')->insert([
            [
                'text'=>'aaa',
                'created_at'=> now(),
            ],
            [
                'text'=> 'bbdb',
                'created_at'=> now(),
            ]
        ]);
    }
}
