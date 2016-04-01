<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ATLS 3519 Intro to Animations</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">ATLS 3519</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#schedule">Schedule</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#syllabus">Syllabus</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>ATLS 3519 Intro to Animations</h1>
                <h2>Spring 2016</h2>
                <hr>
                <p>
                T/TH 5:00PM-6:50PM <br>ATLS 3519-030/031 <br>Robert N. Bowen 
                </p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Course Schedule</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About This Course</h2>
                    <hr class="light">
                    <p class="text-faded">We will be covering a lot of topics in 3D animation at a depth that makes it possible in a single semester. The bare necessities of an animation will be taught and required of each student or team in completing the final project, a 6-second video (basically, a Vine) visually expressing an idea or emotion. Modeling and animation tracks will run simultaneously in the class, Modeling taking place on Tuesdays and Animation on Thursdays. Each lecture will break down into practicable elements, so we can be sure everyone has a feel for each element of the interface being covered that day.</p>
                    <a href="#schedule" class="btn btn-default btn-xl">Assignments</a>
                </div>
            </div>
        </div>
    </section>

    <section id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Course Schedule</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
<!-- INCLUDE THE SCHEDULE HERE -->
<!-- INCLUDE THE SCHEDULE HERE -->
<!-- INCLUDE THE SCHEDULE HERE -->
<!-- INCLUDE THE SCHEDULE HERE -->
<!-- INCLUDE THE SCHEDULE HERE -->
<!-- INCLUDE THE SCHEDULE HERE -->
<!-- INCLUDE THE SCHEDULE HERE -->
<!-- INCLUDE THE SCHEDULE HERE -->
<!-- INCLUDE THE SCHEDULE HERE -->
<!-- INCLUDE THE SCHEDULE HERE -->
<!-- INCLUDE THE SCHEDULE HERE -->
<!-- INCLUDE THE SCHEDULE HERE -->
<!-- INCLUDE THE SCHEDULE HERE -->
<!-- INCLUDE THE SCHEDULE HERE -->
<!-- INCLUDE THE SCHEDULE HERE -->
        <table class="schedule-table table">
                <tbody>
                <?php
                        $schedule = fopen("schedule.txt", "r") or die("Unable to display schedule");
                        if($schedule){
                                $setCount = 0;
                                while (($line = fgets($schedule)) !== false) {
                                        if($setCount == 7){
                                                $setCount = 0;
                                        }
                                        else{
                                                $setCount += 1;
			
                                                if($setCount == 1){
							echo("<tr>\r\n\r\n");
							echo("<td>");
							echo($line);
							echo("</td>\r\n");	
							echo("</tr>\r\n");
						}
						else if($setCount == 2 || $setCount == 5){
							$videoLink = $line;
							$line=fgets($schedule);
							echo("<tr>\r\n");
							echo("<td><a href=\"");
							echo($videoLink);
							echo("\">");
							echo($line);
							echo("</a></td>\r\n");
							$setCount += 1;
						}
						else{
							echo("<td>");
                                                        echo($line);
                                                        echo("</td>\r\n");
							echo("</tr>\r\n");
						}
                                        }
                                }
                                fclose($schedule);
                        }
                ?>
                </tbody>
        </table>
            </div>
        </div>
    </section>

    <section class="no-padding" id="syllabus">
        <div class="container-fluid">
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Syllabus</h2>
                <a href="Syllabus.txt" class="btn btn-default btn-xl" download>Download</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contact</h2>
                    <hr class="primary">
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-youtube fa-3x wow bounceIn"></i>
                    <p><a href="https://www.youtube.com/channel/UCZfSLIfIX4vgx_f9HMRZSxA">Robert Bowen</a></p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:robert.bowen@colorado.edu">robert.bowen@colorado.edu</a></p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-content-inner">
                <p>Created: 2016</p>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
</body>

</html>
