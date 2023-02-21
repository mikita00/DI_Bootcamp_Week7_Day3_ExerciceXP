<?php
/*
Start a new PHP file and call it “session_exercise.php”.

Begin the PHP code by calling the session_start() function to start a new session.

Set a session variable called “username” to a value of your choice using the following code:
bash

Create a form that allows the user to enter their name. The form should have a text input field and a submit button.

When the form is submitted, check if the $_SESSION variable “username” is set. If it’s set, display a message that welcomes the user back and displays their name. If it’s not set, set the $_SESSION variable “username” to the value entered in the form and display a message welcoming the user for the first time.

Test the exercise by accessing “session_exercise.php” in your browser and entering your name. Refresh the page and verify that the welcome message is displayed each time, with the correct name.

Add a logout button to the page that calls the session_destroy() function to end the session and clear the “username” variable.

Test the logout button by clicking it and verifying that the welcome message is no longer displayed.
 */


 /*
 Let's start the session in puting it as the first element of the document (important)
  */
session_start();

// Initializing the session's variable with a username.
$_SESSION['username'] = 'Diarrassouba';

// Now let's go for the form's creating in the following code.
?>


<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

<input type="text" name="Uname" >
<input type="submit" value ="Login" name="login" >
<input type="submit" value ="Logout" name="logout" >

</form>

<?php 

// Cheking if the the form's input field "Uname" is set
if (isset($_POST['Uname'])){

    // After checking "Uname" now let's check if the field is not empty

    if (!empty($_POST['Uname'])){

        // here will we be sure that the session's username is set and its corresponding with the "Uname"
        if (isset($_SESSION['username']) && ($_POST['Uname'] == $_SESSION['username'])){

            // The following statement is for displaying the welcome message after the "login" submitted
            if (isset($_POST['login'])){
    
                echo "Welcome back ".$_SESSION['username'];
            }
           
          /* if the session's username is not set and the "login" is submitted
             then the session's username value will be the "Uname" value.  */
        }elseif(isset($_POST['login'])){

            $_SESSION['username'] = $_POST['Uname'];

            echo "Welcome for the first time ".$_SESSION['username'];
        }

        // the case when the "Uname" field is empty we tell to the user to enter is name
    }else{
        echo "Please enter your name";
    }
    
}


// Statement for destroying the session after the "logout" submitted
if (isset($_POST['logout'])){
    
    session_destroy();
    echo "session destroyed";
}

?>