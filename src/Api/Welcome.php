<?php

namespace App\Api;

use App;
use Input;

class Welcome extends Base
{
	public function sayHello($request, $response, $args)
	{
		if (Input::get('output', 'json') === 'json') {
			return $response->withJson(['name' => $args['name']]);
		} else {
			return $this->view->render($response, 'hello.html', ['name' => $args['name']]);
		}
	}
}