<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$email		= $_POST['email'];
	$password	= $_POST['password'];

	$sql = "SELECT email, clave FROM usuario WHERE email = '$email' AND clave = '$password'";
	$result = $conn->query($sql);

	if ($result->num_rows == 1) {
		if (isset($_POST['remember'])) {
			setcookie('email', $email, time() + 86400);
		}

		$_SESSION['email'] = $email;
		$nq="SELECT tipo FROM usuario WHERE usuario.email='$email' and usuario.tipo='estudiante'";
		$result2 = $conn->query($nq);
		if($result2->num_rows==1){
			redirect("usuario.php");
		}else{
			redirect("admin.php");
		}
		exit;
	} else {
		set_message('<div class="alert alert-warning" role="alert" col-md-12"><p>Usuario o contraseña incorrectos.</p></div>');
	}
}
?>