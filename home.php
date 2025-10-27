<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FiveGen - Berita Terkini</title>

	<link rel="stylesheet" href="assets/css/bootstrap-grid.css">
	<link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
	<link rel="stylesheet" href="assets/css/bootstrap-utilities.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	
	<!-- Font Google -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
	
	<style>
		/* INLINE CSS - Langsung Jadi! */
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif !important;
			background: #f8fafc !important;
			color: #1e293b;
		}

		h1, h2, h3, h4, h5, h6 {
			font-family: 'Poppins', sans-serif !important;
			font-weight: 700 !important;
		}

		/* NAVBAR - Modern & Clean */
		.navbar {
			background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%) !important;
			padding: 0 !important;
			box-shadow: 0 4px 20px rgba(0,0,0,0.2) !important;
			border: none !important;
		}

		.navbar .container-fluid {
			padding: 0.8rem 2rem !important;
		}

		.navbar-brand {
			font-family: 'Poppins', sans-serif !important;
			font-weight: 800 !important;
			font-size: 1.6rem !important;
			color: #fff !important;
			display: flex;
			align-items: center;
			gap: 12px;
			transition: all 0.3s ease;
		}

		.navbar-brand:hover {
			color: #60a5fa !important;
			transform: translateY(-2px);
		}

		.navbar-brand .logo-text {
			background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			background-clip: text;
		}

		.nav-link {
			color: rgba(255, 255, 255, 0.85) !important;
			font-weight: 500 !important;
			font-family: 'Inter', sans-serif !important;
			padding: 0.7rem 1.3rem !important;
			border-radius: 8px !important;
			transition: all 0.3s ease !important;
			margin: 0 0.2rem;
		}

		.nav-link:hover {
			background: rgba(59, 130, 246, 0.2) !important;
			color: #fff !important;
			transform: translateY(-2px);
		}

		.nav-link.active {
			background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%) !important;
			color: #fff !important;
			box-shadow: 0 4px 12px rgba(59, 130, 246, 0.4);
		}

		.navbar-toggler {
			border: 2px solid rgba(255, 255, 255, 0.3) !important;
			padding: 0.5rem 0.75rem !important;
		}

		.navbar-toggler-icon {
			background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
		}

		/* HEADER - Hero Section dengan Pattern Keren */
		#header {
			/*background: 
				linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 41, 59, 0.88) 100%), 
				repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(59, 130, 246, 0.03) 35px, rgba(59, 130, 246, 0.03) 70px),
				repeating-linear-gradient(-45deg, transparent, transparent 35px, rgba(96, 165, 250, 0.03) 35px, rgba(96, 165, 250, 0.03) 70px),
				radial-gradient(circle at 20% 50%, rgba(59, 130, 246, 0.15) 0%, transparent 50%),
				radial-gradient(circle at 80% 80%, rgba(96, 165, 250, 0.15) 0%, transparent 50%),
				radial-gradient(circle at 40% 20%, rgba(37, 99, 235, 0.1) 0%, transparent 50%),
				linear-gradient(180deg, #0f172a 0%, #1e293b 100%) !important;*/
			background-size: cover !important;
			background-position: center !important;
			padding: 4rem 2rem !important;
			border-bottom: 4px solid #3b82f6 !important;
			box-shadow: 0 8px 30px rgba(0,0,0,0.2) !important;
			position: relative;
			overflow: hidden;
		}

		#header::before {
			content: '';
			position: absolute;
			top: -50%;
			right: -10%;
			width: 500px;
			height: 500px;
			background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, transparent 70%);
			border-radius: 50%;
			animation: float 20s ease-in-out infinite;
		}

		#header::after {
			content: '';
			position: absolute;
			bottom: -30%;
			left: -10%;
			width: 400px;
			height: 400px;
			background: radial-gradient(circle, rgba(96, 165, 250, 0.08) 0%, transparent 70%);
			border-radius: 50%;
			animation: float 15s ease-in-out infinite reverse;
		}

		@keyframes float {
			0%, 100% { transform: translate(0, 0) scale(1); }
			50% { transform: translate(30px, 30px) scale(1.1); }
		}

		.header-box h3 {
			font-family: 'Poppins', sans-serif !important;
			font-weight: 800 !important;
			font-size: 2.8rem !important;
			color: #fff !important;
			text-shadow: 3px 3px 10px rgba(0,0,0,0.5) !important;
			margin-bottom: 1rem !important;
			letter-spacing: 1px;
		}

		.header-box .tagline {
			font-family: 'Inter', sans-serif !important;
			font-size: 1.3rem !important;
			color: rgba(255, 255, 255, 0.95) !important;
			font-style: italic;
			font-weight: 300;
			margin-bottom: 1rem !important;
		}

		.header-box .credit {
			font-size: 1rem !important;
			color: rgba(255, 255, 255, 0.8) !important;
		}

		.header-box a {
			color: #60a5fa !important;
			font-weight: 600;
			text-decoration: none;
			transition: all 0.3s ease;
		}

		.header-box a:hover {
			color: #93c5fd !important;
			text-decoration: underline;
		}

		/* BREADCRUMB */
		.breadcrumb {
			background: white !important;
			padding: 1rem 1.5rem !important;
			border-radius: 12px !important;
			border-left: 4px solid #3b82f6;
			box-shadow: 0 2px 10px rgba(0,0,0,0.06) !important;
		}

		.breadcrumb-item a {
			color: #3b82f6 !important;
			text-decoration: none !important;
			font-weight: 600;
		}

		.breadcrumb-item a:hover {
			color: #2563eb !important;
			text-decoration: underline !important;
		}

		.breadcrumb-item.active {
			color: #64748b !important;
		}

		/* CARDS */
		.card {
			border-radius: 16px !important;
			border: none !important;
			box-shadow: 0 4px 15px rgba(0,0,0,0.08) !important;
			transition: all 0.3s ease !important;
			overflow: hidden !important;
			background: white !important;
		}

		.card:hover {
			transform: translateY(-8px) !important;
			box-shadow: 0 12px 30px rgba(0,0,0,0.15) !important;
		}

		.card-img-top {
			height: 250px !important;
			object-fit: cover !important;
			transition: transform 0.3s ease;
		}

		.card:hover .card-img-top {
			transform: scale(1.08);
		}

		.card-title {
			font-family: 'Poppins', sans-serif !important;
			font-weight: 700 !important;
			color: #1e293b !important;
			font-size: 1.25rem !important;
		}

		.card-text {
			font-family: 'Inter', sans-serif !important;
			color: #64748b !important;
			line-height: 1.7;
		}

		.btn-primary {
			background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%) !important;
			border: none !important;
			padding: 0.7rem 1.8rem !important;
			font-weight: 600 !important;
			border-radius: 10px !important;
			transition: all 0.3s ease !important;
			box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
			font-family: 'Inter', sans-serif !important;
		}

		.btn-primary:hover {
			transform: translateY(-3px) !important;
			box-shadow: 0 8px 20px rgba(59, 130, 246, 0.4) !important;
		}

		/* FOOTER */
		#footer {
			background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%) !important;
			padding: 2.5rem 1rem !important;
			border-top: 4px solid #3b82f6 !important;
			margin-top: 4rem !important;
		}

		#footer p {
			margin: 0 !important;
			font-size: 1rem !important;
			color: rgba(255, 255, 255, 0.9) !important;
		}

		#footer a {
			color: #60a5fa !important;
			font-weight: 600 !important;
			text-decoration: none;
		}

		#footer a:hover {
			color: #93c5fd !important;
			text-decoration: underline;
		}

		/* RESPONSIVE */
		@media (max-width: 991px) {
			.navbar-nav {
				padding: 1rem 0;
			}
			
			.header-box h3 {
				font-size: 2rem !important;
			}
			
			.header-box .tagline {
				font-size: 1.1rem !important;
			}
		}

		@media (max-width: 576px) {
			.navbar-brand {
				font-size: 1.3rem !important;
			}
			
			.header-box h3 {
				font-size: 1.6rem !important;
			}
			
			.header-box .tagline {
				font-size: 1rem !important;
			}
		}

		/* SPACING */
		.container {
			max-width: 1200px;
		}

		#sec-article {
			min-height: 60vh;
			padding-bottom: 3rem;
		}
	</style>
