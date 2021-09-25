<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <title>proyectoinica</title>
	</head>

	
	<body>
		<!--la cabecera importada-->
		
		<div class="container mt-2 mb-5">
			<div class="d-flex justify-content-center">
				<h2>Productos disponibles </h2>
			</div>
			<div class="d-flex justify-content-center">	
				<p>
					Esta es la pagina donde puedes ver los dispositivos que tenemos a tu disposicion, para poder hacer una peticion por uno de ellos debes de registrarte
				</p>
			</div>
			<div class="d-flex">
				<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="card m-2" style="width: 18rem;">
					<img class="card-img-top" src="<?php echo e($producto->imagen); ?>" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">nombre:<?php echo e($producto->nombre); ?></h5>
						<p class="card-text">categoria:<?php echo e($producto->categoria); ?></p>
					</div>
					<?php if(auth()->guard()->check()): ?>
						<button class="btn btn-success">pedir objeto</button>
					<?php endif; ?>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
		
		
		<!--script de bootstrap-->
		<script src="<?php echo e(mix('js/app.js')); ?>" type="text/javascript"></script>
		
	</body>
</html><?php /**PATH /home/vagrant/proyectoslarabel/proyectofinal/resources/views/productos.blade.php ENDPATH**/ ?>