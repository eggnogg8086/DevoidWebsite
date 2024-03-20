<?php 
    session_start();
    $_SESSION['lastPage'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>