</head>
<body>
	
	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="home.php?page=beranda">
	    	<span class="logo-text">FiveGen</span>
	    </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarScroll">
	      <ul class="navbar-nav ms-auto my-2 my-lg-0">
	        <li class="nav-item">
	          <a class="nav-link <?= (isset($_GET['page']) && $_GET['page'] == 'beranda') ? 'active' : '' ?>" href="home.php?page=beranda">Beranda</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link <?= (isset($_GET['page']) && $_GET['page'] == 'berita') ? 'active' : '' ?>" href="home.php?page=berita">Berita</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link <?= (isset($_GET['page']) && $_GET['page'] == 'pendidikan') ? 'active' : '' ?>" href="home.php?page=pendidikan">Pendidikan</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link <?= (isset($_GET['page']) && $_GET['page'] == 'olahraga') ? 'active' : '' ?>" href="home.php?page=olahraga">Olahraga</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link <?= (isset($_GET['page']) && $_GET['page'] == 'teknologi') ? 'active' : '' ?>" href="home.php?page=teknologi">Teknologi</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link <?= (isset($_GET['page']) && $_GET['page'] == 'politik') ? 'active' : '' ?>" href="home.php?page=politik">Politik</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<!-- HEADER -->
	<header id="header">
		<div class="d-flex align-items-center justify-content-center">
			<div class="container header-box text-center" style="position: relative; z-home: 1;">
				<h3>FIVEGEN NEWS</h3>
				<p class="tagline">"Berita Akurat, Gaya Generasi Masa Kini"</p>
				<p class="credit">Powered by <a href='https://FiveGen.com' target='_blank'>FiveGen.com</a></p>
			</div>
		</div>
	</header>

	<!-- CONTENT SECTION -->
	<section id="sec-article" class="mt-4">
		<div class="container">

			<!-- Breadcrumb -->
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="home.php?page=beranda">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><?= isset($_GET['page']) ? ucfirst($_GET['page']) : 'Beranda' ?></li>
			  </ol>
			</nav>

			<!-- Dynamic Content dari Admin Panel -->
			<div class="row mt-4">
			<?php 
				// KONEKSI KE ADMIN PANEL - TETAP UTUH!
				if(isset($_GET['page'])) {
					$page = $_GET['page'];

					switch ($page) {
						case 'beranda':
							include "kategori/beranda.php";
							break;

						case 'berita':
							include "kategori/berita.php";
							break;

						case 'detail':
							include "kategori/detail-post.php";
							break;

						case 'pendidikan':
							include "kategori/pendidikan.php";
							break;

						case 'olahraga':
							include "kategori/olahraga.php";
							break;

						case 'teknologi':
							include "kategori/teknologi.php";
							break;

						case 'politik':
							include "kategori/Politik.php";
							break;

						default:
							echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
							break;
					}
				} else {
					header("location: home.php?page=beranda");
					include "kategori/beranda.php";
				}
			?>
			</div>
		</div>
	</section>

	<!-- FOOTER -->
	<footer id="footer">
		<div class="container text-center">
			<p>&copy; <?= date('Y') ?> FiveGen News | Powered by <a href='https://FiveGen.com' target='_blank'>FiveGen.com</a></p>
		</div>
	</footer>

	<script src="assets/js/bootstrap.js"></script>

</body>
</html>