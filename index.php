<?php
	include_once "header.php";
?>
<div class="container">
<div class="row">
			<div class="col-12">
				<div class="carousel slide" id="secondary-carousel" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#secondary-carousel" data-slid-to="0" class="active"></li>
						<li data-target="#secondary-carousel" data-slid-to="1"></li>
						<li data-target="#secondary-carousel" data-slid-to="2"></li>
					</ol>

					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="carousel-caption d-block">
								<h4>Convierte en un campeón</h4>
								<p>Compite sanamente con tus amigos y conviertete en el mejor programador del pais y luego del mundo</p>
							</div>
							<img src="img/foto1.jpg" width="1200" alt="">
						</div>
						<div class="carousel-item">
							<div class="carousel-caption d-block">
								<h4>Participa de Concursos</h4>
								<p>Mide tu nivel de conocimiento participando en prestigiosos concursos internacionales como la ICPC o la IOI</p>
							</div>
							<img src="img/foto2.jpg" width="1200" alt="">
						</div>
						<div class="carousel-item">
							<div class="carousel-caption d-block">
								<h4>Mantente en forma</h4>
								<p>Practica a diario con nuestros problemas recuerda, la practica hace al maestro</p>
							</div>
							<img src="img/foto3.jpg" width="1200" alt="">
						</div>
					</div>

					<a href="#secondary-carousel" class="carousel-control-prev" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>

					<a href="#secondary-carousel" class="carousel-control-next" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Siguiente</span>
					</a>
				</div>
			</div>
</div>
</div>
<?php
	include_once "footer.php";
?>