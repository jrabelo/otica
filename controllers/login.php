<?php
class login {
	public function index() {
		$dados = array();
		view::loadView('login', $dados);
	}
	public function valida_login() {
		$login = isset($_POST['login'])?$_POST['login']:'';
		$senha = isset($_POST['senha'])?$_POST['senha']:'';
		$dados = array(
			'login' => $login,
			'senha' => md5($senha)
		);
		echo usuarios::valida_login(helper::obj($dados));
	}
	public function logout() {
		unset($_SESSION['id']);
		session_destroy();
		header('Location: '.URL.'/login');
	}
}