<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $this->inc('elements/header.php'); ?>
</head>

<body>

<div class="container">


<div class="col-sm-2 col-lg-3 logo row">
<a href="index.html"><img class="img-responsive" src="<?php echo $this->getThemePath(); ?>/images/logo.png" alt="ABC Home"></a>
</div>

<div class="container-fluid">

	<div class="col-sm-1 col-lg-9 navbar-header row">
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
					<li><a class="active" href="index.html">Home</a></li>
						<li><a href="aboutus.html">About Us</a></li>
						<li><a href="contactus.html">Contact Us</a></li>
					<li><a href="ourprograms.html">Our Programs</a></li>
					<li><a href="resources.html">Resources</a></li>
				</ul>
			</nav>


<article class="pull-left">
<div class="col-md-3 col-lg-12 h1 row">
<h1>Welcome!</h1>
</div>

<div class="col-md-3 col-lg-12 h2 row">
<h2>
To ABC Childcare
</h2>
</div>



<div class="col-lg-8 copy row">
<p>
Here at ABC Childcare we are committed to caring for your child in the best way possible. We offer specialized attention for each individual child and are committed to that individualized attention. We want our children to be happy and well-educated! Please feel free to contact us with any questions regarding our center, teachers, or your children.
</p>
</div>

</article>

<aside class="pull-left">
<div class="col-md-3 col-lg-9 homepage row">
<img src="<?php echo $this->getThemePath(); ?>/images/homepage.png" class="img-responsive" alt="Our Kids"/>
</div>
</aside>





</div>













</div><!--closes container-->


<?php $this->inc('elements/footer.php'); ?>




</body>




</html>


