<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $this->inc('elements/header.php'); ?>
</head>

<body>

<div class="container">


<div class="col-sm-2 col-lg-3 logo row">
<a href="index.html"><img class="img-responsive" src="<?php echo $this->getThemePath(); ?>/images/logo.png" alt="ABC Home"></a>
</div>

<div class="container-fluid">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="col-xs-4 col-sm-3 col-md-2 navbar-brand" href="index.html"></a>
	</div>
	
	
	
			<nav class="collapse navbar-collapse nav" id="bs-example-navbar-collapse-1">
					<ul class="list-unstyled">
					<li><a href="index.html">Home</a></li>
						<li><a class="active" href="aboutus.html">About Us</a></li>
						<li><a href="contactus.html">Contact Us</a></li>
					<li><a href="ourprograms.html">Our Programs</a></li>
					<li><a href="resources.html">Resources</a></li>
				</ul>
			</nav>


<article class="pull-left">
<div class="col-md-3 col-lg-12 h1 row">
<h1>
About Us
</h1>
</div>

<div class="col-md-3 col-lg-12 h2 row">
<h2>
Mission Statement
</h2>
</div>

<div class="col-lg-7 copy row">
<p>
Mission Statement will be placed right here. We will offer the highest education possible and will foster learning, fun, safety, and individuality. We strive to promote creativity.
</p>
</div>

<div class="col-lg-6 image row">
<img src="<?php echo $this->getThemePath(); ?>/images/art.png" class="img-responsive" alt="Our Kids"/>
</div>

<div class="col-md-3 col-lg-12 h2 row">
<h2>
Employment Opportunities
</h2>
</div>


<div class="col-lg-7 copy row">
<p>
We are currently hiring two part-time kindergarten teachers as well as one full-time nursery aid. Please find our application under our "Forms" Tab under "Resources" to apply.
</p>
</div>

<div class="col-lg-6 images row">
<img src="<?php echo $this->getThemePath(); ?>/images/teacher.png" class="img-responsive" alt="Teachers"/>
</div>
</article>
</div>








</div><!--closes container-->




<?php $this->inc('elements/footer.php'); ?>


</body>




</html>


