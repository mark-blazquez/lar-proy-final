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
				<h2>modificar producto</h2>
				<form action="<?php echo e(route("administrador")); ?>" method="post">
					<?php echo csrf_field(); ?> <?php echo method_field("patch"); ?>
					<div class="form-group d-none">
						<label>id del producto</label>
						<input class="form-control" type="number" name="id" value="<?php echo e(request("id")); ?>" placeholder="id del producto">
						<?php echo $errors->first("id","<small class='text-danger'>:message</small></br>"); ?>

					</div>
					<div class="form-group">
						<label>nombre del producto</label>
						<input class="form-control" type="text" name="nombre" value="<?php echo e(old("name")); ?>" placeholder="nombre">
						<?php echo $errors->first("nombre","<small class='text-danger'>:message</small></br>"); ?>

					</div>
					<div class="form-group">
						<label>categoria del producto</label>
						<input class="form-control" type="text" name="categoria" value="<?php echo e(old("categoria")); ?>" placeholder="categoria">
						<?php echo $errors->first("categoria","<small class='text-danger'>:message</small></br>"); ?>

					</div>
					<div class="form-group">
						<label>imagen del producto</label>
						<input class="form-control" type="text" name="imagen" value="<?php echo e(old("iamgen")); ?>" placeholder="imagen">
						<?php echo $errors->first("imagen","<small class='text-danger'>:message</small></br>"); ?>

					</div>


					<input class="btn btn-success" type="submit">
				</form>

				
			</div>
		</div>

		<!--script de bootstrap-->
		<script src="<?php echo e(mix('js/app.js')); ?>" type="text/javascript"></script>
		
	</body>
</html><?php /**PATH /home/vagrant/proyectoslarabel/proyectofinal/resources/views/administrador/update.blade.php ENDPATH**/ ?>