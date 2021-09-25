<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">

			<div class="d-flex">
				<a class="text-dark" href="<?php echo e(route('administrador')); ?>"><h1 class="jsutify-content-center">PAGINA ADMIN</h1></a>			
			</div>
		</div>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Left Side Of Navbar -->
			<ul class="navbar-nav mr-auto">

			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="navbar-nav ml-auto">
				<!-- Authentication Links -->
				<?php if(auth()->guard()->guest()): ?>
					<?php if(Route::has('login')): ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo e(route('login')); ?>"><h2><?php echo e(__('Login')); ?></h2></a>
						</li>
					<?php endif; ?>
					
					<?php if(Route::has('register')): ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo e(route('register')); ?>"><h2><?php echo e(__('Register')); ?></h2></a>
						</li>
					<?php endif; ?>
				<?php else: ?>
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							<h2><?php echo e(Auth::user()->name); ?></h2>
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
							   onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
								<?php echo e(__('cerrar sesion')); ?>

							</a>
							

							<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
								<?php echo csrf_field(); ?>
							</form>
						</div>
					</li>
				<?php endif; ?>
			</ul>
		</div>
		
	</nav>
</header><?php /**PATH /home/vagrant/proyectoslarabel/proyectofinal/resources/views/componentes/cabeceraadmin.blade.php ENDPATH**/ ?>