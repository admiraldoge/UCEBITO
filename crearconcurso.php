<?php
	include_once "headeradmi.php";
?>
<div class="row mt-3">
			<div class="col">
				<form action="">
					<div class="form-group row justify-content-center">
						<div class="col-6">
							<label for="nombre">Nombre del Concurso</label>
							<input type="text" class="form-control" placeholder="Nombre del Concurso" name="nombre" id="nombre">
						</div>
					</div>

					<div class="row justify-content-between">
						<div class="col-1">
							<h3>Problemas</h3> 
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
								<th class="col-auto">Problemas</th>
								<th class="col-auto">Tipo</th>
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
					<div class="row align-items-center justify-content-center">
						<div class="col-2">Fecha de Inicio</div>
									<input type="text" class="form-control col-1" placeholder="Dia" name="dia" id="dia"> /
									<input type="text" class="form-control col-1" placeholder="Mes" name="mes" id="mes"> /
									<input type="text" class="form-control col-1" placeholder="Año" name="anio" id="anio">	

						<div class="col-2">Hora de Inicio</div>
									<input type="text" class="form-control col-1" placeholder="Hora" name="hi" id="hi"> :
									<input type="text" class="form-control col-1" placeholder="Minuto" name="mi" id="mi"> 
									
					</div>
					<div class="row align-items-center justify-content-center">
						<div class="col-2">Fecha de Final</div>
									<input type="text" class="form-control col-1" placeholder="Dia" name="dia" id="dia"> /
									<input type="text" class="form-control col-1" placeholder="Mes" name="mes" id="mes"> /
									<input type="text" class="form-control col-1" placeholder="Año" name="anio" id="anio">	

						<div class="col-2">Hora de Final</div>
									<input type="text" class="form-control col-1" placeholder="Hora" name="hi" id="hi"> :
									<input type="text" class="form-control col-1" placeholder="Minuto" name="mi" id="mi"> 
									
					</div>
					<div class="row justify-content-between">
						<div class="col-">
							<h3>Cursos</h3> 
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
							<table class="table table-sm table-hover table-bordered table-striped">
								<thead>
									<tr>
										<th class="col-auto">Curso</th>
										<th class="col-auto">Añadir</th>
									</tr>
								</thead>
								<tr>
									<td>Carlos</td>
									<td><button class="btn btn-sm btn-primary col" type="submit">Añadir</button></td>
								</tr>
								<tr>
									<td>Alejandro</td>
									<td><button class="btn btn-sm btn-primary col" type="submit">Añadir</button></td>
								</tr>
								<tr>
									<td>Cesar</td>
									<td><button class="btn btn-sm btn-primary col" type="submit">Añadir</button></td>
								</tr>
							</table>
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