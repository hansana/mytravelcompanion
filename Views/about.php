<?php
if(session_id() == ''){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Travel Companion - How this works</title>

    <!-- Bootstrap Core CSS -->
    <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../Bootstrap/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">My Travel Companion</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php if (isset($_SESSION['username'])){ ?>
                    <li>
                        <a href="userHome.php">Carpool</a>
                    </li>                     
                    <?php }else{  ?>
                    <li>
                        <a href="index.html">Home</a>
                    </li> 
                    <?php } ?>
                    <li>
                        <a href="about.php">How this works</a>
                    </li>
                    <li>
                        <a href="contactUs.php">Contact us</a>
                    </li>
                    <?php if (isset($_SESSION['username'])){ ?>
                    <li>
                        <a href="userProfile.php">My Profile</a>
                    </li>                     
                    <?php }
                    if (isset($_SESSION['username'])){ ?>  
                    <li>
                        <a href="../Controllers/logout.php">Logout</a>
                    </li>                    
                    <?php }else{  ?>                    
                    <li>
                        <a href="login.php">login</a>
                    </li>
                    <?php } ?>                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('../Bootstrap/img/about-login.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>How this works!</h1>
<!--                        <hr class="small">
                        <span class="subheading">This is what I do.</span>-->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h3>How this works!</h3>
                <p>You log in to My Travel Companion and enter your starting location and destination</p>
                <p>The system works out the best route available, which it saves to its database</p>
                <p>It then compares your route with others that have already been entered to the database</p>
                <p>If the system finds a route that overlaps with yours and if the time frames are compatible, you are presented with a match</p>
                <p>If you decide that you like the match, you now have a new ride to and from work that beats any taxi service currently available and, more importantly, at a minimal cost.</p>
                <h3>The Cost!</h3>
                <p>One of the biggest advantages of opting for a carpool is that it saves you a ton of money. Money that you’d otherwise spend on tuks or cabs. With this new system, the owner of the car may suggest a rate per kilometre that is agreeable to everyone involved and its taken from there.</p>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; HI Solutions 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../Bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../Bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../Bootstrap/js/clean-blog.min.js"></script>

</body>

</html>
