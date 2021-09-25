<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-success">

		<a href="https://colaboraeducacion30.juntadeandalucia.es/educacion/colabora/web/innicia/presentacion#:~:text=Innicia%20es...&text=Un%20programa%20para%20ayudar%20al,a%20todas%20las%20%C3%A1reas%20pedag%C3%B3gicas."><img style="width: 150px;" src="<?php echo e(asset('images/logo.jpg')); ?>" class=""></a>

		<ul class="navbar-nav ml-auto ">
			<li class="nav-item">
				<h3><a href="<?php echo e(route('index')); ?>"class="nav-link">Inicio</a></h3>			
			</li>
			<li class="nav-item">
				<h3><a href="<?php echo e(route("productos")); ?>" class="nav-link">Productos</a></h3>
			</li>
			<li class="nav-item">
				<h3><a href="<?php echo e(route("donacion")); ?>" class="nav-link">Donaciones</a></h3>	
			</li>
			<!-- Authentication Links -->
			<?php if(auth()->guard()->guest()): ?>
			<?php if(Route::has('login')): ?>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo e(route('login')); ?>"><h3><?php echo e(__('Iniciar sesion')); ?><h3></a>
				</li>
			<?php endif; ?>
			
			<?php if(Route::has('register')): ?>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo e(route('register')); ?>"><h3><?php echo e(__('Registrate')); ?><h3></a>
				</li>
			<?php endif; ?>
			<?php else: ?>
				<li class="nav-item dropdown">
					
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							<h3><?php echo e(Auth::user()->name); ?><h3>
						</a>
					

					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
							<?php echo e(__('cerrar sesion')); ?>

						</a>

						<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
							<?php echo csrf_field(); ?>
						</form>
					</div>
				</li>
			<?php endif; ?>	
		</ul>
	</nav>
</header><?php /**PATH /home/vagrant/proyectoslarabel/proyectofinal/resources/views/componentes/cabecera.blade.php ENDPATH**/ ?>