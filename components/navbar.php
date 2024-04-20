<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->


<nav class="navbar navbar-dark bg-dark fixed-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Offcanvas dark navbar</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php">Home</a>
						<a class="nav-link active" aria-current="page" href="menu.php">Menu</a>
						<a class="nav-link active" aria-current="page" href="about.php">Sobre</a>
						<a class="nav-link active" aria-current="page" href="contact.php">Contato</a>
						<a class="nav-link active" aria-current="page" href="login.php">Login</a>
					</li>
				</ul>
				<form class="d-flex mt-3" role="search">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-success" type="submit">Search</button>
				</form>
			</div>
		</div>
	</div>
</nav>




<!-- <nav class="navbar navbar-expand-xxl navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicioso</small></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
				<li class="nav-item"><a href="about.php" class="nav-link">Sobre</a></li>
				<li class="nav-item"><a href="contact.php" class="nav-link">Contato</a></li>

				<li class="nav-item"><a class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasRight">Carrinho</a>

					<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasLeft" aria-labelledby="offcanvasRightLabel">
						<div class="offcanvas-header">
							<h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
							<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
	function toggleActive(event) {
		var links = document.querySelectorAll('.nav-item');
		links.forEach(function(link) {
			link.classList.remove('active');
		});

		event.target.classList.add('active');
	}
</script>