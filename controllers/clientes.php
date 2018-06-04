<?php
class clientes {
	public function index() {
		$dados = array();
		view::loadTemplate('clientes', $dados);
	}
	public function save() {
		$dados = array();
		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			
		} else {
			view::loadTemplate('clientes_add', $dados);
		}
	}
}