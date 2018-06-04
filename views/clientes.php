<div class="card">
	<div class="card-header">
	    <i class="fa fa-users"></i><b> Cadastro de Clientes</b>
	</div>
	<div class="card-body">
		<a href="<?php echo URL; ?>/clientes/save" class="btn btn-primary btn-sm mb-4">
			<i class="fa fa-plus"></i> Novo Cliente
		</a>
		<div class="table-responsive">
			<table class="table table-bordered" id="tabela_clientes">
				<thead class="thead-light">
					<tr>
						<th>Nome</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td></td>
					</tr>
				</tbody>	
			</table>
		</div>
	</div>	
</div>

<script src="<?php echo URL; ?>/assets/js/tabelas.js"></script>