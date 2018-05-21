<?php
	include_once "headerusuario.php";
?>
<div class="row mt-3">
			<div class="col">
				<form action="">
					<div class="form-group row">
						<div class="col-6">
							<label for="nombre">Nombre del Problema</label>
							<input type="text" class="form-control" placeholder="Nombre del Problema" name="nombre" id="nombre">
						</div>
						<div class="col-3">
							<label for="nombre">Tiempo Limite</label>
							<input type="text" class="form-control" placeholder="Tiempo Limite" name="nombre" id="nombre">
						</div>
						<div class="col-3">
							<label for="nombre">Memoria Limite</label>
							<input type="text" class="form-control" placeholder="Memoria Limite" name="nombre" id="nombre">
						</div>
					</div>

					<div class="form-group row">
						<div class="col-8">
							<label for="mensaje">Descripcion</label>
							<textarea name="mensaje" id="mensaje" class="form-control" rows="10"></textarea>
						</div>


						<div class="col-4">
							<label for="categoria">Categoria</label>
							<select name="categoria" id="categoria" class="form-control">
								<option value="introduccion">Introduccion</option>
								<option value="ad-hoc">AdHoc</option>
								<option value="cadenas">Cadenas</option>
								<option value="ds">Estructuras de Datos</option>
								<option value="math">Matematica</option>
								<option value="paradigmas">Paradigmas</option>
								<option value="graph">Grafos</option>
								<option value="geometria">Geometria Computacional</option>
							</select>
						</div>
					</div>
					<div class="form-group row justify-content-around">
						<div class="col-6">
							<label for="mensaje">Descripcion Entrada</label>
							<textarea name="mensaje" id="mensaje" class="form-control" rows="5"></textarea>
						</div>
						<div class="col-6">
							<label for="mensaje">Descripcion Salida</label>
							<textarea name="mensaje" id="mensaje" class="form-control" rows="5"></textarea>
						</div>

						
					</div>
					<div class="form-group row justify-content-around">
						<div class="col-6">
							<label for="mensaje">Ejemplo Entrada</label>
							<textarea name="mensaje" id="mensaje" class="form-control" rows="5"></textarea>
						</div>
						<div class="col-6">
							<label for="mensaje">Ejemplo Salida</label>
							<textarea name="mensaje" id="mensaje" class="form-control" rows="5"></textarea>
						</div>

						
					</div>
					<div class="form-group row justify-content-around">
						<div class="col-6">
							<label for="mensaje">Casos de Entrada</label>
							<textarea name="mensaje" id="mensaje" class="form-control" rows="10"></textarea>
						</div>
						<div class="col-6">
							<label for="mensaje">Casos de Salida</label>
							<textarea name="mensaje" id="mensaje" class="form-control" rows="10"></textarea>
						</div>

						
					</div>
					<div class="form-group row justify-content-around">
						<div class="col-12">
							<label for="mensaje">Pista</label>
							<textarea name="mensaje" id="mensaje" class="form-control" rows="3"></textarea>
						</div>
						<div class="col-6">
							
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
	</div>
