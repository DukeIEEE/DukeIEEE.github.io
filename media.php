<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Duke IEEE</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creativemedia.css" type="text/css">
    <link rel="stylesheet" href="css/media.css" type="text/css">



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
                <a class="navbar-brand page-scroll" href="#page-top">Duke IEEE</a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   <li>
                         <a class="page-scroll" href="index.html">Home</a>
                    </li>                        
                     
                     <li>
                        <a class="page-scroll" href="events.php">Events</a>
                    </li>
                 
                    <li>
                        <a class="page-scroll" href="media.php">Media</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="officers.php">Officers</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="subscribe.php">Subscribe</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <section id="gallery">
         <div class="content container" id="pictures">
      <div class="row">
          <section class="col-xs-12">
          <div class="carousel slide" id="featured">
              <div class="carousel-inner">
                  <div class="item active">
                 <img src="img/hi.jpg">
                  </div>
                   <?php $dirname = "img/boardpics/";
                    $images = glob($dirname."*.jpg");
                    foreach($images as $image) {
                            echo "<div class='item'><img src='".$image."' /></div>";
            } ?>
              </div> <!-- carousel inner -->
             
          <a class="left carousel-control"
              href="#featured" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control"
              href="#featured" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
          </a>




           </div> 

          </section>


      </div><!-- row -->
  </div><!-- content container -->
    </section>

    

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 class="section-heading  text-center">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Have a cool project in mind? Any general questions? Contact us at ieee.duke@gmail.com<br>Want to get involved? Subscribe to our mailing list<br>© 2014 Duke IEEE Student Branch</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-facebook fa-3x wow bounceIn"></i>
                    <a href='https://www.facebook.com/DukeIEEE/?fref=ts'><p>Duke IEEE</p></a>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p>ieee.duke@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>

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
