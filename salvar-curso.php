<?php
	$nome = $_REQUEST["nome_curso"];
	
	$sql = "INSERT INTO curso (nome_curso) VALUES ('{$nome}')";
	
	$res = $conn->query($sql) or die($conn->error);
	
	if($res==true){
		print "<br><div class='alert alert-success'>Cadastrou com sucesso!</div>";
	}else{
		print "<br><div class='alert alert-danger'>Não foi possível cadastrar</div>";
	}
?>