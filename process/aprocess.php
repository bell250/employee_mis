<?php

require_once ('dbh.php');

$email = $_POST['mailuid'];
$password = $_POST['pwd'];
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["mailuid"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["mailuid"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["pwd"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["pwd"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT * from `alogin` WHERE email = ? ";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                mysqli_stmt_bind_result($stmt, $username,$passwords,$id);
                    if(mysqli_stmt_fetch($stmt)){
                        // if(password_verify($password, $password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["password"] = $id;
                            $_SESSION["username"] = $username;

                             header("Location: ..//aloginwel.php");
}                      
                             else{
                            // Password is not valid, display a generic error message
                            echo  "Invalid username or password.";
                        }
                    
                } else{
                    // Username doesn't exist, display a generic error message
                    echo "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
   echo"" . mysqli_error($conn);
    // Close connection
    mysqli_close($conn);
}
?>


