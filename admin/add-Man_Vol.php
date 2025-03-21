<?php
include "linc.php";
if (!isset($_SESSION['a']))
 {
  header('Location: adminlogin.php');
 }

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add New Manager/Volunteer | Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/eventify-logo.JPG">   <!-- icon shown on top of heading of admin page -->
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
	
	<style> table { background-color: lightblue;
						border-collapse: collapse;     	
						border: 1px solid gray;  }
						td { padding: 5px;} 
						tr:nth-child(odd) {  background-color: white; }
						
	</style>
	
	<!-- Below functions are used to show query box and form to delete data from relations -->
	<script> 
		function queryFunc()
		{ 
			work = document.getElementById("work-area") ;   // takes div tag's Id and changes it's innerHTML
			work.innerHTML = "<iframe src = 'query_box.html' width = '100%' height ='765' frameborder='0' allowfullscreen sandbox ><p> <a href = 'query_box.html' >Fallback link for browser </a>  </p> </iframe>"  ;
		}
		
	    function del_CG()
		{   
			work = document.getElementById("work-area") ;   // takes div tag's Id and changes it's innerHTML
			work.innerHTML = "<iframe src = 'delete-details.html' width = '100%' height ='765' frameborder='0' allowfullscreen sandbox ><p> <a href = 'delete-details.html' >Fallback link for browser </a>  </p> </iframe>"  ; 
		}
	
	</script>
	
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	
	
    <!-- Start Left menu area -->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add EVENTS | Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/eventify-logo.JPG">   <!-- icon shown on top of heading of admin page -->
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
	
	</head>
    <!-- End Left menu area -->
	
	
    <!-- Start Welcome area -->
    <div class="all-content-wrapper" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index_new.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
											<!-- To collapse left menu -->
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
											</button>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<!--Welcome area ends here -->	
		
		<!-- Shows navigation path -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="index_new.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod"> Add Manager or Volunteer </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<!--  MIDDLE SPACE WITH ALL THE RESULTS ETC. -->
		<!--  php code to insert data into mysql here -->
	<?php
	
		if(isset($_POST["sub-but"]))
		{
        include "linc.php";
			// $host = "localhost"  ; //can be changed according to host
			// $user_name = "myuser" ; //username according to that used in database
			// $passwd = "mypassword" ; //password according to useraccount created in database
			// $schema = "ZEPHYR" ; // to store database/schema wheree all relations are present
		}	
		else
		{
			die("Form not submitted correctly!!!<br> Submit the form correctly</body></html> ") ;
    }
    
		
		
		if(isset($_POST["work-Tag"]) and isset($_POST["firstname"]) and isset($_POST["gender"]) and isset($_POST["br"]) and isset($_POST["yr"]) and isset($_POST["mobileno"]) and isset($_POST["emailid"]) )
		{
      $w = $_POST["work-Tag"] ;
      switch($w)
      {
        case 1:
          $work="managers";
          break;
        case 2:
          $work="volunteers";
          break;
      }
			$pname = $_POST["firstname"] ;
			$g = $_POST["gender"] ;
			$branch = $_POST["br"] ;
			$year = $_POST["yr"] ;
			$phone =$_POST["mobileno"] ;
			$email =$_POST["emailid"] ;
		}
		else
		{
			die("Fill the form correctly!!!</body></html> ") ;
		}
				
		
		
		switch($g)
		{
			case 0:
					$gen = "ND" ;
					break ;
			case 1:
					$gen = "M" ;
					break ;
			case 2 :
					$gen = "F" ;
					break ;
			case 3 :
					$gen = "T" ;
					break ;	
		}
		
			
        if($work =="managers" ) 
        {
          
          $query1 = "DESC ".$work." ;" ;
				  $select = "SELECT * FROM ".$work." ;" ;

        }
        else if($work== "volunteers" )
        {
          
          $query1 = "DESC ".$work." ;" ;
				  $select = "SELECT * FROM ".$work." ;" ;
        }
        else
        {
          die("ERROR!!! <br>Fill out the designation in form correctly.</body></html> ") ;
        }
				
			
		
		
			if($work =="managers") 
				{
          $event = $_POST["eventid"] ;
          

					//Query to insert input data into Chief_Guests table
					$query_in = "INSERT INTO ".$work." VALUES ( '' ,'" .$pname. "' ,'". $gen. "' ,'". $event."' ,'".$branch."' ,'". $year."' ,'". $phone."' ,'".$email."' ); "   ;
				
				}
				
			else if($work== "volunteers" )
				{
          //Query to insert input data into volunteers table
          //$t='volunteers';
          $w="volunteers";
					$query_in = "INSERT INTO ".$work." VALUES ( '' ,'" .$pname. "' ,'".$branch. "' ,'".$year. "' ,'".$gen."' ,'". $email."' ,'". $phone."' ); "   ;               
				}
				
			else 
				{
					die("<h2 align='center'>SOME ERROR !!! <BR>Fill the form correctly.</h2></body></html> ") ;
				}
				
				

	// //CONNECT TO MySQL
	// 	if(!($database = mysqli_connect($host,$user_name, $passwd)))     //returns database handle - representation of connectn. of php to database
	// 	{
	// 		die("Could not connect to database </body></html> ") ;
	// 	}
	 
	//  //open Products database
	// 	if(!mysqli_select_db($database ,$schema ) )
	// 	{
	// 		die("Could not open dk_testn_mysql database</body></html> ") ;
	// 	}
	 
		$result1 = mysqli_query($mysqli , $query1) ;
		$result2 = mysqli_query($mysqli, $query_in) ;
		$result3 = mysqli_query($mysqli , $select) ;
		
	 //query Products database
		
		if(!$result1 and !$result3 )
			{  print("<p>Didnt got result 1 and rsult 3!</p> ") ;
			   die(mysqli_error($mysqli)."</body></html> " ) ;
			} //end if


	//	mysqli_close($database) ;
	?>   <!--end PHP script-->
		
		<div class="single-pro-review-area mt-t-30 mg-b-15" id="work-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st"> 
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section"> 
                                            <div class="row">
                                            <p><h3 align = 'center'> The relation   
									<?php   echo(" Got  ") ; 
											print(mysqli_num_rows($result3)) ?> results. </h3>
								</p>
                                                <div class="col-lg-6 col-md-12 col-sm-10 col-xs-12">
                                                    <caption><h4> Results of  query - <?php  print($query1); ?> &nbsp;are  :</h4></caption> 
													<p>
														<table>
														<?php 
														   while($row = mysqli_fetch_row($result1) )
																	{  //build table to display results 
																		print("<tr>") ;
																
																		foreach($row as $key => $value )
																			print("<td>".$value."</td>") ;
																		print("</tr>") ;
																	}  

														?>
														</table>
													</p>
                                                </div></div></div></div></div></div></di</div>
															
                                                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st"> 
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section"> 
                                            <div class="row">
                                            
                                                
                                                    <caption><h4> Results of query - <?php  print($select); ?> &nbsp; are :</h4></caption>
													<p>
														<table>
															<?php  
															//fetch each record in result set
																while($row = mysqli_fetch_row($result3) )
																	{  //build table to display results 
																		print("<tr>") ;
																
																		foreach($row as $key => $value )
																			print("<td>".$value."</td>") ;
																		print("</tr>") ;
																	}  //end while



															?>
														</table>
													</p>
                                                </div>
                                            </div> 	<br><br><br>	
                                    </div>
                                </div>
							
                            </div>		
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<br><br><br>
        
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>