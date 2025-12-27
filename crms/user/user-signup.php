
<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $mobno=$_POST['mobilenumber'];
    $stuid=$_POST['stuid'];
    $gender=$_POST['gender'];
    $password=md5($_POST['password']);
   


    $ret=mysqli_query($con, "select Email from tbluser where Email='$email' || MobileNumber='$mobno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
$msg="This email or Contact Number already associated with another account";
    }
    else{
    $query=mysqli_query($con, "insert into tbluser(FullName,Email,MobileNumber,StudentID,Gender,Password) value('$fullname','$email','$mobno','$stuid','$gender','$password')");
    if ($query) {
        // Send registration email
        $to = $email;
        $subject = "Registration Successful";
        $message = "Dear $fullname,\n\nThank you for choosing Career Hunt ! \n\n We're thrilled to have you join our community and trust in us.\n\nYour successful registration marks the beginning of an exciting journey, and we're here to ensure that it's smooth and rewarding for you. Whether it's our [services/products] or support, we're committed to making your experience exceptional.
If you have any questions or need assistance, don’t hesitate to reach out to us at  [ samarthdev07@gmail.com ] or [+91 9380589321]. We’d love to hear from you!\n\n
Once again, thank you for being a part of Career Hunt.\n\nBest Regards,\nCareer Hunt Team";
        $headers = "From: noreplycareerhunt@gmail.com"; // Change this to your desired sender email
        
        if(mail($to, $subject, $message, $headers)) {
            $msg = "You have successfully registered. A confirmation email has been sent to your email address.";
            header("Location:login.php");
        } else {
            $msg = "You have successfully registered, but we couldn't send a confirmation email.";
            header("Location:login.php");

        }
    } else {
        $msg = "Something Went Wrong. Please try again";
    }
}
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    
    <title>Campus Recruitment Management System-Sign Up Page</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.repeatpassword.value)
{
alert('Password and Repeat Password field does not match');
document.signup.repeatpassword.focus();
return false;
}
return true;
} 

</script>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">

        </div>
    </div>
</div>
<div id="app">
<main>
    <div id="primary" class="blue4  height-full responsive-phone">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/img/icon/Register-Trading-Company-in-Singapore.jpg" alt="" style="padding-top:25%;">
                </div>
                <div class="col-lg-6 p-t-100">
                    <div class="text-white">
                        <h1>User | Welcome Back</h1>
                        <p class="s-18 p-t-b-20 font-weight-lighter">Welcome back to CAREER HUNT</p>
                    </div>
                   <form  action="" name="signup" method="post" onsubmit="return checkpass();" enctype="multipart/form-data">
                    <p style="font-size:16px; color:red align:center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group has-icon"><i class="icon-user-o"></i>
<input type="text" class="form-control form-control-lg no-b" name="fullname" id="fullname" placeholder="Full Name" required="true">
                                </div>
                            </div>
   

                               <div class="col-lg-12">
                                <div class="form-group has-icon"><i class="icon-mail-envelope-open"></i>
<input type="email" class="form-control form-control-lg no-b" name="email" id="email" placeholder="Enter your email" required="true">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group has-icon"><i class="icon-mobile"></i>
                                    <input type="text" name="mobilenumber" required="true" placeholder="Enter Your Mobile Number" maxlength="10" pattern="[0-9]+" class="form-control form-control-lg no-b">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group has-icon"><i class="icon-file"></i>
                                    <input type="text" name="stuid" required="true" placeholder="Enter Student ID" class="form-control form-control-lg no-b">
                                </div>
                            </div>
                           <div class="col-lg-12">
              <label class="control-label" style="color: white; font-weight: 800px; font-size: large;"> Gender: </label>
              <input type="radio" name="gender" id="gender" value="Male"><strong style="color: white">Male</strong>
              <input type="radio" name="gender" id="gender" value="Female"><strong style="color: white">Female</strong>
            
              
              
             
            </div>

                            <div class="col-lg-12">
                                <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                    <input type="password" name="password" required="true" class="form-control form-control-lg no-b" minlength="8" maxlength="16" 
         pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                           placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                    <input type="password" name="repeatpassword" required="true" class="form-control form-control-lg no-b"
                                           placeholder="Repeat Password">
                                </div>
                            </div>
                           
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-success btn-lg btn-block" name="submit" value="Sign Up">
            <p class="forget-pass text-white">
    <a href="login.php"> Already Have an Account ? </a></p>
                                <p class="forget-pass text-white"><a href="../index.php"> Back to Home!!</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #primary -->
</main>

<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>
</body>
</html>