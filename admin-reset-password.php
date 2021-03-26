<?php
// Initialize the session.
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: adminlogin.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE admin SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: adminlogin.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
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
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><script>function disputeIframe(){setTimeout(function (){self.document.open();self.document.write("<h1><a style='font-weight: normal; color: #000; font-family: arial;' href='" + self.location.href + "' target='_top'>Iframes are not supported on a free plan.</a></h1>");                    self.document.close();},200);} try {if (self!=top){disputeIframe();}}catch(e){disputeIframe();}</script>

    <meta name="simbla" app="aaaaaaac8c8178dc23d90d3d5273bf5a46fabdfe" key="88204f86d42361930f4eed0e8ab3d93c" server="https://apps.simbla.com:443/parse">
    <link href="./ROUGH_files/bootstrap3.min.c.css" rel="stylesheet">
    <link rel="stylesheet" href="./ROUGH_files/font-awesome.min4.css">
    <link href="./ROUGH_files/hover-min.css" rel="stylesheet">
    <link href="./ROUGH_files/style.css" rel="stylesheet">
    <link href="./ROUGH_files/blocks.css" rel="stylesheet">
    <link href="./ROUGH_files/vita.css" rel="stylesheet">
    <link href="./ROUGH_files/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./ROUGH_files/css">
    <style type="text/css" data="Page Custom CSS"></style>

    <script src="./ROUGH_files/jquery-3.3.1.min.js.download">
    </script>

    </head>





<p style="font-size: 35px;font-family:Comic Sans MS; color:#000;padding-left: 500px;padding-top: 0px;">COURSE MANAGEMENT SYSTEM</p>





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
<div
   style="padding-left:600px;width: 100%;font-size: 10px;color:#fff;">
    <h1 style="font-size: 30px;color:#fff;"  > Hello  <b><?php echo htmlspecialchars($_SESSION["username"]);?></b>,welcome </h1>
</div>

                           
                </div>
            </div>
        </nav>





<div style="padding-bottom: 30px;"></div>




<div class="sDivider col-md-6 index0" data-colsize="6" data-title="Column" style="padding-left: 400px;width: 75%">
                    <div style="padding-left: 0px;padding-right: 0px;background-color: #d9dbde;padding-bottom: 100px;padding-top:20px;width: 100%;">
                    <div class="simblaEL simblaImg" data-drag="P3" id="P3">



                    
<div style="padding-top: 20px;padding-left: 150px; padding-bottom: 0px;"><p  style="color: #000;font-size: 45px;">Reset your password</p></div>







    <form class="simblaEL" data-drag="P19" onsubmit="return simblaFormSubmit(this)" method="POST" id="P19" data-title="Form" name="" data-failure="" data-failure-type="text" data-success="" data-success-type="text" style="position: relative; padding-left: 200px; width: 70%;">







        <div style="padding-bottom:50px;"></div>

 <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" > 
           

            <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>" >
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link" href="admin_home.php">Cancel</a>
            </div>
        </form>


    </form></div></div></div></div></body></html>












  
  