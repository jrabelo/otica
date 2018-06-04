<?php
class view {
	public static function loadView($viewName, $viewData = array()) {
		extract($viewData); // Transforma a chave do array em variavel.
		$file = 'views/'.$viewName.'.php';
		if (file_exists($file)) {
			include 'views/'.$viewName.'.php';
		} else {
			echo "<b>ERRO:</b> View $viewName não existe.";
		}
	}
	public static function loadTemplate($viewName, $viewData = array()) {
		include 'views/template.php';
	}
	public static function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData); // Transforma a chave do array em variavel.
		$file = 'views/'.$viewName.'.php';
		if (file_exists($file)) {
			include 'views/'.$viewName.'.php';
		} else {
			echo "<b>ERRO:</b> View $viewName não existe.";
		}
	}
	public static function loadLibs($lib) {
		if (file_exists('libs/'.$lib.'.php')) {
			include 'libs/'.$lib.'.php';
		}
	}
	public static function post() {
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			return true;
		} else {
			return false;
		}
	}
}