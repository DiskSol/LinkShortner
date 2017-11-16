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

</head>

<SCRIPT LANGUAGE="JavaScript">

function ClipBoard()
{
  var copyText = document.getElementById("curl2");
    copyText.select();
    document.execCommand("Copy");
    alert("Copied the text: " + copyText.value);
}

</SCRIPT>

<body>

<?php session_start(); ?>

 <br><br><br>
  <br><br><br>

<div class="container">
	<section id="content">
		<!--form action=""-->
         <form class="" action="" method="">



           <h1>CUUT.US</h1>
           <h5 style="color:#0D3D59">URL Shortining Services</h5>
           <br>
           <div>
           	<label style="font-family: 'Patrick Hand', cursive;">The submitted URL has been shortened to..</label>
            <input type="text" name="curl2" id="curl2" maxlength="1000" class="url"
            style="direction:ltr;text-align:left;" value="

            <?php
            if(isset($_GET['yes'])) {

              $connectstr_dbhost = '127.0.0.1:50029';
$connectstr_dbname = 'newdatabase';
$connectstr_dbusername = 'azure';
$connectstr_dbpassword = 'Link.2018';

foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }
    
    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

$link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

//mysqli_close($link);
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
              $query="select time from t1 where suffix='$suff1'";
              $result=mysqli_query($db,$query) or die("error");
              $row=mysqli_fetch_array($result);


                   echo "/".str_pad($suff1, 4, "0", STR_PAD_LEFT);

                   // diplay the remaining time
                    //echo "you only have this time to reserve that suffix". $timee;


             }
            ?> "
size="50"/> <br>


			<input type="submit" value="Copy " name="copy" onClick="ClipBoard();" />
		   </div>

				</form>
	</section><!-- content -->
</div><!-- container -->
 <br><br><br>

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
