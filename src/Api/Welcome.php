<?php

namespace App\Api;

use Config;
use Log;
use DB;

class Welcome
{
	public function sayHello($request, $response, $args)
	{
		return $response->withJson(['name' => $args['name']]);
	}
}