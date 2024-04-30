<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Ebook',
                'slug' => 'ebook',
                'icon' => 'images/ic_ebook.svg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'Ebook',
                'slug' => 'ebook',
                'icon' => 'images/ic_course.svg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
                'name' => 'Template',
                'slug' => 'template',
                'icon' => 'images/ic_template.svg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
                'name' => 'Source Code',
                'slug' => 'source-code',
                'icon' => 'images/ic_font.svg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
        ]);
    }
}
