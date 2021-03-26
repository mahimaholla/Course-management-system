


 
<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$c_name = $sp_id ="";
$c_name_err =$sp_id_err= "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate c_name
    if(empty(trim($_POST["c_name"]))){
        $c_name_err = "Please enter a c_name.";
    } else{
        // Prepare a select statement
        $sql = "SELECT c_name FROM courses WHERE c_name = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_c_name);
            
            // Set parameters
            $param_c_name = trim($_POST["c_name"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) != 1){
                    
                    $c_name = trim($_POST["c_name"]);
                   // $c_name_err = "This c_name is already taken.";
                } else{

                    $c_name_err = "This c_name is already taken.";
                  //  $c_name = trim($_POST["c_name"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }








if(empty(trim($_POST["sp_id"]))){
        $sp_id_err = "Please enter a sp_id.";
    } else{
        // Prepare a select statement
        $sql = "SELECT sp_id FROM courses WHERE sp_id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $sp_id);
           echo $sp_id;
            // Set parameters
            $param_sp_id = trim($_POST["sp_id"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){

                   // $sp_id = trim($_POST["sp_id"]);
                    $sp_id_err = "This sp_id is already taken.";
                } else{

                    // $sp_id_err = "This sp_id is already taken.";
                    $sp_id = trim($_POST["sp_id"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }









    
    // Validate password
 
    
    // Validate confirm password
  
    
    // Check input errors before inserting in database
    if(empty($c_name_err)&&empty($sp_id_err)){
        
        
        // Prepare an insert statement
        $sql = "UPDATE courses SET c_name=? where c_id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss",$param_sp_id,$param_c_name);
            
            // Set parameters

           $param_sp_id = $sp_id;
            $param_c_name = $c_name;
          
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: admin-editing-courses.php");
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

   



    <form class="simblaEL" data-drag="P15" onsubmit="return simblaFormSubmit(this)" method="POST" id="P15" data-title="Form" name="" data-failure="" data-failure-type="text" data-success="" data-success-type="text"   style="width: 55%; padding-left: 500px;

padding-top: 50px;"> 
    <div class="wrapper">
    <form class="simblaEL" data-drag="P15" onsubmit="return simblaFormSubmit(this)" method="POST" id="P15" data-title="Form" name="" data-failure="" data-failure-type="text" data-success="" data-success-type="text"   style="width: 55%; padding-left: 500px;

padding-top: 50px;">
<div class="wrapper">
        <h2 style="padding-bottom: 20px;">update stream name</h2>




<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
               



<div class="form-group <?php echo (!empty($c_name_err)) ? 'has-error' : ''; ?>">
                <label>course id</label>
                <input type="text" name="c_name" class="form-control" value="<?php echo $c_name; ?>">
                <span class="help-block"><?php echo $c_name_err; ?></span>
            </div> 


            <div class="form-group <?php echo (!empty($sp_id_err)) ? 'has-error' : ''; ?>">
                <label>course name</label>
                <input type="text" name="sp_id" class="form-control" value="<?php echo $sp_id; ?>">
                <span class="help-block"><?php echo $sp_id_err; ?></span>
            </div>


           
           
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
           
        </form>

</div>
</form>



<div class="form-group"  style="padding-top: 10px;padding-left: 400px;"        >
    <a class="btn btn-link" href="admin-editing-courses.php">cancle</a>
            </div>

</body></html>