<?php
	
	session_start();

?>

<!DOCTYPE HTML>
<html>
	
<head>
	<title>Gallery - Snapshot by TEMPLATED</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
	<div class="page-wrap">

		<!-- Nav -->
		<nav id="nav">
			<ul>
				<li>
					<a href="index.php">
						<span class="icon fa-home"></span>
					</a>
				</li>
				<li>
					<a href="gallery.php" class="active">
						<span class="icon fa-camera-retro"></span>
					</a>
				</li>
				<li>
					<a href="generic.php">
						<span class="icon fa-file-text-o"></span>
					</a>
				</li>
			</ul>
		</nav>

		<!-- Main -->
		<section id="main">
				<?php
				include 'session4m.php';
				?>
			<!-- Gallery -->
			<section id="galleries">

				<!-- Photo Galleries -->
				<div class="gallery">

					<!-- Filters -->
					<header>
						<h1>Your Photos</h1>
						<ul class="tabs">
							<li>
								<a href="#" data-tag="all" class="button active">All</a>
							</li>
							<li>
								<a href="#" data-tag="people" class="button">People</a>
							</li>
							<li>
								<a href="#" data-tag="place" class="button">Places</a>
							</li>
							<li>
								<a href="#" data-tag="thing" class="button">Things</a>
							</li>
						</ul>
					</header>

					<div class="content">
					<div>
						<form action="upload.php" method="POST" enctype="multipart/form-data" class="upload">
						<input type="file" name="file[]" id="" accept="image/jpeg,image/jpg,image/gif,image/png" multiple>							
						<input type="submit" name="submit" value="上傳檔案" >
						</form>
					</div>
					</div>
				</div>
			</section>

				<section id="upload">
					<div>
						<form action="upload.php" method="POST" enctype="multipart/form-data" class="upload">
						<input type="file" name="file[]" id="" accept="image/jpeg,image/jpg,image/gif,image/png" multiple>							
						<input type="submit" name="submit" value="上傳檔案" >
						</form>
					</div>

				</section>			

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