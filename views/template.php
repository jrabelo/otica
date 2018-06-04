<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
		<title>Empresa Ótica</title>
		<link rel="icon" type="image/ico" href="<?php echo URL; ?>/assets/img/favicon.png">
		<!-- jQuery 3.3.1 -->
		<script src="<?php echo URL; ?>/assets/js/jquery-3.3.1.min.js"></script>
		<!-- Bootstrap 4.1.0 -->
		<link rel="stylesheet" href="<?php echo URL; ?>/assets/css/bootstrap.min.css">
		<!-- Template -->
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/assets/css/template.css">
		<!-- Font Awesome 4.5.0 -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- datatable Bootstrap 4 -->
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/assets/css/datatables.min.css">
	</head>
	<body>
		<nav class="navbar navbar-fixed-top navbar-expand-sm navbar-dark" style="background-color: #088A85;">
			<div class="container">
				<a class="navbar-brand h1 mb-0" href="#">Ótica</a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
					<span class="navbar-toggler-icon"></span>
				</button>
			    <div class="navbar-collapse collapse" id="navbarMenu">
			    	<ul class="navbar-nav mr-auto">
			    		<li class="navbar-item">
			    			<a href="<?php echo URL; ?>" class="nav-link">Dashboard</a>
			    		</li>
			    		<li class="navbar-item dropdown">
			    			<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
			    				Cadastro
			    			</a>
			    			<div class="dropdown-menu">
			    				<a class="dropdown-item" href="<?php echo URL; ?>/clientes">Clientes</a>
			    				<div class="dropdown-divider"></div>
			    				<a class="dropdown-item" href="<?php echo URL; ?>/fornecedores">Fornecedores</a>
			    				<div class="dropdown-divider"></div>
			    				<a class="dropdown-item" href="<?php echo URL; ?>/produtos">Produtos</a>
			    			</div>
			    		</li>
			    	</ul>
			    	<ul class="navbar-nav ml-auto">
			    		<li class="navbar-item">
			    			<a href="<?php echo URL; ?>/login/logout" class="nav-link"><i class="fa fa-sign-out fa-lg"></i> Sair</a>
			    		</li>
		    		</ul>
			    </div>
			    <!--<span class="navbar-text">Texto qualquer</span>-->
			</div>
		</nav>
		<br>
		<div class="container">
		    <?php view::loadViewInTemplate($viewName, $viewData); ?>
		</div>
		
		<!-- REQUIRED JS SCRIPTS -->
		
		<!-- Bootstrap 4.1.0 -->
		<script src="<?php echo URL; ?>/assets/js/bootstrap.bundle.min.js"></script>
		<!-- JQuery Mask -->
		<script src="<?php echo URL; ?>/assets/js/jquery.mask.js"></script>
		<!-- Mascara -->
		<script src="<?php echo URL; ?>/assets/js/mask.js"></script>
		<!-- datatable Bootstrap 4 -->
		<script type="text/javascript" src="<?php echo URL; ?>/assets/js/datatables.min.js"></script>
	</body>
</html>