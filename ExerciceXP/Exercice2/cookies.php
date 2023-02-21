<?php

/*Set a cookie to store login detail

Write a program to store the username in cookie and check whether the user have successfully login or not.
 
 */


 // let's set the cookie with some parameters.
setcookie("username","Diarrassouba", time() + 3600,'/');

// the following coe is the form's creating
?>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

<input type="text" name="username">
<input type="submit" value="Login">
</form>

<?php

// Checking if the username's field is set .
if (isset($_POST['username'])) {

    // Also checking if the username's field is not empty 
    if (!empty($_POST['username'])){

        // If the username's field is not empty and the the cookie is set, its corresponding will be checked. 
        if(isset($_COOKIE['username']) && ($_POST['username'] == $_COOKIE['username']) ){
            // this is the message when all the statement is verified
            echo $_POST['username']." you have successful login";


        // If only one condition is not verified among the previous statement, the following code will be executed. 
        }else{
            
            echo $_POST['username']." is unknown: please enter a corresponding username";
        }


    // Case when the username's field is empty.
    }else{
        echo "please enter your name";
    }
}

?>