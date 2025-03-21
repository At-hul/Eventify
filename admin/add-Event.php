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

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	
	
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index_new.php"><img class="main-logo" src="img/eventify-logo.jpg" height = 300 width = 100 alt="Go to index page" /></a>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        
						<li>
                         <a href= "index_new.php"><span class="educate-icon educate-pages icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a>
						 
                        </li>
						
                        <li>
                         <a class = "has-arrow"  title="Landing Page" href="#" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Event</span></a>							
							<ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Events" href="all-Events.php"><span class="mini-sub-pro">All Events</span></a></li>
                                <li><a title="Add Event" href="add-Event.php"><span class="mini-sub-pro">Add Event</span></a></li>
                                <li><a title="Delete Event" href="delete-details.php"><span class="mini-sub-pro">Delete Event</span></a></li>
                            </ul>
                        </li>
					
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Participants</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Participants" href="all-Participants.php"><span class="mini-sub-pro">All Participants</span></a></li>
								<li><a title="Participants Required Details" href="Participants-req-details.php"><span class="mini-sub-pro"> Participants <br>Required Details </span></a></li>
                                <li><a title="Delete Participant" href="delete-details.php"> <span class="mini-sub-pro">Delete Participant </span></a></li>
                            </ul>
                        </li>
						
						<li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Volunteers</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Volunteers" href="all-Volunteers.php"><span class="mini-sub-pro">All Volunteers</span></a></li>
                                <li><a title="Add Volunteers" href="take-Volunteer-info.php"><span class="mini-sub-pro">Add Volunteer</span></a></li>
                                <li><a title="Edit Volunteers" href="edit-Volunteersform.php"><span class="mini-sub-pro">Edit Volunteer</span></a></li>
								<li><a title="Delete Volunteer" href="delete-details.php" > <span class="mini-sub-pro">Delete Volunteer</span></a></li>
                            </ul>
                        </li>
                        
                        <li id="removable">
                            <a href="adminlogout.php" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non"> Logout </span></a>   <!-- Logout Page -->
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
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
                                            <li><span class="bread-blod"> Add Event </span>
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
		
		
		
        <div class="single-pro-review-area mt-t-30 mg-b-15" id="work-area" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
						  <h2 align="center"> Enter EVENT to-be-added details below</h2>
                            <div class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" >
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="pro-ad">
                                                    <form action="#" method = "POST" >
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group"><h3> Event Name: </h3>
                                                                    <input name="ev_name" type="text" required class="form-control" placeholder="Event Name">
                                                                </div><br><br>
                                                                <div class="form-group"><h3> Category: </h3>
																    <select required  name="ev_cat" class="form-control">
																		<option value="0" selected="" > DANCE </option>
																		<option value="1"> DRAMA </option>
																		<option value="2"> LITERARY </option>
																		<option value ="3"> MUSICAL </option>
																		<option value ="4"> FUN </option>
																		<option value ="5"> ART/PHOTO </option>
																		<option value ="6"> TECHNICAL </option>
																	</select>
                                                                </div> <br><br>
																
																<div class="form-group"><h3> Type: </h3>
																    <select name="ev_type"  required  class="form-control">
																		<option value="0" selected="" > WORKSHOP </option>
																		<option value="1"> TALK / SEMINAR </option>
																		<option value="2"> COMPETITION - SOLO </option>
																		<option value ="3"> COMPETITION - GROUP </option>
																		<option value ="4"> SHOW </option>
																		<option value ="5"> GAME </option>
																	</select>
                                                                </div> <br><br>
																
                                                                <div class="form-group"><h3> Venue ID: </h3>
                                                                    <input name="ev_venue" type="number" required  class="form-control" placeholder="Event Venue/Location">
                                                                </div><br><br>
																<div class="form-group"><h3> First prize: </h3>
                                                                    <input name="fp" type="number" class="form-control" required  placeholder="first prize amount">
                                                                </div><br><br>
                                                                <div class="form-group"><h3> Second prize: </h3>
                                                                    <input name="sp" type="number" class="form-control" required  placeholder="second prize amount">
                                                                </div><br><br>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                         
                                                                <div class="form-group"><h3> Start Time: </h3>
                                                                    <input name="ev_start" type="time" class="form-control" required  placeholder="Starting time of event - hh:mm:ss">
                                                                </div><br><br>
																<div class="form-group"><h3> End Time: </h3>
                                                                    <input name="ev_end" type="time" class="form-control" required  placeholder="Ending time of event - hh:mm:ss">
                                                                </div><br><br>
																<div class="form-group"><h3> Begin Date: </h3>
																    <input name="ev_begin" type="date" class="form-control" required  placeholder="Beginning Date of event - DD/MM/YYYY">
                                                                </div> <br><br>
																<div class="form-group"><h3> Closing Date: </h3>
																    <input name="ev_close" type="date" class="form-control" required  placeholder="Closing date of event - DD/MM/YYYY">
                                                                </div> <br><br> 
                                                                <div class="form-group"><h3> Third prize: </h3>
                                                                    <input name="tp" type="number" class="form-control" required  placeholder="third prize amount">
                                                                </div><br><br>                                                               
                                                                <br><br>
                                                            </div>
                                                        </div><br><br>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light" name='sub-but'>Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		
		<!--  php code to insert data into mysql here -->
		<?php
			
			if(isset($_POST["sub-but"]))
			{ 
				$name = $_POST["ev_name"] ;		
				$c = $_POST["ev_cat"] ;      
				$t = $_POST["ev_type"] ;   
				$venue = $_POST["ev_venue"] ;
				
				$start = $_POST["ev_start"] ;
				$end = $_POST["ev_end"] ;
				$begin = $_POST["ev_begin"] ;
                $close = $_POST["ev_close"] ;
                $fp=$_POST["fp"];
                $sp=$_POST["sp"];
                $tp=$_POST["tp"];
                
				
				if(isset($name) and isset($c) and isset($t) and isset($venue) and isset($start) and isset($end) and isset($begin) and isset($close) )
				//if($name and $c and $t and $venue and $year and $start and $end and $begin and $close)
				{
					include "linc.php"  ;
					
					// $host = "localhost"  ; //can be changed according to host
					// $user_name = "DK" ; //username according to that used in database
					// $passwd = "DK@ZEPHYR" ; //password according to useraccount created in database
					// $schema = "ZEPHYR" ; // to store database/schema wheree all relations are present
					
					
					//CONNECT TO MySQL
					// if(!($database = mysqli_connect($host, $user_name, $passwd)))     //returns database handle - representation of connectn. of php to database
					// {
					// 	die("Could not connect to database </body></html> ") ;
					// }
				 
					// //open ZEPHYR database
					// if(!mysqli_select_db($database ,$schema) )
					// {
					// 	die("Could not open ZEPHYR database</body></html> ") ;
					// }
			
					switch($c)
					{
						case 0:
								$cat = "DANCE" ;
								break ;				
						case 1:
								$cat = "DRAMA" ;
								break ;
						case 2 :
								$cat = "LITERARY" ;
								break ;
						case 3 :
								$cat = "MUSICAL" ;
								break ;	
						case 4 :
								$cat = "FUN" ;
								break ;	
						case 5 :
								$cat = "ART/PHOTO" ;
								break ;	
						case 6 :
								$cat = "TECHNICAL" ;
								break ;	
					}
					
					
					switch($t)
					{
						case 0:
								$type = "WORKSHOP" ;
								break ;				
						case 1:
								$type = "TALK/SEMINAR" ;
								break ;
						case 2 :
								$type = "COMPETITION-S" ;
								break ;
						case 3 :
								$type = "COMPETITION-G" ;
								break ;	
						case 4 :
								$type = "SHOW" ;
								break ;	
						case 5 :
								$type = "GAME" ;
								break ;	
					}
					
					
					
					//queries 
					$query_in = "INSERT INTO events VALUES('' ,'" .$name. "' ,'".$type."' ,'".$cat."' ,'" .$begin."' ,'".$close."' ,'".$start."' ,'".$end."' ,'".$fp."' ,'".$sp."','".$tp."','".$venue."' ) ;"  ; 		
				
					$querycheck = "SELECT * FROM events WHERE event_name= '" .$name. "' and category= '".$cat."' AND type= '".$type."' AND  v_id= '" .$venue."'  AND begin_time= '".$start."' AND end_time= '".$end."' AND begin_date= '".$begin."' AND end_date= '".$close."' AND first_prize='".$fp."' AND second_prize='".$sp."' AND third_prize='".$tp."';"  ; 		
				
						
					$resultcheck = mysqli_query($mysqli,$querycheck);
					
					if(mysqli_num_rows($resultcheck) == 0)				// to check if given event already exists
					{
						$result_in = mysqli_query($mysqli , $query_in) ;
						if(isset($result_in))
						{
							echo("<p><br><br> <h2 align='center'> Event inserted in database. </h2><p>") ;
							echo("<p><br><br> <h1 align='center'> Successfully inserted entered data in EVENTS Relation. </h1><p>") ;
							echo($result_in) ;
							mysqli_commit($mysqli) ;
						}
					}
					
					else
					{
						echo("<p><br><br> <h2 align='center'> Event already exists !!</h2><p>")   ;
						mysqli_commit($mysqli) ;
					}
					
					mysqli_close($mysqli) ;
				}
				
				else 
				{
					die("<p><br><br> <h2 align='center'>Please Enter all the details</h2> </body></html> <p>") ;//exit immediately, no further computations 
				} 
				  
				
				
            } 
            
			
		?>   <!--end PHP script-->

        
		
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