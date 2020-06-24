#File:        logout.php
#Purpose:     Ending a session in order to allow the user to log out
#Author:      Artem Yakupov
#Date:        10 May, 2020
#Dependency:  ------------
<?php
session_start();
session_destroy();
// Redirect to the login page:
header('Location: index.php');
?>