<?php
namespace Tartan\Larapay\Facades;
use Illuminate\Support\Facades\Facade;

/**
 * Class Larapay
 * @package Tartan\Larapay\Facades
 *
 */
class Larapay extends Facade
{
    /**
     * @return string
     */
	protected static function getFacadeAccessor()
	{
		return 'larapay';
	}
}
