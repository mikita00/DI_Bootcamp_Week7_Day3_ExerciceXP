<?php 
/*
Start a PHP session

Set Session variables using PHP global variable.

Display the variables on the page
 */


/*
Starting a session
 */
session_start();

// Initializing the session's variables to a user firstname, a user lastname and user age
$_SESSION['userFirstName'] = "Diarrassouba";
$_SESSION['userLastName'] = "Vazoumana";
$_SESSION['userAge'] = 27;

// Now displaying messages wich are about all the session's variables values. 
echo "The first session variable is my firstname: ".$_SESSION['userFirstName']."<br><br>";
echo "The second session variable is my lastname: ".$_SESSION['userLastName']."<br><br>";
echo "The third session variable is my Age: ".$_SESSION['userFirstName']."<br>";
?>