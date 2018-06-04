<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
			<title>Ótica - Login</title>
			<link rel="icon" href="<?php echo URL; ?>/assets/img/favicon.png">
			<!-- Bootstrap 4.1.0 -->
			<link rel="stylesheet" href="<?php echo URL; ?>/assets/css/bootstrap.min.css">
			<!-- Estilos customizados para esse template -->
			<link rel="stylesheet" href="<?php echo URL; ?>/assets/css/signin.css">
			<!-- Font Awesome 4.5.0 -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		</head>
	</head>
	<body id="body" class="text-center">
		<div class="form-signin"><!--form-->
			<img class="mb-4" src="<?php echo URL; ?>/assets/img/login.png" width="102" height="102">
			<!--<h1 class="h4 mb-3 font-weight-normal">Faça login</h1>-->
			<div class="input-group-sm">
				<input id="login" type="text" class="form-control" placeholder="Login">
				<input id="senha" type="password" class="form-control" placeholder="Senha">
			</div>	
			<button id="entrar" class="btn btn-sm btn-primary btn-block"><i class="fa fa-arrow-circle-up"></i> Entrar</button>
	        <p class="mt-5 mb-3">Desenvolvido por LJ Softwares - Todos os direitos reservados - versão 1.0.0 
	        	&copy;<?php echo date('Y'); ?>
	    	</p>
		</div><!--form-->

		<!--Modal-->
		<div class="modal fade" id="mLogin">
			<div class="modal-dialog modal-sm"><!--centralizar modal-dialog-centered -->
				<div class="modal-content">
					<!--<div class="modal-header">
						<h4 class="moda-title">Titulo</h4>
						<button class="close" data-dismiss="modal">
							<span>&times;</span>
						</button>
					</div>-->
					<div id="msg" class="modal-body"></div>
					<!--<div class="modal-footer">
						
					</div>-->
				</div>
			</div>
		</div>

		<!-- REQUIRED JS SCRIPTS -->
		
		<!-- jQuery 3.3.1 -->
		<script src="<?php echo URL; ?>/assets/js/jquery-3.3.1.min.js"></script>
		<!-- Bootstrap 4.1.0 -->
		<script src="<?php echo URL; ?>/assets/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript">var URL = '<?php echo URL; ?>';</script>
		<!-- Script de Login -->
		<script src="<?php echo URL; ?>/assets/js/login.js"></script>
	</body>
</html>