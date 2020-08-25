<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$data = [
			[
				'user_id' => 1,
				'name' => 'Dinh Hoa',
			],
			[
				'user_id' => 2,
				'name' => 'Shyvana',
			],
			[
				'user_id' => 1,
				'name' => 'Yone',
			],
			[
				'user_id' => 2,
				'name' => 'Lee Sin',
			],
			[
				'user_id' => 1,
				'name' => 'Yasuo',
			],
		];
		DB::table('tasks')->insert($data);
	}
}
