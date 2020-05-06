<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="assets/images/fav.png" type="image/png" sizes="16x16">
	<title>TechVSI - Top of Software Outsourcing Company In Vietnam</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />
	<meta name="author" content="Author" />
	<link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
	<!-- import CSS -->
	<link rel="stylesheet" type="text/css" href="assets/lib/reset.css">
	<link rel="stylesheet" type="text/css" href="assets/lib/bootstrap-4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/lib/fontawesome-free-5.13.0-web/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/lib/aos/css/aos.css">
	<link rel="stylesheet" type="text/css" href="assets/lib/OwlCarousel2-2.3.4/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="assets/lib/OwlCarousel2-2.3.4/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="assets/lib/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/lib/shake/csshake.css">
	<link rel="stylesheet" type="text/css" href="assets/lib/shake/csshake-slow.min.css">
	<link rel="stylesheet" type="text/css" href="assets/lib/normalize/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/lib/menu-mobile/menu-mobile.css">


	<link rel="stylesheet" type="text/css" href="assets/css/root_var.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home_header.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home_banner.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home_about.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home_home-1.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home_projects.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home_home-2.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home_services.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home_home-3.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home_team.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home_what_we_do.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home_address.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home_footer.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home.css">

	<!-- import JS -->
	<script type="text/javascript" src="assets/lib/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="assets/lib/bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/lib/fontawesome-free-5.13.0-web/js/all.min.js"></script>
	<script type="text/javascript" src="assets/lib/aos/js/aos.js"></script>
	<script type="text/javascript" src="assets/lib/typed-js/typed.min.js"></script>
	<script type="text/javascript" src="assets/lib/jquery.countup.min.js"></script>
	<script type="text/javascript" src="assets/lib/jquery.waypoints.js"></script>
	<script type="text/javascript" src="assets/lib/OwlCarousel2-2.3.4/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/lib/wow/WOW.js" ></script>
	<script type="text/javascript" src="assets/lib/vendorlibrary/js/three.r95.min.js"></script>
	<script type="text/javascript" src="assets/lib/vendorlibrary/js/vanta.net.min.js"></script>
	<script type="text/javascript" src="assets/lib/menu-mobile/menu-mobile.js"></script>

</head>
<body >

<label class="menuBtn">
	<div class="menuLines toggle">
		<input type="checkbox">
		<div>
			<div>
				<span></span>
				<span></span>
			</div>
			<svg>
				<use xlink:href="#path">
			</svg>
			<svg>
				<use xlink:href="#path">
			</svg>
		</div>
	</div>
</label>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" id="path">
		<path d="M22,22 L2,22 C2,11 11,2 22,2 C33,2 42,11 42,22"></path>
	</symbol>
</svg>

<div class="mainContainer">
	<ul class="mainMenu">
		<img src="assets/images/logo.png" alt="" class="vsi-menu-mobile-logo"> 
		<li><a href="#" data-page="1" class="active"><span>HOME</span></a></li>
		<li><a href="#" data-page="2"><span>ABOUT</span></a></li>
		<li><a href="#" data-page="3"><span>PROJECT</span></a></li>
		<li><a href="#" data-page="4"><span>TEAM</span></a></li>
		<li><a href="#" data-page="5"><span>CONTACT</span></a></li>

	</ul>

	<div class="body-container">
	<header>
		<?php require_once("home_header.html")?>
	</header>
	<main>
		<section class="vsi-banner" id="vsi-banner">
			<?php require_once("home_banner.html")?>
		</section>
		<section class="vsi-about" id="vsi-about">
			<?php require_once("home_about.html")?>
		</section>
		<section class="vsi-home-1" id="vsi-home-1">
			<?php require_once("home_home-1.html")?>
		</section>
		<section class="vsi-projects" id="vsi-projects">
			<?php require_once("home_projects.html")?>
		</section>
		<section class="vsi-home-2" id="vsi-home-2">
			<?php require_once("home_home-2.html")?>
		</section>
		<section class="vsi-services" id="vsi-services">
			<?php require_once("home_services.html")?>
		</section>
		<section class="vsi-home-3" id="vsi-home-3">
			<?php require_once("home_home-3.html")?>
		</section>
		<section class="vsi-team" id="vsi-team">
			<?php require_once("home_team.html")?>
		</section>
		<section class="vsi-home_what_we_do" id="vsi-home_what_we_do">
			<?php require_once("home_what_we_do.html")?>
		</section>
		<section class="vsi-address" id="vsi-address">
			<?php require_once("home_address.html")?>
		</section>
	</main>
	<footer>
		<?php require_once("home_footer.html")?>
	</footer>
	</div>
