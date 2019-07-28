<?php

use Illuminate\Database\Seeder;
use App\Models\EducationType;

class EducationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EducationType::truncate();
        EducationType::insert([

            [
                'id'                    => '1',
                'education_type_name'   =>'BSC Engineering',
            ],

            [
                'id'                    => '2',
                'education_type_name'   =>'MSC',
            ],

            [
                'id'                    => '3',
                'education_type_name'   =>'MBA',
            ]
        ]);
    }
}
