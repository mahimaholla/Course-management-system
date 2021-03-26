






 
    <?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: adminlogin.php");
    exit;
}
?>
 <?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username ="";
$username_err =  "";
 
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
                 $username = trim($_POST["username"]);

                } else{
                    $username_err = "invalid user name";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    
    
    
    // Check input errors before inserting in database
    if(empty($username_err)){
        
        // Prepare an insert statement
        $sql = "DELETE FROM users WHERE username=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;// Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page

                header("location: admin-editing-user.php");

                echo "delete successful";
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

                               
                    </ul>
                </div>
            </div>
        </nav>





<body>

   






<div class="sDivider col-md-6 index0" data-colsize="6" data-title="Column" style="padding-left: 400px;width: 70%">
                    <div style="padding-left: 0px;padding-right: 0px;background-color: #d9dbde;padding-bottom: 20px;padding-top:10px;width: 100%;">
                    <div class="simblaEL simblaImg" data-drag="P3" id="P3">

 <h2 style="padding-bottom: 0px;font-size:27px;padding-left: 70px;">Enter user name to be deleted</h2>
    <div class="wrapper">
    <form class="simblaEL" data-drag="P15" onsubmit="return simblaFormSubmit(this)" method="POST" id="P15" data-title="Form" name="" data-failure="" data-failure-type="text" data-success="" data-success-type="text"   style="width: 90%; padding-left: 90px;

padding-top: 30px;">
       




<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
               



        
           <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    


           
           
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
           
        </form>

</div>
</form>



<div class="form-group"  style="padding-top: 10px;padding-left: 400px;"        >
    <a class="btn btn-link" href="admin-editing-user.php">cancel</a>
            </div>

</body></html>