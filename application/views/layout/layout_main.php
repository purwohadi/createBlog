<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Purwo Hadi</title>
		<meta http-equiv="Content-Language" content="English" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="Purwo Hadi Official Website" />
		<meta name="keywords" content="purwook, open source, purwo, purwo hadi, programming, database, linux, Informasi, website,progremmer" />
		<meta name="copyright" content="purwo hadi">
		<meta name="author" content="purwook.com">
		<meta name="email" content="purwohadi@purwook.com">
		<meta name="Distribution" content="Global">
		<meta name="Rating" content="General">
		<meta name="Robots" content="INDEX,FOLLOW">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			
		<link rel="stylesheet" type="text/css" href="<?=$css?>style_pagging.css" media="screen" />
		<link href="<?=$css?>green/style.css" rel="stylesheet" type="text/css" media="screen" />
		
		<!-- Bootstrap core CSS -->
		<link href="<?=$libraries?>/bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
		<!-- Custom styles for this template -->
		<link href="<?=$libraries?>/bootstrap/css/blog-home.css" rel="stylesheet">
	</head>
	
	<body>	
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		  <div class="container">
			<a class="navbar-brand" href="#">Start Bootstrap</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
			  <ul class="navbar-nav ml-auto">
				<li class="nav-item active">
				  <a class="nav-link" href="<?=$base_url?>/home">Home
					<span class="sr-only">(current)</span>
				  </a>
				</li>
				<!--
				<li class="nav-item">
				  <a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">Services</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">Contact</a>
				</li>
				-->
			  </ul>
			</div>
		  </div>
		</nav>
	
		<!-- Page Content -->
		<div class="container">
			<div class="row">

				<!-- Blog Entries Column -->
				<div class="col-md-8">
					
					<!-- start #content -->
						<?php echo $content_for_layout?>
						
					<!-- end #content -->
				</div>
				<!-- end #page -->
				
				<!-- Start #sidebar -->
				<!-- Sidebar Widgets Column -->
				<div class="col-md-4">
		
				  <!-- Search Widget -->
				  <form method="post" accept-charset="utf-8" action="http://example.com/index.php/email/send">
				  <div class="card my-4">
					<h5 class="card-header">Search</h5>
					<div class="card-body">
						
					  <div class="input-group">
						
							<input type="text" class="form-control" placeholder="Search for...">
						
						
						<span class="input-group-btn">
						  <button class="btn btn-secondary" type="submit">Go!</button>
						</span>
					  </div>
					</div>
				  </div>
				  </form>
		
				  <!-- Categories Widget -->
				  <div class="card my-4">
					<h5 class="card-header">Categories</h5>
					<div class="card-body">
					  <div class="row">
						<div class="col-lg-6">
						  <ul class="list-unstyled mb-0">
							<li>
							  <a href="#">Web Design</a>
							</li>
							<li>
							  <a href="#">HTML</a>
							</li>
							<li>
							  <a href="#">Freebies</a>
							</li>
						  </ul>
						</div>
						<div class="col-lg-6">
						  <ul class="list-unstyled mb-0">
							<li>
							  <a href="#">JavaScript</a>
							</li>
							<li>
							  <a href="#">CSS</a>
							</li>
							<li>
							  <a href="#">Tutorials</a>
							</li>
						  </ul>
						</div>
					  </div>
					</div>
				  </div>
		
				  <!-- Side Widget -->
				  <div class="card my-4">
					<h5 class="card-header">Side Widget</h5>
					<div class="card-body">
					  You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
					</div>
				  </div>
		
				</div>			
				<!-- end #sidebar -->
			</div>  <!-- /.row -->
		</div><!-- /.container -->
		
		<!-- Start #footer -->
		<div id="footer">
		   <p>Copyright (c) 2010 purwook.com. All rights reserved.</p>
		</div>
		<!-- end #footer -->
	   
	</body>
</html>