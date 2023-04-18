<?php include_once "bdd_log.php"; ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
		<title>Portfolio</title>
		<meta name="description" content="Big Project Guardia School 2023" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/slick.css" />
		<link rel="stylesheet" href="assets/css/Features-Image-images.css" />
		<link rel="stylesheet" href="assets/css/Navbar-Right-Links-icons.css" />
		<link rel="stylesheet" href="assets/css/Simple-Slider-1.css" />
		<link rel="stylesheet" href="assets/css/Simple-Slider-swiper-bundle.min.css" />
		<link rel="stylesheet" href="assets/css/Simple-Slider.css" />
		<link rel="stylesheet" href="assets/css/Slick-Slider-Carousel.css" />
	</head>

	<body style="background: rgb(17, 18, 20)">
		<nav
			class="navbar navbar-light navbar-expand-md py-3"
			style="background: #96a2b4; width: 100%; height: 100%"
		>
			<div class="container">
				<a class="navbar-brand d-flex align-items-center" href="#"
					><span class="fs-4"
						><span
							style="color: rgb(255, 255, 255); background-color: rgb(152, 162, 178)"
							>Pannel Administrateur</span
						></span
					></a
				><button
					data-bs-toggle="collapse"
					class="navbar-toggler"
					data-bs-target="#navcol-2"
				>
					<span class="visually-hidden">Toggle navigation</span
					><span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navcol-2">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a
								class="nav-link active"
								id="acceuil-button"
								href="index.php"
								target="_top"
								><strong>Accueil</strong></a
							>
						</li>
						<li class="nav-item"></li>
						<li class="nav-item"></li>
						<li class="nav-item"></li>
						<li class="nav-item"></li>
					</ul>
					<a
						class="btn btn-primary ms-md-2"
						role="button"
						id="deconnexion-button"
						href="index.php"
						style="background: rgb(170, 49, 27)"
						target="_blank"
						><strong
							><span style="background-color: rgb(173, 48, 28)"
								>Se déconnecter</span
							></strong
						></a
					>
				</div>
			</div>
		</nav>
		<div class="col text-center" style="margin-top: 60px">
			<a class="btn btn-primary" role="button" href="admin_pannel_ajouter.php"
				>Ajouter un projet</a
			>
		</div>
		<div class="container" style="margin-top: 60px">
			<div class="row">
				<div class="col-md-4">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr></tr>
							</thead>
							<tbody>
								<tr></tr>
								<tr></tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-8">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>
										<h1 class="fs-2">
											<span style="color: rgb(255, 255, 255)">Nom</span>
										</h1>
									</th>
									<th>
										<h1 class="fs-2">
											<span style="color: rgb(255, 255, 255)"
												>Description</span
											>
										</h1>
									</th>
									<th>
										<h1 class="fs-2">
											<span style="color: rgb(255, 255, 255)">Image</span>
										</h1>
									</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Cell 1</td>
									<td>Cell 2</td>
									<td>Text</td>
									<td>
										<div class="row">
											<div class="col">
												<a
													class="btn btn-primary"
													role="button"
													href="admin_pannel_modifier.php"
													><svg
														xmlns="http://www.w3.org/2000/svg"
														width="1em"
														height="1em"
														fill="currentColor"
														viewBox="0 0 16 16"
														class="bi bi-pencil"
													>
														<path
															d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"
														></path>
													</svg>
												</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>Text</td>
									<td>Text</td>
									<td>Text</td>
									<td>
										<a
											class="btn btn-primary"
											role="button"
											href="admin_pannel_modifier.php"
											><svg
												xmlns="http://www.w3.org/2000/svg"
												width="1em"
												height="1em"
												fill="currentColor"
												viewBox="0 0 16 16"
												class="bi bi-pencil"
											>
												<path
													d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"
												></path>
											</svg>
										</a>
									</td>
								</tr>
								<tr>
									<td>Cell 3</td>
									<td>Cell 4</td>
									<td>Text</td>
									<td>
										<a
											class="btn btn-primary"
											role="button"
											href="admin_pannel_modifier.php"
											><svg
												xmlns="http://www.w3.org/2000/svg"
												width="1em"
												height="1em"
												fill="currentColor"
												viewBox="0 0 16 16"
												class="bi bi-pencil"
											>
												<path
													d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"
												></path>
											</svg>
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/js/bs-init.js"></script>
		<script src="assets/js/Simple-Slider-slider.js"></script>
		<script src="assets/js/Slick-Slider-Carousel-slick.min.js"></script>
		<script src="assets/js/Slick-Slider-Carousel-slick_slider_carousel.js"></script>
		<script src="assets/js/Simple-Slider-swiper-bundle.min.js"></script>
		<script src="assets/js/Simple-Slider.js"></script>
	</body>
</html>
