
<?php
include_once "header.php";
?>
<body>
	<!--<h1>Usuarios</h1>-->
	<table class="data-table table-striped table-bordered">
		<caption class="title">ENVIOS</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>Usuario</th>
				<th>Problema</th>
				<th>Estado</th>
				<th>Hora</th>
				<th>Fecha</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$sql = '
		SELECT e.ce,u.nombre,p.nombre,e.estado,e.hora,e.envio
		FROM envio e,usuario u
		where envio.	
		';
		$query = mysqli_query($conn, $sql);

		if (!$query) {
			die ('SQL Error: ' . mysqli_error($conn));
		}
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['ce'].'</td>
					<td>'.$row[''].'</td>
					<td>'.$row['nombre'].'</td>
					<td>'.$row['tipo'].'</td>
					<td>'.$row['nombre'].'</td>
					<td>'.$row['tipo'].'</td>
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