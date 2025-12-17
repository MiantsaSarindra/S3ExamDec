<?php

namespace app\controllers;

use flight\Engine;

class LivraisonController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

	public function getBilan() {
		$users = [
			[ 'id' => 1, 'name' => 'Bob Jones', 'email' => 'bob@example.com' ],
			[ 'id' => 2, 'name' => 'Bob Smith', 'email' => 'bsmith@example.com' ],
			[ 'id' => 3, 'name' => 'Suzy Johnson', 'email' => 'suzy@example.com' ],
		];

		// You actually could overwrite the json() method if you just wanted to
		// to ->json($users); and it would auto set pretty print for you.
		// https://flightphp.com/learn#overriding
		$this->app->json($users, 200, true, 'utf-8', JSON_PRETTY_PRINT);
	}
}