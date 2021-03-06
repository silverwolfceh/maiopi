<?php
	@session_start();
	include_once("global.php");
	if(isset($_SESSION) && isset($_SESSION['login']) && $_SESSION['login'] == "ok")
	{
		$fullname = $GLOBALS['users'][$_SESSION['loginname']]['fullname'];
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Raspberry Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Tong Vuu">

	<!-- Styles -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/font-style.css" rel="stylesheet">
	<link href="assets/css/flexslider.css" rel="stylesheet">

	<script type="text/javascript" src="assets/js/jquery-latest.js"></script>
	<style type="text/css">
		body {
			padding-top: 60px;
		}
	</style>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="assets/img/logo.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

	<script type="text/javascript">
		$(document).ready(function () {
			$("#btn-blog-next").click(function () {
			  $('#blogCarousel').carousel('next')
			});
			 $("#btn-blog-prev").click(function () {
			  $('#blogCarousel').carousel('prev')
			});

			 $("#btn-client-next").click(function () {
			  $('#clientCarousel').carousel('next')
			});
			 $("#btn-client-prev").click(function () {
			  $('#clientCarousel').carousel('prev')
			});

		});

		 $(window).load(function(){

			$('.flexslider').flexslider({
				animation: "slide",
				slideshow: true,
				start: function(slider){
				  $('body').removeClass('loading');
				}
			});
		});

	</script>
</head>
<body>
	<!-- NAVIGATION MENU -->
	<div class="navbar-nav navbar-inverse navbar-fixed-top">
		<div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="index.html"><img src="assets/img/logo30.png" alt=""> Raspberry Dashboard</a>
		</div>
		  <div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
			  <li class="active"><a href="index.html"><i class="icon-home icon-white"></i> Home</a></li>
			  <li><a href="setting.php"><i class="icon-folder-open icon-white"></i> Configuration</a></li>
			  <li><a href="user.html"><i class="icon-user icon-white"></i> User</a></li>
			</ul>
		  </div><!--/.nav-collapse -->
		</div>
	</div>

	<div class="container">
		<!-- Horizontal Rows -->
		<div class="row">
			<!-- User block -->
			<div class="col-sm-3 col-lg-3">
				<div class="dash-unit">
					<dtitle>User Profile</dtitle>
					<hr>
					<div class="thumbnail">
						<img src="assets/img/face80x80.jpg" alt="<?php echo $fullname; ?>" class="img-circle">
					</div> <!-- /thumbnail -->
					<h1><?php echo $fullname; ?></h1>
					<h3>Ho Chi Minh, Vietnam</h3>
					<br>
					<div class="info-user">
						<span aria-hidden="true" class="li_lock fs1" id="ico_logout" title="Logout"></span>
						<span aria-hidden="true" class="li_settings fs1" id="ico_setting" title="Configure"></span>
						<!--<span aria-hidden="true" class="li_mail fs1"></span>
						<span aria-hidden="true" class="li_key fs1"></span>-->
					</div>
				</div>
			</div>
			<!-- End block -->

			<!-- Time block -->
			<div class="col-sm-3 col-lg-3">
				<div class="half-unit">
					<dtitle>Local Time</dtitle>
					<hr>
					<div class="clockcenter">
						<digiclock>12:45:25</digiclock>
					</div>
				</div>
				<div class="half-unit">
					<dtitle>Server UpTime (minutes)</dtitle>
					<hr>
					<div class="cont">
						<p><img src="assets/img/up.png" alt=""> <bold>Up</bold> | <span id="uptime">356ms</span></p>
					</div>
				</div>
			</div>
			<!-- End block -->

			<!-- Notification block -->
			<div class="col-sm-3 col-lg-3">
				<div class="dash-unit">
					<dtitle>Notification</dtitle>
					<hr>
					<div class="framemail">
						<div class="window">
							<ul class="mail">
								<li>
									<i class="unread"></i>
									<img class="avatar" src="assets/img/photo01.jpeg" alt="avatar">
									<p class="sender">CPU</p>
									<p class="message"><strong>CPU Alert</strong> - This is the last...</p>
								</li>
								<li>
									<i class="read"></i>
									<img class="avatar" src="assets/img/photo02.jpg" alt="avatar">
									<p class="sender">Dan E.</p>
									<p class="message"><strong>Hey man!</strong> - You have to taste ...</p>
								</li>
								<li>
									<i class="read"></i>
									<img class="avatar" src="assets/img/photo03.jpg" alt="avatar">
									<p class="sender">Leonard N.</p>
									<p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
								</li>
								<li>
									<i class="read"></i>
									<img class="avatar" src="assets/img/photo04.jpg" alt="avatar">
									<p class="sender">Peter B.</p>
									<p class="message"><strong>Thank you</strong> - Finally I can ...</p>
								</li>
							</ul>
						</div>
					</div>
				</div><!-- /dash-unit -->
			</div>
			<!-- End block -->

			<!-- Server Control Switch -->
			<div class="col-sm-3 col-lg-3">
				<div class="dash-unit">
					<dtitle>Server Control</dtitle>
					<hr>
					<div class="x">
						<h2><button type="button" id="shutdownbtn" class="btn btn-default btn-danger">SHUTDOWN SERVER</button></h2>
						<h2><button type="button" id="restartbtn" class="btn btn-default btn-danger">RESTART SERVER</button></h2>
					</div>
				</div>
			</div>
			<!-- End block -->

		</div>
		<!-- End row -->


		<!-- Horizontal Rows -->
		<div class="row">

			<!-- CPU Usage Block -->
			<div class="col-sm-3 col-lg-3">
				<div class="dash-unit">
					<dtitle>CPU Usage</dtitle>
					<hr>
					<div id="load"></div>
					<h2 id="loadlbl">45%</h2>
				</div>
			</div>
			<!-- End block -->

			<!-- Disk Space Block -->
			<div class="col-sm-3 col-lg-3">
				<div class="dash-unit">
					<dtitle>Disk Space</dtitle>
					<hr>
					<div id="space"></div>
					<h2 id="spacelbl">65%</h2>
				</div>
			</div>
			<!-- End block -->

			<!-- Mem usage block -->
			<div class="col-sm-3 col-lg-3">
				<div class="dash-unit">
					<dtitle>Memory Usage</dtitle>
					<hr>
					<div id="mem"></div>
					<h2 id="memlbl">15%</h2>
				</div>
			</div>
			<!-- End block -->

			<!-- Network info block -->
			<div class="col-sm-3 col-lg-3">
				<div class="dash-unit">
					<dtitle>Network Information</dtitle>
					<hr>
					<div class="section-graph">
						<div id="importantchart"></div>
						<br>
						<div class="graph-info">
							<span class="graph-info-big" id="currentnetwork" style="font-size:15px; color:#b2c831">110 / 20</span>
						</div>
					</div>
				</div>
			</div>
			<!-- End block -->

		</div>
		<!-- End row -->


		<!-- Horizontal Rows -->
		<div class="row">
			<!-- CPU temp block -->
			<div class="col-sm-3 col-lg-3">
				<div class="dash-unit">
					<dtitle>CPU TEMPERATURE</dtitle>
					<hr>
					<div id="temp"></div>
					<h2 id="templbl">15<sup>o</sup>C</h2>
				</div>
			</div>
			<!-- End block -->


			<!-- GPIO Control Switch -->
			<div class="col-sm-3 col-lg-3">
				<div class="dash-unit">
					<dtitle>Light Control</dtitle>
					<hr>
					<div class="info-user">
						<span aria-hidden="true" class="li_params fs2"></span>
					</div>
					<br>
					<div class="switch">

						<input type="radio" class="switch-input" name="light1" value="on" id="light18_on" >
						<label for="light18_on" class="switch-label switch-label-off" data-toggle="tooltip" data-placement="top" title="Light #18 ON">On</label>
						<input type="radio" class="switch-input" name="light1" value="off" id="light18_off" checked="" >
						<label for="light18_off" class="switch-label switch-label-on" data-toggle="tooltip" data-placement="top" title="Light #18 OFF">Off</label>
						<span class="switch-selection"></span>
					</div>
					<div class="switch">
						<input type="radio" class="switch-input" name="light2" value="on" id="light23_on" >
						<label for="light23_on" class="switch-label switch-label-off">On</label>
						<input type="radio" class="switch-input" name="light2" value="off" id="light23_off" checked="">
						<label for="light23_off" class="switch-label switch-label-on">Off</label>
						<span class="switch-selection"></span>
					</div>

					<div class="switch">
						<input type="radio" class="switch-input" name="light3" value="on" id="light24_on">
						<label for="light24_on" class="switch-label switch-label-off">On</label>
						<input type="radio" class="switch-input" name="light3" value="off" id="light24_off" checked="">
						<label for="light24_off" class="switch-label switch-label-on">Off</label>
						<span class="switch-selection"></span>
					</div>
				</div>
			</div>
			<!-- End block -->

			<!-- Live cam block -->
			<div class="col-sm-3 col-lg-3">
				<div class="dash-unit">
					<dtitle>LIVE CAM #0</dtitle>
					<hr>
					<div id="live"><img src="http://10.42.0.30:8081/" style="width:100%; height:100%;" /></div>
					<!-- <h2 id="livelbl">Scanning...</h2> -->
				</div>
			</div>
			<!-- End block -->

			<!-- Live cam block -->
			<div class="col-sm-3 col-lg-3">
				<div class="dash-unit">
					<dtitle>LIVE CAM #1</dtitle>
					<hr>
					<div id="live"><img src="assets/img/test.gif" style="width:100%; height:100%;" /></div>
					<!-- <h2 id="livelbl">Scanning...</h2> -->
				</div>
			</div>
			<!-- End block -->


		</div>
		<!-- End row -->
	</div>

	<div id="footerwrap">
		<footer class="clearfix"></footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-12">
				<p><img src="assets/img/logo.png" alt=""></p>
				<p>Raspberry Dashboard 2017</p>
				</div>
			</div>
		</div>
	</div>


	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="assets/js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src="assets/js/noty/themes/default.js"></script>
	<script type="text/javascript" src="assets/js/highcharts.src.js"></script>
	<script type="text/javascript" src="assets/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="assets/js/speech.js"></script>
	<script type="text/javascript" src="assets/js/admin.js"></script>

</body></html>
<?php
	}
	else
	{
		echo "<script>document.location.href='login.php'; </script>";
	}
?>