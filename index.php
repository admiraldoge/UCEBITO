<?php
	include_once "header.php";
?>
<div class="row mt-3">
			<div class="col-12 mt-3">
				<div class="carousel slide" id="secondary-carousel" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#secondary-carousel" data-slid-to="0" class="active"></li>
						<li data-target="#secondary-carousel" data-slid-to="1"></li>
						<li data-target="#secondary-carousel" data-slid-to="2"></li>
					</ol>

					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="carousel-caption d-block">
								<h4>Titulo de la Imagen</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, possimus!</p>
							</div>
							<img src="img/1.jpg" width="1200" alt="">
						</div>
						<div class="carousel-item">
							<div class="carousel-caption d-block">
								<h4>Titulo de la Imagen</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, possimus!</p>
							</div>
							<img src="img/2.jpg" width="1200" alt="">
						</div>
						<div class="carousel-item">
							<div class="carousel-caption d-block">
								<h4>Titulo de la Imagen</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, possimus!</p>
							</div>
							<img src="img/3.jpg" width="1200" alt="">
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
<?php
	include_once "footer.php";
?>