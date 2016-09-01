<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TaskTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        $faker = Faker\Factory::create();
        //delete users table records
        DB::table('tasks')->delete();
        //insert some dummy records

        $dummy_data_array = array();
        $x = 0;
        while($x<30){
            $dummy_data_array[$x] = array(
                'body'=> $faker->name,
                'created_at'=> $faker->dateTimeThisMonth('now'),
                'updated_at'=> $faker->dateTimeThisMonth('now')
            );
            $x++;
        }

        DB::table('tasks')->insert($dummy_data_array);

	}

}
