<?php
	
	session_start();
?>
<html>
	<head>
		<title>Profile</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<div class="page-wrap">

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.php"><span class="icon fa-home"></span></a></li>
						<li><a href="gallery.php"><span class="icon fa-camera-retro"></span></a></li>
						<li><a href="generic.php" class="active"><span class="icon fa-file-text-o"></span></a></li>
					</ul>
				</nav>

			<!-- Main -->
				<section id="main">

				<?php
				include 'session4m.php';
				?>
				
					<!-- Section -->
						<section>
							<p> <br></p>
							<div class="inner">
								<section class="columns double">
									<div class="column">
										<span class="image left special"><img src="images/pic01.jpg" alt="" /></span>
										<header>
											<p></p>
											<h3><font color="#5500DD">
											<?php
												echo ($_SESSION["account"]);
											?>
											</font></h3>
											<p>-------------</p>
										</header>
										<p>
											111
										</p>
									</div>

								</section>

							
			<section>
				<div class="inner" align="left">
					<form name="form" method="POST" action="change.php">
						<h4> Email : </h4>
						<input type=email name="email" id="email" style="width:40%">
						<br>
						<h4> Gender: </h4>

						<br>						
						<br>
						<h4>Birthday : </h4>
						<input type="date" name="bday">
						<br>						
						<h4>Password : </h4>
						<input type=password name="password" id="password" style="width:25%">
						<br>
                        <br>
                        <h4>Password Again: </h4>
                        <input type=password name="password2" id="password2" style="width:25%">
                        <br>
                        <br>
						<ul class="actions">
							<li>
								<input type="submit" value="change">
								</a>
							</li>
						</ul>
					</form>

			</section>

					<!-- Contact -->
						<section id="contact">
							<!-- Social -->
								<div class="social column">

									<h3>Follow Me</h3>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</div>

		
					<!-- Footer -->
						<footer id="footer">

						</footer>
				</section>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>