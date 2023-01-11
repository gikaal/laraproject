<body>

	<!-- Begin Nav
	================================================== -->
	<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="container">
		<!-- Begin Logo -->
		<a class="navbar-brand" href="index.html">
		<img src="assets/img/logo.png" alt="logo">
		</a>
		<!-- End Logo -->
		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<!-- Begin Menu -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item active">
				<a class="nav-link" href="{{ route ('Home') }}">Home <span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="{{ route ('About') }}">About</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="{{ route ('Contact') }}">Contact</a>
				</li>

				<li class="nav-item">
				    <a class="nav-link" href="{{ route ('login') }}">Log In</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="{{ route ('register') }}">Register</a>
				</li>							
			</ul>
			<!-- End Menu -->
			
		</div>
	</div>
	</nav>
	<!-- End Nav
	================================================== -->