<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>  </title>
	<link rel="stylesheet" href="">
	<style>
		div#form-login {
			width: 90%;
			height: 400px;
			margin: 0 auto;
			/*background-color: #efefef;*/
			text-align: center;
			vertical-align: center;
			padding-top: 10%;
		}

		#form-login img {
			width: 200px;
			height: 195px;
			border :1px solid black;
			border-radius: 50%;
			

		}
		#form-login label {
			display: block;

		}
		#form-login input{
			height: 38px;
		}
	</style>
</head>
<body>
	<div id="form-login">
		<img src="_imgs/índice.jpeg" alt="">
		<form action="">
			<label for=""> Login: </label>		
			<input type="text" id="login" name="login" autofocus>
			<br>
			<label for=""> Senha: </label>
			<input type="text" id="senha" name="login" />
			<br>
			<input type="submit" value="Entrar">

		</form>
	</div>
</body>
</html>