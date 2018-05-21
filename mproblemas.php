
<?php
include_once "header.php";
?>
	<div class="container">
	<!--<h1>Usuarios</h1>-->
	<table class="data-table">
		<caption class="title">PROBLEMAS</caption>
		<thead>
			<tr>
				<th>PROBLEMAS</th>
				<th>TIPO</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$sql = 'SELECT * 
		FROM problema';
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
</div>
<?php
	include_once "footer.php";
?>