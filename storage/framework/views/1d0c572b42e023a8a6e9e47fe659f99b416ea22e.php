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
			<a href="<?php echo e(route('administrador')); ?>">pagina administrador</a>
		</div>

		<!--script de bootstrap-->
		<script src="<?php echo e(mix('js/app.js')); ?>" type="text/javascript"></script>
		
	</body>
</html>
<?php /**PATH /home/vagrant/proyectoslarabel/proyectofinal/resources/views/home.blade.php ENDPATH**/ ?>