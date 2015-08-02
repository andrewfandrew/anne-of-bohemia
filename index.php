<?php
if ($_POST["submit"]) {
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$human = intval($_POST['human']);
$from = 'Site Form';
$to = 'info@cactusblossomitservices.com';
$subject = 'Cactus Blossom ITS ';
$body ="From: $name\n E-Mail: $email\n Message:\n $message";
// Check if name has been entered
if (!$_POST['name']) {
$errName = 'Please enter your name';
}
// Check if email has been entered and is valid
if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
$errEmail = 'Please enter a valid email address';
}
//Check if message has been entered
if (!$_POST['message']) {
$errMessage = 'Please enter your message';
}
//Check if simple anti-bot test is correct
if ($human !== 17) {
$errHuman = 'Your anti-spam is incorrect';
}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
if (mail ($to, $subject, $body, $from)) {
$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
} else {
$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
}
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cactus Blossom IT Services Limited is a web design and web development company based in Deptford, London. Their business services include quality web builds, web configuration and web site management. Cactus Blossom IT Services create Drupal and Wordpress web sites for businesses in Deptford, London and worldwide.">
    <meta name="author" content="">

    <title>Cactus Blossom IT Services Limited</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>


                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-shield fa-lg"></i>  <span class="light"> Your</span> port in a storm
                </a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about"><span class="fa fa-search-plus" aria-hidden="true"></span> About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact"><span class="fa fa-paper-plane" aria-hidden="true"></span> Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#email"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Email</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#map"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Map</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Cactus Blossom</h1>
                        <p class="intro-text">web design<br></p>
                        <h5><span class="fa fa-bolt fa-lg" aria-hidden="true"></span> Facing the elements</h5>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
		<h3><span class="fa fa-paint-brush" aria-hidden="true"></span> What we do</h3>
                <p>We design, develop and manage web sites.</p>
                <h3><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span> Our focus</h3>
                <p>Drupal, Wordpress and Bootstrap sites.</p>
                <h3><span class="fa fa-users" aria-hidden="true"></span> Clients</h3>
                <p>Our clients are individuals and small to medium sized companies. We have remote clients based abroad. Most are based in London.</p>
            </div>
        </div>
    </section>



<!-- AF: Output the contact form -->  
<!-- AF: Contact us section -->
    <section id="contact" class="container content-section text-center"> 
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    <h3><span class="fa fa-paper-plane-o" aria-hidden="true"></span> Contact Us</h3>

<form class="form-horizontal" role="form" method="post" action="index.php">
<div class="form-group">
<label for="name" class="col-sm-2 control-label">Your name</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
<?php echo "<p class='text-muted'>$errName</p>";?>
</div>
</div>
<div class="form-group">
<label for="email" class="col-sm-2 control-label">Your email</label>
<div class="col-sm-8">
<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
<?php echo "<p class='text-muted'>$errEmail</p>";?>
</div>
</div>
<div class="form-group">
<label for="message" class="col-sm-2 control-label">Message</label>
<div class="col-sm-8">
<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
<?php echo "<p class='text-muted'>$errMessage</p>";?>
</div>
</div>
<div class="form-group">
<label for="human" class="col-sm-2 control-label">12 + 5 = ?</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
<?php echo "<p class='text-muted'>$errHuman</p>";?>
</div>
</div>
<div class="form-group">
<div class="col-sm-8 col-sm-offset-2">
<input id="submit" name="submit" type="submit" value="Send" class="btn btn-default btn-lg"></input>
</div>
</div>
<div class="form-group">
<div class="col-sm-8 col-sm-offset-2">
<?php echo $result; ?>	
</div>
</div>
</form>
</div>
</div>
</section>

    <!-- Email Section -->
    <section id="email" class="container content-section text-center">
    
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h3><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Email</h3>
                <p><a href="mailto:info@cactusblossomitservices.com">info@cactusblossomitservices.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                 <!--   <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    -->
                    <li>
                        <a href="https://github.com/andrewfandrew" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <!-- <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li> -->
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>&copy; cactusblossomitservices.com 2015</p>
            <p>Cactus Blossom IT Services Limited, Nebraska Building, Deals Gateway, London SE13 7RT</p>
            <p>Company no: 07512635</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
