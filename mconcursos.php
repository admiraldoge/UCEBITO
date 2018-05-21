<?php
include_once "headeradmi.php";
?>
<body>
	<!--<h1>Usuarios</h1>-->
	<table class="data-table table-striped table-bordered">
		<caption class="title">Concursos</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>NOMBRE</th>
				<th>CREADOR</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$sql = 'SELECT * 
		FROM competencia';
		$query = mysqli_query($conn, $sql);

		if (!$query) {
			die ('SQL Error: ' . mysqli_error($conn));
		}
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['cc'].'</td>
					<td>'.$row['nombre'].'</td>
					<td>'.$row['creador'].'</td>
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