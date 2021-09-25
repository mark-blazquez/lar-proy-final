<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <title>proyectoinica</title>
		<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	</head>

	<!--cuerpo con la info de la pagina-->
	<body>

		<!--la cabecera importada-->
		<?php $__env->startComponent('componentes.cabecera'); ?>	
		<?php if (isset($__componentOriginalce8e2b16a1f7e7b73da60aaa5b7be45cc6e988c1)): ?>
<?php $component = $__componentOriginalce8e2b16a1f7e7b73da60aaa5b7be45cc6e988c1; ?>
<?php unset($__componentOriginalce8e2b16a1f7e7b73da60aaa5b7be45cc6e988c1); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

		
		<div class="">
			<!--imagen del centro -->
			<div role="main" class="w-100">
				<div class="d-flex justify-content-center">
					<div  class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="<?php echo e(asset('images/iesiliberis.jpg')); ?>" alt="First slide">
								<div class="carousel-caption d-none d-md-block">
									<h5><a class="text-white" href="http://www.iesiliberis.com/es/">IES Ilíberis</a></h5>
								</div>
							</div>
							
						</div>
					</div>	
				</div>
			</div>
			<!--introduccion  -->
			<h1 class="d-flex justify-content-center">Proyeccto Innicia</h1>

		</div>
		<!--imagen del centro -->
		<div class="container">

			<div class="d-flex justify-content-center">
				<h2 >¿Quienes somos?</h2>
			</div>
	
			<div class="d-flex justify-content-center">
				<p class="lead">
					Nuestro reto emprendedor es dar a conocer la iniciativa que nos permita captar, reparar y posteriormente distribuir material tecnológico. Con el resultado de este proceso conseguiremos disminuir la brecha digital del alumnado de nuestro entorno.</br>
					El alumnado de grado superior de Administración de Sistemas Informáticos en Red, ha elaborado una página web que poniendo en práctica los conocimientos adquiridos a lo largo del ciclo permita dar a conocer esta iniciativa y también permita poner en contacto a los oferentes de material con los demandantes.</br> 
					Por otra parte, el alumnado de grado medio del ciclo de SMR, realizará un diagnóstico sobre la funcionalidad del material y en su caso la reparación para su posterior entrega a quien le pueda ser de utilidad.</br>
					Quienes somos: Alumnado y profesorado de FP del IES Iliberis.
				</p>
			</div>

			<div>
				<div class="section-title">
					<h3 >Nuestra Labor</h3>
					<p>Para poder llevar a cabo este proyecto ,necesitamos de la ayuda de personas que generosamente nos ofrezcan sus dispositivos para hacerselos llegar a quien mas lo necesite y para ello realizaremos los sigueintes pasos</p>
				</div>
				
				
				<div class="d-flex justify-content-center">

					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box">
						  <div class="icon"><i class="fas fa-search"></i></div>
						  <h4 class="title">Diagnostico</h4>
						  <p class="description">Una vez nos lleguen los dispositivos seran pasados a los alumnos para que hagan un diagnostico de reaparacion, si por un casual el dispositivos es irreparable lo reciclariamos, y los componentes usables se reutilizarian  </p>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box">
						  <div class="icon"><i class="fas fa-tools"></i></div>
						  <h4 class="title">Reparacion </h4>
						  <p class="description">El dispositivo sera tratado por nuestros expertos alumnos para dejarlo en el mejor de los estado </p>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box">
						  <div class="icon"><i class="far fa-handshake"></i></div>
						  <h4 class="title">Donacion</h4>
						  <p class="description">Una vez el dispositivo este impoluto este podra ser solicitado a traves de esta misma pagina para aquel quien mas lo necesite</p>
						</div>
					</div>

				</div>

			</div>

		</div>

		<!--carrussel de imagenes-->
		<div class="d-flex justify-content-center">
			<h2 >El equipo</h2>
		</div>

		<div class="d-flex justify-content-center">
			<div role="main" class="w-50 ">
				<div class="d-flex justify-content-center">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="<?php echo e(asset('images/1.jpg')); ?>" alt="First slide">
								<div class="carousel-caption d-none d-md-block">
									<p>Alumnos de reparando material para ser distribuido de nuevo</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="<?php echo e(asset('images/2.jpg')); ?>" alt="Second slide">
								<div class="carousel-caption d-none d-md-block">
									<p>Alumnos de reparando material para ser distribuido de nuevo</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="<?php echo e(asset('images/3.jpg')); ?>" alt="Third slide">
								<div class="carousel-caption d-none d-md-block">
									<p>Alumnos de reparando material para ser distribuido de nuevo</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="<?php echo e(asset('images/4.jpg')); ?>" alt="Third slide">
								<div class="carousel-caption d-none d-md-block">
									<p>Alumnos de reparando material para ser distribuido de nuevo</p>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>	
				</div>
			</div>
		</div>
		<!--fin del carrusel -->
				
		<!--<?php $__env->startComponent('componentes.footer'); ?>	
		<?php if (isset($__componentOriginal7f4977893a5d174922ad26ba1f43a621f2ce2917)): ?>
<?php $component = $__componentOriginal7f4977893a5d174922ad26ba1f43a621f2ce2917; ?>
<?php unset($__componentOriginal7f4977893a5d174922ad26ba1f43a621f2ce2917); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>-->

		<!--script de bootstrap-->
		<script src="<?php echo e(mix('js/app.js')); ?>" type="text/javascript"></script>
	</body>

</html><?php /**PATH /home/vagrant/proyectoslarabel/proyectofinal/resources/views/index.blade.php ENDPATH**/ ?>