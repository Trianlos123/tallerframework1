<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class ReportesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();
        for ($i=1; $i < 10; $i++) {
            \DB::table('user')->insert(array(
                'DNI'=> $faker->randomDigitNotNull,
                'nombre'=>$faker->name,
                'apellido'=>$faker->lastName,
                'password'=>$faker->text,
                'id'  => $i,
                'created_at'=> date('Y-m-d H:m:s'),
                'updated_at'=> date('Y-m-d H:m:s')
            ));
        }
    }
}
