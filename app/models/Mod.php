<?php

class Mod extends Eloquent {
	public $timestamps = true;

	public function versions()
	{
		return $this->hasMany('Modversion');
	}

	const SIDE_SERVER = 1;
	const SIDE_CLIENT = 2;
	const SIDE_BOTH = 0;
	const SIDE_INVALID = -1;

	public function getSideName()
	{
		return self::getSideNameOf($this->side);
	}
	
	public static function getSideByName($sideName)
	{
		switch(strtolower($sideName)) {
			case 'client':
				return self::SIDE_CLIENT;
			case 'server':
				return self::SIDE_SERVER;
			case 'both':
				return self::SIDE_BOTH;
		}
		return self::SIDE_INVALID;
	}
	
	public static function getSideNameOf($side)
	{
		switch($side) {
			case self::SIDE_SERVER:
				return 'server';
			case self::SIDE_CLIENT:
				return 'client';
			case self::SIDE_BOTH:
				return 'both';
		}
		return 'invalid';
	}
}

?>