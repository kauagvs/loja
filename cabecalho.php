<?php  
	error_reporting(E_ALL ^ E_NOTICE);
	require_once('alerta_base.php');
?>

<html>

	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Minha loja</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	  <link href="css/loja.css" rel="stylesheet">
	</head>



	<body>

		<div class="navbar navbar-inverse navbar-fixed-top">
	        <div class="container">
	            <div class="navbar-header">
	                <a href="index.php" class="navbar-brand">Minha Loja</a>
	            </div>
	            <div>
	                <ul class="nav navbar-nav">
	                    <li><a href="produto-formulario.php">Adiciona Produto</a></li>
	                    <li><a href="produto-lista.php">Lista de Produtos</a></li>
                     	<li><a href="contato.php">Contato</a></li>
	                </ul>
	            </div>
	        </div> 
	    </div>

	    <div class="container">

	    <div class="principal">

<?php  
	mostrar_alerta("success");
	mostrar_alerta("danger");
?>