<?php
include "linc.php";
if (!isset($_SESSION['a']))
 {
  header('Location: adminlogin.php');
 }

// Query to fetch all events
$sql = "SELECT * FROM events";
$result = $mysqli->query($sql);

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
    <link rel="shortcut icon" type="image/x-icon" href="img/zephyr-logo.JPG">   <!-- icon shown on top of heading of admin page -->
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
                                <li><a title="Edit Event" href="edit-Eventform.php"><span class="mini-sub-pro">Edit Event</span></a></li>
                                <li><a title="Delete Event" href="delete-details.php"><span class="mini-sub-pro">Delete Event</span></a></li>
                            </ul>
                        </li>
					
                        <li>
                            <a class="has-arrow" href="all-Participants.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Participants</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Participants" href="all-Participants.php"><span class="mini-sub-pro">All Participants</span></a></li>
								<li><a title="Participants Required Details" href="Participants-req-details.php"><span class="mini-sub-pro"> Participants <br>Required Details </span></a></li>
                                <li><a title="Delete Participant" href="delete-details.php"> <span class="mini-sub-pro">Delete Participant </span></a></li>
                            </ul>
                        </li>
						
						<li>
                            <a class="has-arrow" href="all-Volunteers.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Volunteers</span></a>
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


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Event Details</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    h2 {
        text-align: center;
        color: #007bff;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px auto;
        margin-left:15%;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #007bff;
        color: #fff;
        margin-left
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #ddd;
    }
    .actions {
        text-align: center;
    }
    .actions a {
        color: #007bff;
        text-decoration: none;
        margin-right: 5px;
    }
    .actions a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>

<h2>Event Details</h2>

<table>
    <tr>
        <th>Event ID</th>
        <th>Event Name</th>
        <th>Type</th>
        <th>Category</th>
        <th>Begin Date</th>
        <th>End Date</th>
        <th>Begin Time</th>
        <th>End Time</th>
        <th>First Prize</th>
        <th>Second Prize</th>
        <th>Third Prize</th>
        <th>Venue ID</th>
        <th class="actions">Actions</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["event_id"] . "</td>";
            echo "<td>" . $row["event_name"] . "</td>";
            echo "<td>" . $row["type"] . "</td>";
            echo "<td>" . $row["category"] . "</td>";
            echo "<td>" . $row["begin_date"] . "</td>";
            echo "<td>" . $row["end_date"] . "</td>";
            echo "<td>" . $row["begin_time"] . "</td>";
            echo "<td>" . $row["end_time"] . "</td>";
            echo "<td>" . $row["first_prize"] . "</td>";
            echo "<td>" . $row["second_prize"] . "</td>";
            echo "<td>" . $row["third_prize"] . "</td>";
            echo "<td>" . $row["venue_id"] . "</td>";
            echo "<td class='actions'><a href='delete_event.php?event_id=" . $row["event_id"] . "'>Delete</a> | <a href='update_event.php?event_id=" . $row["event_id"] . "'>Update</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='13'>No events found</td></tr>";
    }
    ?>
</table>
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

<?php
// Close connection
$mysqli->close();
?>
