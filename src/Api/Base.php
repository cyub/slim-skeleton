<?php

namespace App\Api;

use Pimple\Container;

class Base 
{
	protected $container;

	public function __construct(Container $container)
	{
		$this->container = $container;
	}

	/**
	 * di
	 */
	public function __get($componet)
	{
		if ($this->container->has($componet)) {
			return $this->container->get($componet);
		}
	}
	
}