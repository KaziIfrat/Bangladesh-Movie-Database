<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Delete Movie</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<style type="text/css">
	.back-link a {
		color: #4ca340;
		text-decoration: none; 
		border-bottom: 1px #4ca340 solid;
	}
	.back-link a:hover,
	.back-link a:focus {
		color: #408536; 
		text-decoration: none;
		border-bottom: 1px #408536 solid;
	}
	h1 {
		height: 100%;
		/* The html and body elements cannot have any padding or margin. */
		margin: 0;
		font-size: 14px;
		font-family: 'Open Sans', sans-serif;
		font-size: 32px;
		margin-bottom: 3px;
	}
	.entry-header {
		text-align: left;
		margin: 0 auto 50px auto;
		width: 80%;
        max-width: 978px;
		position: relative;
		z-index: 10001;
	}
	#demo-content {
		padding-top: 100px;
	}
	</style>

	</head>

	<body>
	<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
			</div>
		

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">BANGLADESHI MOVIE DATABASE</h1>
						
						</div>
					</a> <!-- #branding -->

				<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item"><a href="natok.html">Natok</a></li>
						   <div class="dropdown">
  <button class="dropbtn">Movie</button>
  <div class="dropdown-content">
    <a href="top-rated.html">Top rated</a>
    <a href="upcoming.html">Upcoming</a>
    <a href="movie.html">All</a>
  </div>
</div>
							
							<li class="menu-item"><a href="log_option.html">Log in</a></li>
							
							<li class="menu-item"><a 
						</ul> <!-- .menu -->

						<form action="#" class="search-form">
							<input type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="index.html">Home</a>
							
							<span>Delete Movie</span>
						</div>

						<div class="content">
				
							


<div id="pagecontent">



<!-- begin injectable INJECTED_BILLBOARD -->
<div id="injected_billboard_wrapper" class="injected_slot" style="display: none;">
<iframe id="injected_billboard" name="injected_billboard" class="yesScript" width="0" height="0" data-dart-params="#doubleclick;u=295992492926;ord=295992492926?" data-original-width="0" data-original-height="0" data-config-width="0" data-config-height="0" data-cookie-width="0" data-cookie-height="0" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" allowtransparency="true" onload="doWithAds.call(this, function(){ ad_utils.on_ad_load(this); });" </i>style="display: none;"></iframe> </div>
<script>
    
doWithAds(function(){
ad_utils.inject_ad.register('injected_billboard');
}, "ad_utils not defined, unable to render injected ad.");
</script>
<div id="injected_billboard_reflow_helper"></div>
<!-- end injectable INJECTED_BILLBOARD --><!-- _get_ad_for_slot(INJECTED_BILLBOARD) -->

<table id="outerbody" border="0" width="100%" cellspacing="0" cellpadding="0" class="outer_body">
<tbody><tr valign="top" align="left">
<td>
<div style="margin: 25px">

</td>
</tr>
</tbody></table>



<br style="clear:both;">

   

     

<div class="deletemovie">        
 <center>    
<?php
   
   include 'dbms.php';
   $sql = "select * from movie_details";
       
       
   $res=mysqli_query($conn,$sql);
       
    while ($row = mysqli_fetch_array($res))
   {
          
           
        echo $row['movie_name'];
     ?>
  
       <form action="del1.php" method="post">


            <tr>
           <td><input type="hidden" value="<?php echo $row['movie_id']; ?>" name="id" /></td>
           
           </tr>


        </form>
       <?php
    } 
     ?>
     <form action="delprocess.php" method="post">
      <table align="center">
                        <tr>
                            <td>
                            	<input style= 'border:2px solid black'type="text" name="dell">
                                <input type="submit" name="delete" value="DELETE"/>
                            </td>
                        </tr>
                    </table>
                </form>

     </center>  
    </div>
     
					
				<!-- .container -->
			</main>
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">About Us</h3>
								
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Recent Review</h3>
								<ul class="no-bullet">
									<li><a href="#">Aynabaji</a></li>
									
								</ul>
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Contact Us</h3>
								<ul class="no-bullet">
									<li><a href="#">+8801703003775</a></li>
									<li><a href="#">bmdb@gmail.com</a></li>

									
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Social Media</h3>
								<ul class="no-bullet">
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">Google+</a></li>
								</ul>
							</div>
						</div>
						
					</div> <!-- .row -->

					
				</div> <!-- .container -->

			</footer>
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>
		
	</body>

</html>