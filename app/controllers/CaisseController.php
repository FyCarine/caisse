<?php

namespace app\controllers;

use Flight;
use flight\Engine;
use app\models\CaisseModel;


class CaisseController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}
	

}