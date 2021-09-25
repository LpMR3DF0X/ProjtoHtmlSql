<!DOCTYPE html>
<html lang="pt-BR">
	<head>		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title>Faculdade</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">Faculdade</a>
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
							Curso
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="?page=cadastrar-curso">Cadastrar</a>
							<a class="dropdown-item" href="?page=listar-curso">Listar</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Aluno
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="?page=cadastrar-aluno">Cadastrar</a>
							<a class="dropdown-item" href="?page=listar-aluno">Listar</a>
						</div>
					</li>					
				</ul>			
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col">
					<?php
						include("config.php");
						
						switch(@$_REQUEST["page"]){
							case "cadastrar-curso":
								include("cadastrar-curso.php");
							break;
							case "listar-curso":
								include("listar-curso.php");
							break;
							case "editar-curso":
								include("editar-curso.php");
							break;
							case "salvar-curso":
								include("salvar-curso.php");
							break;
							case "cadastrar-aluno":
								include("cadastrar-aluno.php");
							break;
							case "listar-aluno":
								include("listar-aluno.php");
							break;
							case "editar-aluno":
								include("editar-aluno.php");
							break;
							case "salvar-aluno":
								include("salvar-aluno.php");
							break;
							default:
								include("dashboard.php");
						}
					?>
				</div>
			</div>
		</div>
		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>







