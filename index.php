<!DOCTYPE html>
<html>
<head>
	<title>Mesar</title>
	<link href="https://fonts.googleapis.com/css?family=Gentium+Basic|Open+Sans:400,700,800" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<a href="#" class="logo">Mesar</a>
	<nav>
		<div class="menu_toggle" onclick="toggleMenu();">
			<i class="fas fa-bars"></i>
		</div>
		<ul class="menu">
			<li><a href="#about">Home</a></li>
			<li><a href="#portfolio">Portfolio</a></li>
			<li><a href="#resume">About me</a></li>
			<li><a href="#services">Services</a></li>
			<li><a href="#blog">Blog</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</nav>
	
	<section id="about" name="about">
		<div class="wrapper cf">
			<div class="description">
				<h1>Hi. I am John Doe</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div class="photo">
				<img src="http://via.placeholder.com/200x200">
			</div>
		</div>
	</section>
	<section id="portfolio" name="portfolio">
		<div class="wrapper">
			<h2><span>Portfolio</span></h2>
			<div class="container cf">
				<a href="#" class="portfolio_item" data-item="1" onclick="openPopup(this); return false;"><img src="assets/img/1+2.jpg" alt="img"></a>
				<a href="#" class="portfolio_item" data-item="2" onclick="openPopup(this); return false;"><img src="assets/img/1+2.jpg" alt="img"></a>
				<a href="#" class="portfolio_item" data-item="3" onclick="openPopup(this); return false;"><img src="assets/img/3.jpg" alt="img"></a>
				<a href="#" class="portfolio_item" data-item="4" onclick="openPopup(this); return false;"><img src="assets/img/4.jpg" alt="img"></a>
				<a href="#" class="portfolio_item" data-item="5" onclick="openPopup(this); return false;"><img src="assets/img/5.jpg" alt="img"></a>
				<a href="#" class="portfolio_item" data-item="6" onclick="openPopup(this); return false;"><img src="assets/img/6.jpg" alt="img"></a>
				<a href="#" class="portfolio_item" data-item="7" onclick="openPopup(this); return false;"><img src="assets/img/7.jpg" alt="img"></a>
				<a href="#" class="portfolio_item" data-item="8" onclick="openPopup(this); return false;"><img src="assets/img/8.jpg" alt="img"></a>
			</div>
			<div class="portfolio_item_popup" data-target="1">
				<div class="content">
					<a href="#" class="close_popup" onclick="closePopup(); return false;"><i class="fas fa-times"></i></a>
					<img src="assets/img/1+2.jpg" alt="img">
					<h4>Lorem ipsum1</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="portfolio_item_popup" data-target="2">
				<div class="content">
					<a href="#" class="close_popup" onclick="closePopup(); return false;"><i class="fas fa-times"></i></a>
					<img src="assets/img/1+2.jpg" alt="img">
					<h4>Lorem ipsum2</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="portfolio_item_popup" data-target="3">
				<div class="content">
					<a href="#" class="close_popup" onclick="closePopup(); return false;"><i class="fas fa-times"></i></a>
					<img src="assets/img/3pop.jpg" alt="img">
					<h4>Lorem ipsum3</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="portfolio_item_popup" data-target="4">
				<div class="content">
					<a href="#" class="close_popup" onclick="closePopup(); return false;"><i class="fas fa-times"></i></a>
					<img src="assets/img/4pop.jpg" alt="img">
					<h4>Lorem ipsum4</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="portfolio_item_popup" data-target="5">
				<div class="content">
					<a href="#" class="close_popup" onclick="closePopup(); return false;"><i class="fas fa-times"></i></a>
					<img src="assets/img/5.jpg" alt="img">
					<h4>Lorem ipsum5</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="portfolio_item_popup" data-target="6">
				<div class="content">
					<a href="#" class="close_popup" onclick="closePopup(); return false;"><i class="fas fa-times"></i></a>
					<img src="assets/img/6pop.jpg" alt="img">
					<h4>Lorem ipsum6</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="portfolio_item_popup" data-target="7">
				<div class="content">
					<a href="#" class="close_popup" onclick="closePopup(); return false;"><i class="fas fa-times"></i></a>
					<img src="assets/img/7.jpg" alt="img">
					<h4>Lorem ipsum7</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="portfolio_item_popup" data-target="8">
				<div class="content">
					<a href="#" class="close_popup" onclick="closePopup(); return false;"><i class="fas fa-times"></i></a>
					<img src="assets/img/8pop.jpg" alt="img">
					<h4>Lorem ipsum8</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
		</div>
	</section>
	<section id="resume" name="resume">
		<div class="wrapper">
			<h2 class="section_title"><span>About me</span></h2>
			<div class="container cf">
				<div class="column">
					<h3>Story</h3>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
				</div>
				<div class="column">
					<h3>Info</h3>
					<p><b>Fullname:</b> Sabin Teodorescu</p>
					<p><b>Birthday:</b> 03.08.2007</p>
					<p><b>Job:</b> Student</p>
					<p><b>Website:</b> www.sabinteodorescu.com</p>
					<p><b>E-mail:</b> contact@sabinteodorescu.com</p>
					<a href="assets/img/20161118_205616.jpg" class="button" download>Download CV</a>
				</div>
				<div class="column">
					<h3>Skills</h3>
					<p class="skill_title">HTML5 &amp; CSS3</p>
					<div class="skill_rail">
						<div class="skill_percentage">53%</div>
					</div>
					<p class="skill_title">Javascript &amp; jQuery</p>
					<div class="skill_rail">
						<div class="skill_percentage">2%</div>
					</div>
					<p class="skill_title">HTML</p>
					<div class="skill_rail">
						<div class="skill_percentage">85%</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<section id="services" name="services">
		<div class="wrapper">
			<h2 class="section_title"><span>Services</span></h2>
			<div class="container cf">
				<div class="box">
					<i class="fas fa-lightbulb"></i>
					<h5>Ideas</h5>
					<p>help you start</p>
				</div>
				<div class="box">
					<i class="fas fa-pencil-ruler"></i>
					<h5>Sketches</h5>
					<p>see different looks</p>
				</div>
				<div class="box">
					<i class="fas fa-images"></i>
					<h5>Graphics</h5>
					<p>get a design</p>
				</div>
				<div class="box">
					<i class="fas fa-cog"></i>
					<h5>Customize</h5>
					<p>more customization</p>
				</div>
				<div class="box">
					<i class="fas fa-keyboard"></i>
					<h5>Develop</h5>
					<p>build your project</p>
				</div>
				<div class="box">
					<i class="fas fa-upload"></i>
					<h5>Publish</h5>
					<p>get your project online</p>
				</div>
				<div class="box">
					<i class="fas fa-sliders-h"></i>
					<h5>Analytics</h5>
					<p>analyse your project</p>
				</div>
				<div class="box">
					<i class="fas fa-life-ring"></i>
					<h5>Support</h5>
					<p>fast and friendly</p>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="assets/js/scripts.js"></script>
</body>
</html>