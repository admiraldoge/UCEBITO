<?php
include_once "header.php";
include_once "includes/register.inc.php";
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php display_message(); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" name="registration_form">
				<h2>Registrarse</h2>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Nombre" tabindex="3" required>
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Correo Electrónico" tabindex="4" required>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña" tabindex="5" required>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="confirm_password" id="confirm_password" class="form-control input-lg" placeholder="Confirme Contraseña" tabindex="6" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 col-sm-3 col-md-3 checkbox">
						<!-- <span class="button-checkbox">
							<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
							<input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
						</span> -->
						<label>
							<input type="checkbox" required> Check me out
						</label>
					</div>
					<div class="col-xs-8 col-sm-9 col-md-9">
						Al registrarse <strong class="label label-primary">Register</strong>, usted esta de acuerdo con los <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terminos y Condiciones</a>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6"><input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
					<div class="col-xs-12 col-md-6"><a href="login.php" class="btn btn-success btn-block btn-lg">Entrar</a></div>
				</div>
			</form>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Terminos & Condiciones</h4>
				</div>
				<p>Esta dispuesto, a dejar su informacion para cualquier uso estadistico y/o analisis que se pueda ejecutar sobre el mismo.</p>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Estoy de acuerdo</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div>
<script>
	var password = document.getElementById("password")
	, confirm_password = document.getElementById("confirm_password");

	function validatePassword(){
		if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("La contraseñas no encajan!");
		} else {
			confirm_password.setCustomValidity('');
		}
	}

	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
</script>
<?php
include_once "footer.php";
?>