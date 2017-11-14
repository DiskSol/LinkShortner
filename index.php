<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>cuut</title>
      <link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Boogaloo|Courgette|Indie+Flower|Rozha+One" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/fotstyle.css">


  <style type="text/css">
       .first_letter {
           color:red;
           position: absolute;
           top: 125px;
           left: 600px;
       }
       body {
           width:100% ; height: 700px;
           background-size: 100% 100%;
       }
       td,tr{
           align-items: center;
       }
   </style>

</head>

<body>


 <br><br><br>
  <br><br><br>

  <?php session_start(); ?>

  <?php
  if(isset($_GET['empty']))
  {
      ?>
      <div class="first_letter ">
          <strong>Please insert an URL</strong>
      </div>
      <?php
  }
  ?>

<div class="container">
	<section id="content">
		<!--form action=""-->
         <form class="" action="one.php" method="POST">
           <h1>CUUT.US</h1>
           <h5 style="color:#0D3D59">URL Shortining Services</h5>
           <br>
           <div>
            <input type="text" name="curl" id="curl" maxlength="1000" class="url"
            style="direction:ltr;text-align:left;" value="" size="50" placeholder="The Long URL" />			<br>
			<input type="submit" value="Cut" name="cut" />
		   </div>

				</form>
	</section><!-- content -->
</div><!-- container -->
 <br><br><br>

<footer>
	<footer class="footer section-padding">
		<div class="container">
			<div class="row">
				<div style="visibility: visible; animation-name:zoomIn;" class="col-sm-12 text-center wow zoomIn">
					<h3>Follow us on</h3>

					<div class="footer_social">
						<ul>
							<li><a class="f_facebook" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="f_twitter" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="f_google" href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a class="f_linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a class="f_instagram" href="#"><i class="fa fa-instagram"></i></a></li>

						</ul>
						<br><br><br>
					</div>
				</div><!--- END COL -->
			</div><!--- END ROW -->


		</div><!--- END CONTAINER -->

	</footer>

  	<script src="js/jquery.min.js"></script>
  	<script src="js/jquery.easing.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/jquery.mixitup.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

    <script>
function myFunction() {
    alert(" You should make account !");
}
</script>
    <script src="js/index.js"></script>

</body>
</html>
