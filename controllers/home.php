<?php
class home {
	public function __construct() {
		if (!usuarios::logado()) {
			header('Location: '.URL.'/login');
		}
	}
	public function index() {
		$dados = array();
		view::loadTemplate('home', $dados);
	}
}
?>