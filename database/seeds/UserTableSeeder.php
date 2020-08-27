<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$data = [
			[
				'name' => 'Dinh Hoa',
				'email' => 'dinhhoa1994@gmail.com',
				'password' => bcrypt('123456'),
			],
			[
				'name' => 'admin',
				'email' => 'admin@gmail.com',
				'password' => bcrypt('admin@gmail.com'),
			],
		];
		DB::table('users')->insert($data);
	}
}
