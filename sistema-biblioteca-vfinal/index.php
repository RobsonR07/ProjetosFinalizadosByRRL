<!doctype html>
<html lang="pt-BR">
	
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<title>Biblioteca</title>
	</head>
<style>
body{
	background: url("images/fundo.jpg")no-repeat center top fixed;

	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

</style>
	
	<body>
		
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #156987;">
		<img style="height: 50px; padding-right: 10px;" src="images/logo.gif"/>
		<a class="navbar-brand" href="#">Biblioteca</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
      
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Categoria
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <a class="dropdown-item" href="index.php?page=cad-categoria">Cadastrar</a>
						  <a class="dropdown-item" href="index.php?page=list-categoria">Listar</a>
						 
						</div>
					</li>
					
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Autor
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <a class="dropdown-item" href="index.php?page=cad-autor">Cadastrar</a>
						  <a class="dropdown-item" href="index.php?page=list-autor">Listar</a>
						 
						</div>
					
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Livro
						</a>
						
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <a class="dropdown-item" href="index.php?page=cad-livro">Cadastrar</a>
						  <a class="dropdown-item" href="index.php?page=list-livro">Listar</a>
						 
						</div>
					</li>
				</ul> 
			</div>
		</nav>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
<?php
		include("config.php");
?>
		</div>
	</div>
</div>		
		
		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
