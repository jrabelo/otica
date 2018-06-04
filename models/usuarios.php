<?php
class usuarios {
	public static function logado() {
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			return true;
		} else {
			return false;
		}
	}
	public static function valida_login($dados) {
		$pdo = Conexao::getInstance();
		$sql = "SELECT u.id
				FROM usuarios u
				INNER JOIN empresas emp ON u.id_empresa = emp.id
				WHERE login = '$dados->login'
				AND u.senha = '$dados->senha' 
				AND u.status = 1
				AND emp.status = 1";
		$query = $pdo->query($sql);
		if ($query->rowCount() > 0) {
			$row = $query->fetch(PDO::FETCH_OBJ);
			$_SESSION['id'] = $row->id;
			return 'ok';
		}
		return 0;
	}
	public function logout() {
		unset($_SESSION['id']);
		session_destroy();
		header('Location: '.URL.'/login');
	}
}