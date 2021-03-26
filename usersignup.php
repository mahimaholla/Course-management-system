<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $email = $password = $confirm_password = "";
$username_err =$email_err= $password = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }








if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }









    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err)&&empty($email_err)&& empty($password_err) && empty($confirm_password_err)){
        echo "here";
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username,email,password) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss",$param_username,$param_email,$param_password);
            
            // Set parameters

           
            $param_username = $username;
            $param_email =$email;
             
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: userlogin.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>


<!DOCTYPE html>
<!-- saved from url=(0068)https://sites.simbla.com/a8892f23-1512-4ac4-e5ab-5b276b5aaf6c/signup -->
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><script>function disputeIframe(){setTimeout(function (){self.document.open();self.document.write("<h1><a style='font-weight: normal; color: #000; font-family: arial;' href='" + self.location.href + "' target='_top'>Iframes are not supported on a free plan.</a></h1>");                    self.document.close();},200);} try {if (self!=top){disputeIframe();}}catch(e){disputeIframe();}</script><meta name="simbla" app="aaaaaaac8c8178dc23d90d3d5273bf5a46fabdfe" key="88204f86d42361930f4eed0e8ab3d93c" server="https://apps.simbla.com:443/parse"><link href="./adminlogin_files/bootstrap3.min.c.css" rel="stylesheet"><link rel="stylesheet" href="./adminlogin_files/font-awesome.min4.css"><link href="./adminlogin_files/hover-min.css" rel="stylesheet"><link href="./adminlogin_files/style.css" rel="stylesheet"><link href="./adminlogin_files/blocks.css" rel="stylesheet"><link href="./adminlogin_files/vita.css" rel="stylesheet"><link href="./adminlogin_files/custom.css" rel="stylesheet"><style type="text/css" data="Page Custom CSS"></style><script src="./adminlogin_files/jquery-3.3.1.min.js.download"></script><meta name="page-source" site="//sites.simbla.com/a8892f23-1512-4ac4-e5ab-5b276b5aaf6c" page="adminlogin" site-id="5dbc35c84186c60012d7572d" page-id="5dc97ac47adcf700129df5a2" master-page-id=""><link rel="canonical" href="admin.html"><meta name="generator" content="Simbla.com - Websites and online Databases"></head>
















<div style="padding-top: 20px;"></div>











<nav class="simblaEL menuHolder2 navbar navbar-default" data-drag="P30" id="P30" data-menu-id="5dbd63692818fa0012684ef9" style="position: relative; width: 100%;background-color: #0BAE7C;padding-top: 10px;padding-bottom: 10px;padding-left: 13px;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="[data-drag=&quot;P30&quot;] .navbar-collapse">
                            <span>
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span></button>
                        </div>
                        <div class="collapse navbar-collapse">


                            <ul class="nav navbar-nav">


 <p style="font-size: 35px;font-family:Comic Sans MS; color:#fff;padding-left: 500px;padding-top: 0px;">COURSE MANAGEMENT SYSTEM</p>

                                <li style="padding-left: 1100px;">
                                    <a style="background-color:##116149;
               border:1px; border-style:groove; border-color: #fff; color: #fff; padding: 8px;" class="" href="home.html">
                                <span style="color: #fff;">HOME</span>
                            </a>
                        </li>
                        <li style="padding-left: 10px;">
                            <a style="background-color:#0BAE7C;
               border:1px; border-style:groove; border-color: #fff; color: #fff; padding: 8px;" class="" href="userlogin.php">
                                <span style="color: #fff;" >LOGIN</span>
                            </a>
                        </li>

                        <li  style="padding-left: 10px;" ><a style="background-color:#0BAE7C;
               border:1px; border-style:groove; border-color: #fff; color: #fff; padding: 8px;" class="" href="adminlogin.php"><span  style="color: #fff;" >ADMIN LOGIN</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>





<body>

   

    <div class="wrapper">
    <form class="simblaEL" data-drag="P15" onsubmit="return simblaFormSubmit(this)" method="POST" id="P15" data-title="Form" name="" data-failure="" data-failure-type="text" data-success="" data-success-type="text"   style="width: 100%; padding-left: 500px;

padding-top: 50px;">
<div class="wrapper">


<div class="sDivider col-md-6 index0" data-colsize="6" data-title="Column">
                    <div style="padding-left: 20px;padding-right: 20px;background-color: #d9dbde;padding-bottom: 20px;padding-top:20px;">
                    <div class="simblaEL simblaImg" data-drag="P3" id="P3">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    


            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="userlogin.php">Login here</a>.</p>
        </form>

</div>
</form>
</body></html>





























