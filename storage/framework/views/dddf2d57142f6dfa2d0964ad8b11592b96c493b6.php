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
				<h3>que desea hacer hoy desea hacer hoy </h3>
				<a href="<?php echo e(route("create")); ?>">añadir producto</a></br>
			</div>
			<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="card m-2" style="width: 18rem;">
				<img class="card-img-top" src="<?php echo e($producto->imagen); ?>" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">id producto:<?php echo e($producto->id); ?></h5>
					<p class="card-text">nombre del producto:<?php echo e($producto->nombre); ?></p>
					<p class="card-text">categoria del producto:<?php echo e($producto->categoria); ?></p>
					<div class="d-flex">
						<form action="<?php echo e(route("administrador")); ?>" method="post">
							<?php echo csrf_field(); ?> <?php echo method_field("delete"); ?>
							<div class="form-group d-none">
								<label>id del producto</label>
								<input class="form-control" type="number" name="id" value="<?php echo e($producto->id); ?>" placeholder="id del producto">
								<?php echo $errors->first("id","<small class='text-danger'>:message</small></br>"); ?>

							</div>
							<input class="btn btn-danger" type="submit" value="eliminar">
						</form>
						<form action="<?php echo e(route("update")); ?>" method="post">
							<?php echo csrf_field(); ?> 
							<div class="form-group d-none">
								<label>id del producto</label>
								<input class="form-control" type="number" name="id" value="<?php echo e($producto->id); ?>" placeholder="id del producto">
								<?php echo $errors->first("id","<small class='text-danger'>:message</small></br>"); ?>

							</div>
							<input class="btn btn-warning" type="submit" value="modificar">
						</form>
					</div>
				</div>
				
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			
		</div>

		<!--script de bootstrap-->
		<script src="<?php echo e(mix('js/app.js')); ?>" type="text/javascript"></script>
		
	</body>
</html><?php /**PATH /home/vagrant/proyectoslarabel/proyectofinal/resources/views//administrador/administrador.blade.php ENDPATH**/ ?>