<?php

namespace app\controllers;

use Flight;
use flight\Engine;
use app\models\CaisseModel;


class ApiExampleController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}
	

}