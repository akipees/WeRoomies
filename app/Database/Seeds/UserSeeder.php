<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
	public function run()
	{
		$user_object = new UserModel();

		$user_object->insertBatch([
			[
				"email" => "wallabhdaseepika@gmail.com",
				"role" => "admin",
				"password" => password_hash("12345678", PASSWORD_DEFAULT)
			],
			[
				"name" => "Prabhat Pandey",
				"email" => "prabhat@mail.com",
				"phone_no" => "8888888888",
				"role" => "editor",
				"password" => password_hash("12345678", PASSWORD_DEFAULT)
			]
		]);
	}
}