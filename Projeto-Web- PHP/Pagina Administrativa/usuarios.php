<?php

session_start();
include_once("protect.php");
  protect();
include_once("conexao/conexao.php");
?>
<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>	
	<title>Usuários</title>
	<body background="img/001.jpg" >
	<div class="container">
	<div class="form-signin" style="background: #eeee">
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 bg-white border-bottom shadow-sm" >
	<img src="img/002.jpg" width="30" height="30" class="d-inline-block left-top">
  	<h5 class="my-1 mr-md-auto ">QUICK APOSTAS</h5>
	</div>
	
	<body>
	<div class="text-center">
		<h1>Usuários</h1>
	</div>
	<?php
$result_usuario = "SELECT * FROM usuarios ORDER BY id ";
$resultado_usuario = mysqli_query($conn, $result_usuario);



if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	?>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Senha</th>
				<th>Usuario</th>
				<th>Cpf</th>
				<th>Celular</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				?>
				<tr>
					<td><?php echo $row_usuario['nome']; ?></td>
					<td><?php echo $row_usuario['email']; ?></td>
					<td><?php echo $row_usuario['senha']; ?></td>
					<td><?php echo $row_usuario['usuario']; ?></td>
					<td><?php echo $row_usuario['cpf']; ?></td>
					<td><?php echo $row_usuario['celular']; ?></td>

				</tr>
				<?php
			}?>
		</tbody>
	</table>
<?php
}else{
	echo "<div class='alert alert-danger' role='alert'>Nenhum usuário encontrado!</div>";
}
		
		?>		
	</body>
</html>