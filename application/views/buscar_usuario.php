<?php
?>
<html lang="pt-BR">
<head>
<div class="container">
	<nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background-color: #ECEEEF;">
			<ul class="navbar-nav mr-auto mt-2 mt-md-0">
<div class="row">
	<div class="col-sm-7">
	<?php if (isset($results)) {
		if($results=='Nenhuma publicação cadastrada!')
		<div class="alert alert-danger" role="alert">
	<div class="col-sm-5">
		<div class="card">
			<div class="card-block">
			<h4 class="card-title"><center>Olá, <?php echo $_SESSION['usuario_nome'];?></center></h4><br />
		<div class="card">
			<div class="card-block">
			<form action="http://localhost/olharcidadao/buscar/usuario" method="post">
</div>
<?php include "footer.php"?>