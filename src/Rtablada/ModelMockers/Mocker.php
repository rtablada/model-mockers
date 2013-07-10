<?php namespace Rtablada\ModelMockers;

use Mockery;

class Mocker
{
	public static function mock($class, array $attributes = array())
	{
		$mock = Mockery::mock($class);

		foreach ($attributes as $attribute => $value) {
			$mock->shouldReceive('getAttribute')
				->with($attribute)
				->andReturn($value);
		}

		return $mock;
	}
}
