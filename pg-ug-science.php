 <?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: userlogin.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>


   

     



    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>function disputeIframe(){setTimeout(function (){self.document.open();self.document.write("<h1><a style='font-weight: normal; color: #000; font-family: arial;' href='" + self.location.href + "' target='_top'>Iframes are not supported on a free plan.</a></h1>");                    self.document.close();},200);} try {if (self!=top){disputeIframe();}}catch(e){disputeIframe();}
</script>
<title>pg-ug-science</title>
<meta name="simbla" app="aaaaaaac8c8178dc23d90d3d5273bf5a46fabdfe" key="88204f86d42361930f4eed0e8ab3d93c" server="https://apps.simbla.com:443/parse">
<link href="./SIGNUP_files/bootstrap3.min.c.css" rel="stylesheet">
<link rel="stylesheet" href="./SIGNUP_files/font-awesome.min4.css">
<link href="./SIGNUP_files/hover-min.css" rel="stylesheet"><link href="./SIGNUP_files/style.css" rel="stylesheet">
<link href="./SIGNUP_files/blocks.css" rel="stylesheet">
<link href="./SIGNUP_files/vita.css" rel="stylesheet"><link href="./SIGNUP_files/custom.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="./SIGNUP_files/css"><style type="text/css" data="Page Custom CSS"></style><script src="./SIGNUP_files/jquery-3.3.1.min.js.download"></script><meta name="page-source" site="//sites.simbla.com/a8892f23-1512-4ac4-e5ab-5b276b5aaf6c" page="signup" site-id="5dbc35c84186c60012d7572d" page-id="5dbc40f62818fa00126849f6" master-page-id=""><link rel="canonical" href="SIGNUP.php"><meta name="generator" content="Simbla.com - Websites and online Databases">


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

                            <ul class="nav navbar-nav">




                                <li style="padding-left: 970px;">
                                    <a style="background-color:##116149;
               border:1px; border-style:groove; border-color: #fff; color: #fff; padding: 8px;" class="" href="user-reset-password.php">
                                <span style="color: #fff;">RESET PASSWORD</span>
                            </a>
                        </li>
                        <li style="padding-left: 10px;">
                            <a style="background-color:#0BAE7C;
               border:1px; border-style:groove; border-color: #fff; color: #fff; padding: 8px;" class="" href="blooper_AFTR_login.php">
                                <span style="color: #fff;" >HOME</span>
                            </a>
                        </li>

                        <li  style="padding-left: 10px;" ><a style="background-color:#0BAE7C;
               border:1px; border-style:groove; border-color: #fff; color: #fff; padding: 8px;" class="" href="logout.php"><span  style="color: #fff;" >LOGOUT</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
                                




<div class="sDivider col-md-6 index0" data-colsize="6" data-title="Column" style="padding-left: 400px;width: 75%">
                    <div style="padding-left: 0px;padding-right: 0px;background-color: #d9dbde;padding-bottom: 20px;padding-top:20px;width: 100%;">
                    <div class="simblaEL simblaImg" data-drag="P3" id="P3">






           <div style="padding-top: 20px;padding-left: 100px; padding-bottom: 0px;"><p  style="color: #000;font-size: 40px;">Choose one Specification</p></div>         






<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><script>function disputeIframe(){setTimeout(function (){self.document.open();self.document.write("<h1><a style='font-weight: normal; color: #000; font-family: arial;' href='" + self.location.href + "' target='_top'>Iframes are not supported on a free plan.</a></h1>");                    self.document.close();},200);} try {if (self!=top){disputeIframe();}}catch(e){disputeIframe();}</script><meta name="simbla" app="aaaaaaac8c8178dc23d90d3d5273bf5a46fabdfe" key="88204f86d42361930f4eed0e8ab3d93c" server="https://apps.simbla.com:443/parse"><link href="./scicomart_files/bootstrap3.min.c.css" rel="stylesheet"><link rel="stylesheet" href="./scicomart_files/font-awesome.min4.css"><link href="./scicomart_files/hover-min.css" rel="stylesheet"><link href="./scicomart_files/style.css" rel="stylesheet"><link href="./scicomart_files/blocks.css" rel="stylesheet"><link href="./scicomart_files/vita.css" rel="stylesheet"><link href="./scicomart_files/custom.css" rel="stylesheet"><style type="text/css" data="Page Custom CSS"></style><script src="./scicomart_files/jquery-3.3.1.min.js.download"></script><meta name="page-source" site="//sites.simbla.com/a8892f23-1512-4ac4-e5ab-5b276b5aaf6c" page="userstream" site-id="5dbc35c84186c60012d7572d" page-id="5dcd5df47adcf700129e2150" master-page-id=""><link rel="canonical" href="https://sites.simbla.com/a8892f23-1512-4ac4-e5ab-5b276b5aaf6c/userstream"><meta name="generator" content="Simbla.com - Websites and online Databases"></head><body data-spy="scroll" data-target=".navbar-collapse" class="simbla-page static-page "><div id="windowDiv"><div id="MarginsTop" style="height: 0px;" class="row"></div><div id="bodyContainer" style="width:100%"><div class="simblaEL containerHolder" data-drag="P1" id="P1"><div class="container center-bg-image" data-title="Container"><div class="row simblaEL rDivider" data-drag="P2" id="P2" data-title="Row" style="position: relative; padding-top: 21px;"><div class="sDivider col-md-4 index0" data-colsize="4" data-title="Column"></div><div class="sDivider col-md-4 index1" data-colsize="4" data-title="Column">


    <a type="submit" class="simblaEL btn btn-lg btn-block" data-drag="P4" id="P4" href="ug-science.php">
<?php  

 require_once "config.php";

 $sql = "SELECT sp_name FROM  specification where sp_id=11";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";;
                echo "<td>" . $row['sp_name'] . "</td>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>
    </a>

</div><div class="sDivider col-md-4 index2" data-colsize="4" data-title="Column"></div></div><div class="row simblaEL rDivider" data-drag="P5" id="P5" data-title="Row" style="position: relative; padding-top: 30px;"><div class="sDivider col-md-4 index0" data-colsize="4" data-title="Column"></div><div class="sDivider col-md-4 index1" data-colsize="4" data-title="Column">

    <a type="submit" class="simblaEL btn btn-lg btn-block" data-drag="P7" id="P7" href="pg-science.php">
        <?php  

 require_once "config.php";

 $sql = "SELECT sp_name FROM  specification where sp_id=12";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";;
                echo "<td>" . $row['sp_name'] . "</td>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
    </a>

</div><div class="sDivider col-md-4 index2" data-colsize="4" data-title="Column"></div>



<div class="form-group"  style="padding-top: 100px;padding-left: 500px;"        >
    <a class="btn btn-link" href="user_home.php">back</a>
            </div>

</div>



</div>


</div></div>





</div>



    
</body>
</html>