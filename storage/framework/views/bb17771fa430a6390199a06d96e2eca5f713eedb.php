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
		<?php $__env->startComponent('componentes.cabeceraadmin'); ?>	
		<?php if (isset($__componentOriginal9aca0ffaea1a6f2ac77d9651baf2194ed33e7262)): ?>
<?php $component = $__componentOriginal9aca0ffaea1a6f2ac77d9651baf2194ed33e7262; ?>
<?php unset($__componentOriginal9aca0ffaea1a6f2ac77d9651baf2194ed33e7262); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
		<div class="container">
			<div class="d-flex justify-content-center">
				<img src="https://www.las2orillas.co/wp-content/uploads/2015/05/gato-100-millones.jpg">
			</div>
			<div class="alert alert-danger" role="alert">
				<div class="d-flex justify-content-center">
					<p>ha sucedido un error inesperado vuelve a la pagina de incio</p>
				</div>

				<div class="d-flex justify-content-center">
					<button class="btn">
						<a href="<?php echo e(route('index')); ?>" class="alert-link">volver a inicio</a>
					</button>
				</div>
		
			</div>
		</>
		<?php $__env->startComponent('componentes.footer'); ?>	
		<?php if (isset($__componentOriginal7f4977893a5d174922ad26ba1f43a621f2ce2917)): ?>
<?php $component = $__componentOriginal7f4977893a5d174922ad26ba1f43a621f2ce2917; ?>
<?php unset($__componentOriginal7f4977893a5d174922ad26ba1f43a621f2ce2917); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
		
		
		<!--script de bootstrap-->
		<script src="<?php echo e(mix('js/app.js')); ?>" type="text/javascript"></script>
		
	</body>
</html><?php /**PATH /home/vagrant/proyectoslarabel/proyectofinal/resources/views/errors/404.blade.php ENDPATH**/ ?>