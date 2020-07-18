<?php
	phpinfo();die;

	if (isset($_POST)) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$receiver = 'primero.el.dev@gmail.com';
		$headers = [
			'MIME-Version' => '1.0',
			'From' => $email,
			'Reply-To' => $email,
			'Content-type' => 'text/html'
		];

		if (mail($receiver, 'Email from website by' . $name, $message, $headers)) {
			die('ok');
		} else {
			die('bad');
		}
	}
	die;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">

		<title>Krogulski Przemysław - Full Stack Developer</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<script src="https://kit.fontawesome.com/f6b4a65528.js" crossorigin="anonymous"></script>

		<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

		<!-- Custom styles -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<!-- Navigation -->
		<nav class="navbar bg-dark text-light" role="navigation">
			<div class="navbar__wrapper">
				<a class="navbar__brand" href="#home">
					Przemysław Krogulski
				</a>

				<input type="checkbox" id="toggler"/>
				<label for="toggler" class="navbar__toggler">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</label>

				<ul class="navbar__list">
					<li class="navbar__item">
						<a class="navbar__link" href="#home">
							Home
						</a>
					</li>

					<li class="navbar__item">
						<a class="navbar__link" href="#about">
							About me
						</a>
					</li>

					<li class="navbar__item">
						<a class="navbar__link" href="#projects">
							Projects
						</a>
					</li>

					<li class="navbar__item">
						<a class="navbar__link" href="#contact">
							Contact
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<!-- Header -->
		<header class="header section" id="home" role="banner">
			<!-- If noscript, insert static image -->
			<!-- <noscript> -->
				<div class="hero"></div>
			<!-- </noscript> -->
			<div class="wrapper">
				<div class="card bg-light">
					<h2 class="section__header">
						Hi, I'm Przemek Krogulski, full stack developer
					</h2>
				</div>
			</div>

			<!-- <canvas class="canvas"></canvas> -->
		</header>

		<!-- About section -->
		<section class="section" id="about">
			<div class="wrapper about__wrapper">
				<h2 class="section__header">
					About me
				</h2>

				<div class="about__container">
					<div class="about__photo-container">
						<div class="about__photo">
							
						</div>
					</div>

					<div class="about__card card">
						<div class="card__part">
							<h3 class="card__header">
								Who am I?
							</h3>

							<p class="card__paragraph">
								Programming is my passion. I am selfthaught programmer from 2 years. From 1 and half year also selfthaught full stack developer. I am interested in programming, web security, self-development, economics, politics and design.
							</p>
						</div>

						<div class="card__part">
							<h3 class="card__header">
								What I do?
							</h3>

							<p class="card__paragraph">
								I program websites in PHP and Javascript. I use mostly plain PHP but I also have little experience with Laravel.
							</p>
						</div>
						
						<div class="card__part">
							<h3 class="card__header">
								Technology stack
							</h3>

							<div class="about__skills">
								<div class="about__skill">
									<span class="about__skill-name">
										PHP
									</span>
									<span class="stars--90p"></span>
								</div>

								<div class="about__skill">
									<span class="about__skill-name">
										MySQL
									</span>
									<span class="stars--70p"></span>
								</div>

								<div class="about__skill">
									<span class="about__skill-name">
										jQuery
									</span>
									<span class="stars--70p"></span>
								</div>

								<div class="about__skill">
									<span class="about__skill-name">
										Javascript
									</span>
									<span class="stars--60p"></span>
								</div>

								<div class="about__skill">
									<span class="about__skill-name">
										HTML
									</span>
									<span class="stars--60p"></span>
								</div>

								<div class="about__skill">
									<span class="about__skill-name">
										CSS
									</span>
									<span class="stars--80p"></span>
								</div>

								<div class="about__skill">
									<span class="about__skill-name">
										Laravel
									</span>
									<span class="stars--60p"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Projects -->
		<section class="section" id="projects">
			<div class="wrapper">
				<h2 class="section__header">
					Projects
				</h2>

				<div class="projects__container">
					<a class="project">
						<div class="project__caption">
							<h3 class="project__header">
								Project 1
							</h3>
							<p class="project__paragraph">
								Fusce ac volutpat ipsum. Vestibulum efficitur, odio interdum efficitur sollicitudin, nisl neque convallis ipsum, et aliquet nunc ante sed lacus.
							</p>
						</div>
					</a>

					<a class="project" href="http://localhost/projects/portfolio/#">
						<div class="project__caption">
							<h3 class="project__header">
								Project 2
							</h3>
							<p class="project__paragraph">
								Fusce ac volutpat ipsum. Vestibulum efficitur, odio interdum efficitur sollicitudin, nisl neque convallis ipsum, et aliquet nunc ante sed lacus.
							</p>
						</div>
					</a>

					<a class="project">
						<div class="project__caption">
							<h3 class="project__header">
								Project 3
							</h3>
							<p class="project__paragraph">
								Fusce ac volutpat ipsum. Vestibulum efficitur, odio interdum efficitur sollicitudin, nisl neque convallis ipsum, et aliquet nunc ante sed lacus.
							</p>
						</div>
					</a>
				</div>
			</div>
		</section>

		<!-- Contact -->
		<section class="section" id="contact">
			<div class="wrapper">
				<h2 class="section__header">
					Contact
				</h2>

				<div class="contact__card card">
					<form class="contact__form" method="post">
						<div class="contact__form-control">
							<input type="text" class="contact__input" name="name" placeholder="Name"/>
							<!-- <label class="contact__input-label">
								Name
							</label> -->
						</div>

						<div class="contact__form-control">
							<input type="email" class="contact__input" name="email" placeholder="E-mail"/>
							<!-- <label class="contact__input-label">
								E-mail
							</label> -->
						</div>

						<div class="contact__form-control">
							<textarea class="contact__textarea" name="message" rows="5" placeholder="Message"></textarea>
							<!-- <label class="contact__input-label">
								Name
							</label> -->
						</div>

						<button class="contact__form-submit">
							Send
							<i class="fas fa-paper-plane"></i>
						</button>
					</form>
				</div>

				<!-- <div class="contact__card card">
					<div class="contact__method">
						<h4 class="contact__method-header">
							E-mail
						</h4>
						<p class="card__method-paragraph">
							primero.el.dev@gmail.com
						</p>
					</div>

					<div class="contact__method">
						<h4 class="contact__method-header">
							Telephone
						</h4>
						<p class="card__method-paragraph">
							536-343-411
						</p>
					</div>

					<div class="contact__method">
						<h4 class="contact__method-header">
							Telephone
						</h4>
						<p class="card__method-paragraph">
							123-456-789
						</p>
					</div>
				</div> -->
			</div>
		</section>

		<!-- Footer -->
		<footer class="footer">
			<div class="wrapper">
				<div class="socials">
					<a class="social social--github" href="https://github.com/Przemar5" target="_blank">
						<i class="fab fa-github"></i>
					</a>
					<a class="social social--linkedin" href="https://www.linkedin.com/in/przemys%C5%82aw-krogulski-1081ba1b2/" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>
					<a class="social social--facebook" href="https://www.facebook.com/przemo.dzida" target="_blank">
						<i class="fab fa-facebook-f"></i>
					</a>
				</div>

				<div class="footer__footprint">
					Przemysław Krogulski &copy; 2020
				</div>
			</div>
		</footer>

		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>