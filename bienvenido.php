<?php 
	require("cabecera.php"); 
	if(!isset($_SESSION['usuario'])){
		header("Location:index.php");
	}
?>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-4 col-md-4">
				<div class="alert alert-info">
					<p>Bienvenido al sitio seguro <?php echo $_SESSION['usuario'];?></p>
				</div>				
			</div>
		</div>
	</div>
<?php
	require("pie.php");
?>

