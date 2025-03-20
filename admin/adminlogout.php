<?php
@session_start();
if (isset($_SESSION['a']))
{
    if(session_destroy())
    {   
        $URL="http://localhost/front/mainpage.php";
          echo "<script>location.href='$URL'</script>";
    }
}
?>