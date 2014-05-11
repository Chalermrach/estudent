<?php

class Users extends \Phalcon\Mvc\Model
{
	public function getItem() {
		$items = array(
				"name 1",
				"name 2",
				"name 3"	
		);
		return $items;
	}
}