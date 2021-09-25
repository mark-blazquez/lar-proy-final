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
				<h2>gestion de productos</h2>
			</div>
			<div>
				<h2>añadir producto</h2>
				<form action="<?php echo e(url("/accion")); ?>" method="post">
					<input type="text">nombre
					<input type="text">categoria
					<input type="text">imagen
					<input type="submit">
				</form>
			</div>

			<div>
				<h2>borrar producto</h2>
				<form action="">

				</form>
			</div>
			
			<div>
				<h2>modificar producto</h2>
				<form action="">

				</form>
			</div>
			
		</div>
		<?php $__env->startComponent('componentes.footer'); ?>	
		<?php if (isset($__componentOriginal7f4977893a5d174922ad26ba1f43a621f2ce2917)): ?>
<?php $component = $__componentOriginal7f4977893a5d174922ad26ba1f43a621f2ce2917; ?>
<?php unset($__componentOriginal7f4977893a5d174922ad26ba1f43a621f2ce2917); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
		
		
		<!--script de bootstrap-->
		<script src="<?php echo e(mix('js/app.js')); ?>" type="text/javascript"></script>
		
	</body>
</html><?php /**PATH /home/vagrant/proyectoslarabel/proyectofinal/resources/views/administrador.blade.php ENDPATH**/ ?>