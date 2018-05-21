<?php
	include_once "headeradmi.php";
?>
<div class="row mt-3">
			<div class="col">
				<form action="">
					<div class="form-group row justify-content-center">
						<div class="col-4">
							<label for="nombre">Nombre del Concurso</label>
							<input type="text" class="form-control" placeholder="Nombre del Concurso" name="nombre" id="nombre">
						</div>
					</div>

					<div class="row justify-content-between">
						<div class="col-1">
							<h3>Estudiantes</h3> 
						</div>
						<div class="col-auto">

							<form action="">
							<input type="text" class="col-8" placeholder="Buscar" arial-label="Buscar">
								<input type="submit" name="submit" value="Buscar" class="btn btn-primary col-auto" tabindex="7">
							</form>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-auto">
							<div class="row">
							<table class="table table-sm table-hover table-bordered table-striped">
							<thead>
							<tr>
								<th class="col-auto">Nombre</th>
								<th class="col-auto">Usuario</th>
								<th class="col-auto">Añadir</th>
							</tr>
							</thead>
					<tr>
						<td>Carlos</td>
						<td>21</td>
						<td><button class="btn btn-sm btn-primary col" type="submit">Añadir</button></td>
					</tr>
					<tr>
						<td>Alejandro</td>
						<td>34</td>
						<td><button class="btn btn-sm btn-primary col" type="submit">Añadir</button></td>
					</tr>
					<tr>
						<td>Cesar</td>
						<td>37</td>
						<td><button class="btn btn-sm btn-primary col" type="submit">Añadir</button></td>
					</tr>
					</table>
					</div>
					</div>
					</div>
					<div class="form-group row">
						<div class="col-12 text-center">
							<div class="row justify-content-center">
								<div class="col-12 col-sm-9 col-md-4">
									<button class="btn btn-primary btn-block" type="submit" href="admin">CREAR</button>
								</div>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>