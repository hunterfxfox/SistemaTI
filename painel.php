<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<?php include('_php/scripts.php'); ?>
	<link rel="stylesheet" href="_css/reset.css">
	<link rel="stylesheet" href="_css/style.css">
	<script language="_js/javascript.js"></script>
</head>
<body>
	<nav>
		<label for="equiv" > &equiv; Menu </label>
		<input type="checkbox" id="equiv" >
		<div id="menu">
			<details>
				<summary> Clientes </summary>
				<a href="CLIENTES/" target="palco">Cadastrar Clientes</a>
				<a href="CLIENTES/	" target="palco">Visularizar Clientes</a>

			</details>
			<details>
				<summary>
					Ordem de serviços
				</summary>
				<a href="OS/CadastrarOS.php" target="palco"> Cadastrar O.S </a>
				<a href="OS/" target="palco"> Visualizar O.S</a>
			</details>
		</div>



	</nav>

	<div class="tudo">
		<iframe width="100%" height="100%" src="principal.php" frameborder="0" name="palco" id="palco"></iframe>
	</div>
	
</body>
</html>