</div>
<!-- Modal -->
<div class="modal" data-backdrop="static" tabindex="-1" id="member1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h1 class="member-name" id="staticBackdropLabel">JESSICA DOEN</h1>
                    <h3 class="member-position">WEB DEVELOPER</h3>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="modal-image">
                                <img src="assets/images/home/team/2b.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h4>Who is Adriana?</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using ‘Content here, content
                                here.</p>
                            <h4>Adriana’s Skills</h4>
                            <div class="chart-bar-wrap">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 90%;">
                                        <span class="white">Development 90</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 80%;">
                                        <span class="white">Design 80</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%;">
                                        <span class="white">Marketing 70</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    <div class="modal" data-backdrop="static" tabindex="-1" id="member2" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h1 class="member-name" id="staticBackdropLabel">JESSICA DOEN</h1>
                    <h3 class="member-position">WEB DEVELOPER</h3>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="modal-image">
                                <img src="assets/images/home/team/4b.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h4>Who is Adriana?</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using ‘Content here, content
                                here.</p>
                            <h4>Adriana’s Skills</h4>
                            <div class="chart-bar-wrap">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 90%;">
                                        <span class="white">Development 90</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 80%;">
                                        <span class="white">Design 80</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%;">
                                        <span class="white">Marketing 70</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" data-backdrop="static" tabindex="-1" id="member3" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h1 class="member-name" id="staticBackdropLabel">JESSICA DOEN</h1>
                    <h3 class="member-position">WEB DEVELOPER</h3>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="modal-image">
                                <img src="assets/images/home/team/5b.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h4>Who is Adriana?</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using ‘Content here, content
                                here.</p>
                            <h4>Adriana’s Skills</h4>
                            <div class="chart-bar-wrap">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 90%;">
                                        <span class="white">Development 90</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 80%;">
                                        <span class="white">Design 80</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%;">
                                        <span class="white">Marketing 70</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" data-backdrop="static" tabindex="-1" id="member4" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h1 class="member-name" id="staticBackdropLabel">JESSICA DOEN</h1>
                    <h3 class="member-position">WEB DEVELOPER</h3>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="modal-image">
                                <img src="assets/images/home/team/6b.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h4>Who is Adriana?</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using ‘Content here, content
                                here.</p>
                            <h4>Adriana’s Skills</h4>
                            <div class="chart-bar-wrap">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 90%;">
                                        <span class="white">Development 90</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 80%;">
                                        <span class="white">Design 80</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%;">
                                        <span class="white">Marketing 70</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" data-backdrop="static" tabindex="-1" id="member5" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h1 class="member-name" id="staticBackdropLabel">JESSICA DOEN</h1>
                    <h3 class="member-position">WEB DEVELOPER</h3>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="modal-image">
                                <img src="assets/images/home/team/2b.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h4>Who is Adriana?</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using ‘Content here, content
                                here.</p>
                            <h4>Adriana’s Skills</h4>
                            <div class="chart-bar-wrap">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 90%;">
                                        <span class="white">Development 90</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 80%;">
                                        <span class="white">Design 80</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%;">
                                        <span class="white">Marketing 70</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" data-backdrop="static" tabindex="-1" id="member6" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h1 class="member-name" id="staticBackdropLabel">JESSICA DOEN</h1>
                    <h3 class="member-position">WEB DEVELOPER</h3>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="modal-image">
                                <img src="assets/images/home/team/6b.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h4>Who is Adriana?</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using ‘Content here, content
                                here.</p>
                            <h4>Adriana’s Skills</h4>
                            <div class="chart-bar-wrap">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 90%;">
                                        <span class="white">Development 90</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 80%;">
                                        <span class="white">Design 80</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%;">
                                        <span class="white">Marketing 70</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" data-backdrop="static" tabindex="-1" id="member7" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h1 class="member-name" id="staticBackdropLabel">JESSICA DOEN</h1>
                    <h3 class="member-position">WEB DEVELOPER</h3>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="modal-image">
                                <img src="assets/images/home/team/6b.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h4>Who is Adriana?</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using ‘Content here, content
                                here.</p>
                            <h4>Adriana’s Skills</h4>
                            <div class="chart-bar-wrap">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 90%;">
                                        <span class="white">Development 90</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 80%;">
                                        <span class="white">Design 80</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%;">
                                        <span class="white">Marketing 70</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" data-backdrop="static" tabindex="-1" id="member8" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h1 class="member-name" id="staticBackdropLabel">JESSICA DOEN</h1>
                    <h3 class="member-position">WEB DEVELOPER</h3>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="modal-image">
                                <img src="assets/images/home/team/6b.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h4>Who is Adriana?</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using ‘Content here, content
                                here.</p>
                            <h4>Adriana’s Skills</h4>
                            <div class="chart-bar-wrap">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 90%;">
                                        <span class="white">Development 90</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 80%;">
                                        <span class="white">Design 80</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%;">
                                        <span class="white">Marketing 70</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	<script type="text/javascript" src="assets/js/script.js"></script>
	<script type="text/javascript" src="assets/js/home_header.js"></script>
	<script type="text/javascript" src="assets/js/home_banner.js"></script>
	<script type="text/javascript" src="assets/js/home_about.js"></script>
	<script type="text/javascript" src="assets/js/home_home-1.js"></script>
	<script type="text/javascript" src="assets/js/home_projects.js"></script>
	<script type="text/javascript" src="assets/js/home_home-2.js"></script>
	<script type="text/javascript" src="assets/js/home_services.js"></script>
	<script type="text/javascript" src="assets/js/home_home-3.js"></script>
	<script type="text/javascript" src="assets/js/home_team.js"></script>
	<script type="text/javascript" src="assets/js/home_what_we_do.js"></script>
	<script type="text/javascript" src="assets/js/home_address.js"></script>
	<script type="text/javascript" src="assets/js/home_footer.js"></script>
	<script type="text/javascript" src="assets/js/home.js"></script>
	<script>
		AOS.init();
	</script>
</body>
</html>
