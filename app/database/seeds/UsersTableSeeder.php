<?php

class UsersTableSeeder extends Seeder {
	public function run() {
		$user = new User;
		$user->firstname = "Monirul";
		$user->lastname = "Islam";
		$user->email = "sajibnstu@gmail.com";
		$user->password = Hash::make('mypassword');
		$user->telephone = '01918638307';
		$user->admin = 1;
		$user->save();
	}
}