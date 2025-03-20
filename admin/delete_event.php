<?php
include "linc.php";

// Check if event_id parameter is set
if(isset($_GET['event_id'])) {
    $event_id = $_GET['event_id'];
    
    // Delete event from the database
    $sql = "DELETE FROM events WHERE event_id = $event_id";
    if ($mysqli->query($sql) === TRUE) {
        // Redirect to all-Events.php after successful deletion
        header("Location: all-Events.php");
        exit();
    } else {
        echo "Error deleting event: " . $mysqli->error;
    }
} else {
    echo "Event ID is missing.";
}

// Close mysqli connection
$mysqli->close();
?>
