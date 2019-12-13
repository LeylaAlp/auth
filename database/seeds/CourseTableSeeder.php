<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'course_title' => 'php',
                'course_content' => 'php kursu',
                'course_must' => 1
            ],
            [
                'course_title' => 'js',
                'course_content' => 'js kursu',
                'course_must' => 2
            ],
            [
                'course_title' => 'oop',
                'course_content' => 'oop kursu',
                'course_must' => 3
            ],
            [
                'course_title' => 'laravel',
                'course_content' => 'laravel kursu',
                'course_must' => 4
            ],
        ]);
    }
}
