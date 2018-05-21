
<?php
include_once "header.php";
?>
<body>
	<!--<h1>Usuarios</h1>-->
	<table class="data-table table-striped table-bordered">
		<caption class="title">Usuarios</caption>
		<thead>
			<tr>
				<th>NOMBRES</th>
				<th>APELLIDOS</th>
				<th>NICK</th>
				<th>EMAIL</th>
				<th>CLAVE</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$sql = 'SELECT * 
		FROM usuario';
		$query = mysqli_query($conn, $sql);

		if (!$query) {
			die ('SQL Error: ' . mysqli_error($conn));
		}
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['nombre'].'</td>
					<td>'.$row['apellido'].'</td>
					<td>'.$row['nick'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['clave'].'</td>
				</tr>';
		}?>
		</tbody>
		<tfoot>
			<!--<tr>
				<th colspan="2">TOTAL</th>
			</tr>-->
		</tfoot>
	</table>
</body>
</html>