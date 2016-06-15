<?php
/**
 * Created by PhpStorm.
 * User: sarcasme
 * Date: 2016/6/13
 * Time: 22:40
 */

namespace Db;


class DataBase
{
	//单例模式
	private static $instance;

	private function __construct()
	{
		$instance  = self::getInstance();
	}

	private function __clone()
	{
		trigger_error('clone is not allowed', E_USER_ERROR);
	}

	public function getInstance()
	{
		if (!(self::$instance instanceof self))
		{
			self::$instance = new self();
		}
		return self::$instance;
	}
}