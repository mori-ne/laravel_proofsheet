<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSeeder extends Seeder
{
    public function run(): void
    {
        $forms = [
            [
                'project_id' => '1',
                'form_name' => '演題登録',
                'description' => 'フォームの説明が入ります',
            ],
            [
                'project_id' => '1',
                'form_name' => '演題登録 2演題目',
                'description' => 'フォームの説明が入ります',
            ],
            [
                'project_id' => '1',
                'form_name' => '演題登録 3演題目',
                'description' => 'フォームの説明が入ります',
            ],
            [
                'project_id' => '2',
                'form_name' => '演題登録',
                'description' => 'フォームの説明が入ります',
            ]
        ];
        DB::table('forms')->insert($forms);
    }
}
