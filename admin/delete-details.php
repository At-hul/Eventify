<?php
include "linc.php";
if (!isset($_SESSION['a']))
 {
  header('Location: adminlogin.php');
 }

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Delete | Admin</title>
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
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
	
	<script>
		
		var toPrint = getElementById("print-area") ;
	
	</script>
	
	
<!-- Below functions are used to show query box -->
	<script> 
		function queryFunc()
		{ 
			work = document.getElementById("work-area") ;   // takes div tag's Id and changes it's innerHTML
			work.innerHTML = "<iframe src = 'query_box.html' width = '100%' height ='765' frameborder='0' allowfullscreen sandbox ><p> <a href = 'query_box.html' >Fallback link for browser </a>  </p> </iframe>"  ;
		}
		
	</script>
	
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
                                            <li><span class="bread-blod"> Delete details from Relations or Tables </span>
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
		
		<!-- Middle area -->
		
		
		
		
            <div class="container-fluid" >
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st" >
                                    <div class="row">
                                        <div class="col-lg-10 col-md-12 col-sm-10 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="pro-ad">
                                                    <form  align ='center' method ="POST" action="#" >
														<h2 align='center'> &emsp;Enter details of  &ensp;   
															<select  required name ="relation">
																<option value="0" selected="" > EVENTS </option>
																<option value="1" >MANAGERS </option>
																<option value="2" >VOLUNTEERS</option>
																<option value="3" >SPONSORS</option>
                                <option value="4" >CHIEF GUESTS </option>
                                <option value="5" >PARTICIPANTS </option>
															 </select>
															&ensp; that is to be deleted, below. </h2>
                                                        <div class="row">&nbsp;
                                                            <div>
															    <br><br>
																<div class="form-group" class ="center-block" ><h3> Id : </h3>
                                                                    <input name="selectn-id" type="number"  class="form-control" required placeholder="Events/Managers/Volunteers/Sponsors/Chief_Guests Id">
                                                                </div><br><br>
                                                                <div class="form-group" ><h3>Full Name: </h3>
                                                                    <input name="firstname" type="text" class="form-control" required placeholder="Events/Managers/Volunteers/Sponsors/Chief_Guests Full Name">
                                                                </div><br><br>
                                                            </div>
														</div>	
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light" name='sub-but' >Submit
																</button>
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
       
	  
		<!--  php code to print data into mysql here -->
		<?php
			
			if(isset($_POST["sub-but"]))
			{ 
				$rn = $_POST["relation"] ;		// relation name being selected
				$id = $_POST["selectn-id"] ;      // mandatory input , primary key 
				$pname = $_POST["firstname"] ;   // optional input 
				
				if(isset($id) and isset($pname))
				{
					include "linc.php"  ;
					
					// $host = "localhost"  ; //can be changed according to host
					// $user_name = "DK" ; //username according to that used in database
					// $passwd = "DK@ZEPHYR" ; //password according to useraccount created in database
					// $schema = "ZEPHYR" ; // to store database/schema wheree all relations are present
					
					
					// //CONNECT TO MySQL
					// if(!($database = mysqli_connect($host, $user_name, $passwd)))     //returns database handle - representation of connectn. of php to database
					// {
					// 	die("Could not connect to database </body></html> ") ;
					// }
				 
					// //open ZEPHYR database
					// if(!mysqli_select_db($database ,$schema) )
					// {
					// 	die("Could not open dk_testn_mysql database</body></html> ") ;
					// }
			
					switch($rn)
					{
						case 0:
								$table = "events" ;
								break ;				
						case 1:
								$table = "managers" ;
								break ;
						case 2 :
								$table = "volunteers" ;
								break ;
						case 3 :
								$table = "sponsor" ;
								break ;	
						case 4 :
								$table = "cguest" ;
                break ;	
            case 5:
                  $table = "participants" ;
                  break ;	
					}
					
					
					if($table =="managers" ) 
						{	//query ZEPHYR database
							$querycheck="SELECT * FROM ".$table." WHERE m_id='".$id."' AND name='".$pname."' ;"  ;
							$query2 = "DELETE FROM ".$table." WHERE m_id= '".$id."' AND name= '" .$pname. "' ;"   ;   //query ZEPHYR database
						
						}
					else if($table == "volunteers" )
						{	//query ZEPHYR database
							$querycheck="SELECT * FROM ".$table." WHERE v_id='".$id."' AND name='".$pname."' ;"  ;
							$query2 = "DELETE FROM ".$table." WHERE v_id= '".$id."' AND name= '" .$pname. "' ;"   ;     
						}
						
					else if($table == "sponsor" )
						{	//query ZEPHYR database
							$querycheck="SELECT * FROM ".$table." WHERE s_id='".$id."' AND name='".$pname."' ;"  ;
							$query2 = "DELETE FROM ".$table." WHERE s_id= '".$id."' AND name= '" .$pname. "' ;"   ; 	
						}
						
					else if($table == "cguest" )
						{	//query ZEPHYR database
							$querycheck="SELECT * FROM ".$table." WHERE c_id='".$id."' AND name='".$pname."' ;"  ;
							$query2 = "DELETE FROM ".$table." WHERE c_id= '".$id."' AND name= '" .$pname. "' ;"   ;	  
						}
					else if ($table == "events" )
						{	//query ZEPHYR database
							$querycheck="SELECT * FROM ".$table." WHERE event_id='".$id."' AND event_name='".$pname."' ;"  ;
							$query2 = "DELETE FROM ".$table." WHERE event_id= '".$id."' AND event_name= '" .$pname. "' ;"  ; 		
            }
            else if ($table == "participants" )
						{	//query ZEPHYR database
							$querycheck="SELECT * FROM ".$table." WHERE p_id='".$id."'  ;"  ;
							$query2 = "DELETE FROM ".$table." WHERE p_id= '".$id."' ;"  ; 		
						}
						
						
					$resultcheck = mysqli_query($mysqli,$querycheck);
					
					if(mysqli_num_rows($resultcheck) == 0)
					{
						echo("<p><br><br> <h2 align='center'> You entered ".$table." &nbsp; , id=".$id." &nbsp; , name=".$pname." </h2><p>")   ;
						mysqli_commit($mysqli) ;
						die("<p><br><br> <h2 align='center'> No such row exists in  &nbsp;".$table." &nbsp; with given details </h2><p>") ;
					}
					
					else
					{
						$result2 = mysqli_query($mysqli , $query2) ;
						if(isset($result2))
						{
							echo("<p><br><br> <h2 align='center'> Data to be deleted from ".$table." &nbsp;  with  id=".$id." &nbsp; , name=".$pname." </h2><p>") ;
							echo("<p><br><br> <h1 align='center'> Successfully deleted entered data from &nbsp;".$table." &nbsp; </h1><p>") ;
							echo($result2) ;
							mysqli_commit($mysqli) ;
						}
					}
					
					mysqli_close($mysqli) ;
				}
				
				
				else 
				{
					die("<p><br><br> <h2 align='center'>Please Enter all the details</h2> </body></html> <p>") ;//exit immediately, no further computations 
				}   
				
				
			} 
			
		?>   <!--end PHP script-->

		
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
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="js/datepicker/jquery-ui.min.js"></script>
    <script src="js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="js/form-validation/jquery.form.min.js"></script>
    <script src="js/form-validation/jquery.validate.min.js"></script>
    <script src="js/form-validation/form-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
   
</body>

</html>