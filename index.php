<?php
  error_reporting('E_ALL');
  ini_set('display_errors', 'off');
  date_default_timezone_set("Asia/Kolkata");
  $today  = strtotime(date('d-m-Y H:i:s'));
  $event_day = strtotime('2016-02-06 00:00:00'); // Customize event time
  $diff_in_seconds = $event_day - $today;
  if ($diff_in_seconds < 0 ) {
    $diff_in_seconds = 0;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HR`Symphony</title>
    <link href="menu/component.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="roll/script.js"></script>
    <link rel="stylesheet" href="roll/animate.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
    <link rel="stylesheet" href="css/simple-sidebar.css">
    <link href="menu/component.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="clock/flipclock.css">
    <style>
    body ,#page-content-wrapper{
      background: transparent url("images/themee.jpg") no-repeat;
      background-size: cover;
    }

    header.smaller{
      background-color: #ccc;
    }
    .navbar-default {
      background: url("http://mssw.in/img/logo_header_bg.png") repeat;
    }
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        height:400px;
        margin: auto;
    }
    .carousel {
      top: 65;
    }
    .item1{
      background:transparent  url("http://www.w3schools.com/bootstrap/img_flower.jpg") no-repeat;
      background-size: 100% 100%;
      height: 400px;
    }
    .navbar-default .navbar-nav>.active>a{
    background: #ff6600;
    color: #fff;
    }
    .navbar-default .navbar-nav >li>a{
      color: #003366;
    }
    .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover{
      color:#fff;
    }
    .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover{
      color:#fff;
    }
    .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover{
      color:#fff;
    }
    .slider-content{
      text-align: center;
    }
    .Content-body{
      width:90%;
      text-align: center;
      margin-left: 5%;
	  background-color: #fff;
    }
	.container{
	border: 5px solid blue;
	background-color:#F2AE7B;
	color: blue;
	width:100%;
	}
   .footer{
      bottom:0;
      margin-top: 8%;
      margin-bottom: 0px;
      background-color: #F2AE7B;
      height: 100px;
	  border: 5px solid #F2AE7B;
	box-shadow: 0px 0px 0px 5px blue;
    }
    div.corousel-inner.my-inner {
        border-top: 10px;
        border-left: 10px;
        border-right: 10px;
        border-bottom: 00px;
        border-color: #fff;
        border-style: solid;
    }
    .item{
      height: 400px;
    }
    .logo{
      background: url("images/logo1.PNG") no-repeat ;
      width:850px;
      background-size: 100%;
      display: inline-block;
      height: 82px;
    }
	.jumbotronEffecct{
	background: url("images/BGGIF.gif") repeat;
	}

	.borders {
	border: 5px solid orange;
	box-shadow: 0px 0px 0px 5px blue;
	}
	p{
	color:#fff;
    text-align: justify;
    text-justify: inter-word;
	}
	@media (min-width: 1200px) {
	.container {
		width: 100%;
	}
}
	@media screen and (min-width: 768px){
	.container {
		width: 100%;
	}
}
    </style>
  </head>
  <body>

    <div id="wrapper" class="">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        HR Symphony `15
                    </a>
                </li>
                <li><a href="#" class="hvr-rectangle-out">Home</a></li>
                <li><a href="events.html" class="hvr-rectangle-out">Events</a></li>
                <!--<li><a href="StuProfile.html" class="hvr-rectangle-out">Student Profile</a></li>-->
                <li><a href="contact.php" class="hvr-rectangle-out">Contact Us</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <div class="jumbotron jumbotronEffecct borders"  style="opacity:1; border-radius:10px; height:150px;">

                <div class="col-md-1-12">
                <div class="col-md-1"><img src="images/logo1.PNG" class="" style="width:100px; margin-top: -18%; position: absolute; clip: rect(0px,110px,200px,0px);"></div>
                <div class="col-md-8"><h2 class=" wow bounceInRight animated" style="padding-left:20px; color:white; font-family: 'Montserrat', sans-serif; margin-left:10%;" > <b>Welcome</b>, HR Symphony `15</h2></div>
				<div class="col-md-1"></div>
                <div class="col-md-1"><a href="#menu-toggle" style ="float:right; width:80px; margin-right:25px; margin-top:15px;" value="Menu" class="col-md-1 btn btn-primary" id="menu-toggle"> Menu</a>
				</div></div>
            </div>
            <div class="Content-body">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
			  <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner item wow slideInUp animated" role="listbox">
              <div class="item active" style="background: url('images/slider/3.jpg'); background-size: 100% 100%;">

              </div>

              <div class="item wow zoomIn animated" style="background: url('images/slider/5.jpg');filter: brightness(150%); -webkit-filter: brightness(150%); background-size: 100% 100%;">
                <!--<div class="carousel-caption">
                   <h1>Changes to the Grid</h1>
                   <p>Bootstrap 3 still features a 12-column grid, but many of the CSS class names have completely changed.</p>
                   <p><a class="btn btn-large btn-warning" href="#">Learn more</a></p>
                </div>-->
              </div>

              <div class="item wow flipInX animated" style="background: url('images/slider/4.jpg');filter: brightness(150%); -webkit-filter: brightness(150%); background-size: 100% 100%;">>
               <!-- <div class="carousel-caption">
                   <h1>Changes to the Grid</h1>
                   <p>Bootstrap 3 still features a 12-column grid, but many of the CSS class names have completely changed.</p>
                   <p><a class="btn btn-large btn-warning" href="#">Learn more</a></p>
                </div>-->
              </div>

              <div class="item wow flipInY animated" style="background: url('images/slider/1.jpg');filter: brightness(120%); -webkit-filter: brightness(120%); background-size: 100% 100%;">>
                <div class="carousel-caption">
                  <!-- <h1>Changes to the Grid</h1>
                   <p>Bootstrap 3 still features a 12-column grid, but many of the CSS class names have completely changed.</p>
                   <p><a class="btn btn-large btn-warning" href="#">Learn more</a></p>-->
                </div>
              </div>
			  <div class="item wow rotateIn animated" style="background: url('images/slider/6.jpg'); background-size: 100% 100%;">>
                <div class="carousel-caption">
                  <!-- <h1>Changes to the Grid</h1>
                   <p>Bootstrap 3 still features a 12-column grid, but many of the CSS class names have completely changed.</p>
                   <p><a class="btn btn-large btn-warning" href="#">Learn more</a></p>-->
                </div>
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="col-md-12" >
            <div class="col-md-2"></div>
            <div class="col-md-10"><div class="clock" style="margin:2em;"> </div>  </div>
          </div>

          <div class="container-content">
            <div class="left col-md-3 wow bouncein animated" >
            </div>
            <div class="right col-md-9 wow fadein animated">
            </div>
          </div>
        </div>

		<div class="Content-body">
              <div class="container jumbotron">
               <section class="CAboutUS">
					<h3><u>About Our College</u>:</h3>
					<p> &nbsp; &nbsp; MADRAS SCHOOL OF SOCIAL WORK, established in 1952, located in Chennai, South India, is an Autonomous Institution, NAAC accredited and affiliated to University of Madras. Madras School of Social Work was founded by Mary Clubwala Jadhav under the auspices of Madras State Branch of the Indian Conference of Social Work (renamed the Indian Council of Social Welfare) and the Guild of Service (central). The school is run under the aegis of the Society for Social Education and Research (SSER). The School is rated 3rd Best Social Work College in India and First in South India.</p>
			   </section>
			   <section class="DAboutUS">
					<h3><u>About Our Department</u>:</h3>
					<p> &nbsp; &nbsp; M. A. HUMAN RESOURCE MANAGEMENT is an intensive two year program aimed at making future HR leaders by preparing a global talent engine, capable of meeting the challenges of the competitive business environment. Students are imbibed with holistic personality skills that enhance their Employability.</p>
			   </section>
			   </div>

          <!-- :form -->
            </div>

      </div>
      <br/>
      <div class="footer"  style="text-align:center;">
        <br />
        <!--facebook &nbsp; Twitter &nbsp; Gmail &nbsp;-->
        <br />
        <h4>Designed By : <a href="https://www.webkb.in" Target='_blank' style="text-decoration:none;">WebKB</a></h4>

      </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

        <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $("#menu-toggle").click();
    </script>
 <!--   <script type="text/javascript">

        function init() {
            window.addEventListener('scroll', function(e){
                var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                    shrinkOn = 300,
                    header = document.querySelector("header");
                if (distanceY > shrinkOn) {
                    classie.add(header,"smaller");
                } else {
                    if (classie.has(header,"smaller")) {
                        classie.remove(header,"smaller");
                    }
                }
            });
        }
        window.onload = init();
    </script>-->
    <script src="clock/flipclock.js"></script>
    <script type="text/javascript">
      var clock;

      $(document).ready(function() {
        var clock;

        clock = $('.clock').FlipClock({
              clockFace: 'DailyCounter',
              autoStart: false,
              callbacks: {
                stop: function() {
                  $('.message').html('Launched!')
                }
              }
          });

          clock.setTime(<?php echo $diff_in_seconds; ?>);
          clock.setCountdown(true);
          clock.start();

      });
    </script>
  </body>
</html>
