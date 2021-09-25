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
		<?php $__env->startComponent('componentes.cabecerausuario'); ?>	
		<?php if (isset($__componentOriginalb9e4a2d1952c58cdf789426c3465007856aa0d38)): ?>
<?php $component = $__componentOriginalb9e4a2d1952c58cdf789426c3465007856aa0d38; ?>
<?php unset($__componentOriginalb9e4a2d1952c58cdf789426c3465007856aa0d38); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
		<div class="container">
			<div>
				<h2>borrar producto</h2>
				<form method="POST" action="">
			</div>
			<div>
				<h2>añadir producto</h2>
				<form method="POST" action="">
			</div>
			<div>
				<h2>modificar producto</h2>
				<form method="POST" action="">
			</div>

		</div>
		
		
		<!--script de bootstrap-->
		<script src="<?php echo e(mix('js/app.js')); ?>" type="text/javascript"></script>
		
	</body>
</html>
<form method="POST" action=""><?php /**PATH /home/vagrant/proyectoslarabel/proyectofinal/resources/views/cliente.blade.php ENDPATH**/ ?>