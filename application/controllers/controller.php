<?php

class Controller {

	protected $_controller;
	protected $_action;
	protected $_template;
	protected $_locat=0;

	function __construct( $controller, $action) {

		$this->_controller = $controller;
		$this->_action = $action;

		if ($controller != null && $action != null)
			$this->_template = new Template($controller,$action);
		else
			$this->_locat = 1;

	}

	function set($name,$value) {
		$this->_template->set($name,$value);
	}

	function __destruct() {
		if($this->_locat==0)
			$this->_template->render();
	}

}
