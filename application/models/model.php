<?php


class Model extends SQLQuery {
	protected $_model;

	function __construct() {

		$this->_model = get_class($this);
		$this->_table = strtolower($this->_model)."s";
	}

	function __destruct() {
	}
}
