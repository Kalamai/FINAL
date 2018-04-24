<!DOCTYPE HTML>
<!--
	Snapshot by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->


<html>
<head>
	<title>S.C Photo</title>
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
					<a href="index.php" class="active">
						<span class="icon fa-home"></span>
					</a>
				</li>
				<li>
					<a href="gallery.php">
						<span class="icon fa-camera-retro"></span>
					</a>
				</li>
				<li>
					<a href="generic.html">
						<span class="icon fa-file-text-o"></span>
					</a>
				</li>
			</ul>
		</nav>

		<!-- Main -->
		<section id="main">

		<header id="header">
		<input type ="button" onclick="javascript:location.href='sign.html'" value="Sign"></input>
		<input type ="button" onclick="javascript:location.href='login.html'" value="Login"></input>		

	</header>
		
			<section id="banner">
				<div class="inner">
					<div class="intro">
						<h1>
							
							<a href="index.php">Hey , Let's classify your photo.</h1>
						<p>This is a wise classifier !</p>
					</div>

				</div>
			</section>

			<!-- Gallery -->
			<section id="galleries">

				<div class="gallery">
					<div class="content-left" style="background-color:#E8E8E8">
						
					<div id="first"  >
							<h3>1.Choose some photos</h3> 
							<img src="https://bit.ly/2HSXgAf" width="50%" height="50%">
						</div>
						<div id="second"  >
						<h3>2.Upload them</h3> 
							<img src="https://bit.ly/2JgvlJT" width="50%" height="50%">
						</div>
				<div id="third"  >
						<h3>3.Calculate on server</h3> 
							<img src="https://bit.ly/2Hiqtax"  width="50%" height="50%">
						</div>
						<div id="fourth"  >
							<h3>4.Select successful!</h3>
							<img src="https://bit.ly/2JgAzVY"  width="50%" height="50%"> 
						</div>
					</div>

					<div class="content-right" style="background-color:#E8E8E8">

						<ul class="tabs">
							<li>
                                <a href="#all" data-tag="all" class="button active">All</a>
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
						<div class="content">
											
											<div class="media all place">
												<a href="images/fulls/06.jpg"><img src="images/thumbs/06.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all thing">
												<a href="images/fulls/10.jpg"><img src="images/thumbs/10.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all people">
												<a href="images/fulls/03.jpg"><img src="images/thumbs/03.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all place">
												<a href="images/fulls/07.jpg"><img src="images/thumbs/07.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all thing">
												<a href="images/fulls/11.jpg"><img src="images/thumbs/11.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all people">
												<a href="images/fulls/04.jpg"><img src="images/thumbs/04.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all place">
												<a href="images/fulls/08.jpg"><img src="images/thumbs/08.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all thing">
												<a href="images/fulls/12.jpg"><img src="images/thumbs/12.jpg" alt="" title="This right here is a caption." /></a>
											</div>
										</div>
					</div>
				</div>
				<div id="start">
					<a href="#upload" align="center">
						<h1>Let's start !</h1>
					</a>
				</div>
				<!-- upload -->
	
				<section id="upload">
					<div>
						<form action="upload.php" method="POST" enctype="multipart/form-data" class="upload">
						<input type="file" name="file[]" id="" accept="image/jpeg,image/jpg,image/gif,image/png" multiple>							
						<input type="submit" name="submit" value="上傳檔案" >
						</form>
					</div>
					<div>
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
		
									<h1>使用者上傳結果顯示</h1>
								</ul>
					</div>
				</section>

				<!-- Footer -->
				<footer id="footer">
					<div class="copyright">
						&copy; Untitled Design:
						<a href="https://templated.co/">TEMPLATED</a>. Images:
						<a href="https://unsplash.com/">Unsplash</a>.
					</div>
				</footer>
			</section>
	</div>

	</div>
	</section>


	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.poptrox.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>