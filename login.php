<?php
session_start();
$_SESSION["user"] = "lelelelel";
$_SESSION["users"] = "fffff";
?>
<?php
require 'connection.php';
// if(!empty($_SESSION["id"])){
//   header("Location: index.php");
// }

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $result = mysqli_query($con, "SELECT * FROM users WHERE  username = '$user_name'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["loggedin"] = true;
      $_SESSION["username"] = $user_name;
      $_SESSION["user_id"]=$row["user_id"];
      //echo "<h2>" . $_SESSION["username"] . "</h2>";
      echo("<script>alert('hogaya success login!!!!')</script>");
      echo("<script>window.location = 'owner1.php';</script>");
      //header("Location: owner1.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
}
    else{
    echo
    "<script> alert('User Not Registered'); </script>";
    }

    // mysqli_query($con,$query);
    // header("Location:login.php");
    // die;
    // else{
    //     echo"Enter valid information";
    // }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback: FarmRentals</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/83b33407c6.js" crossorigin="anonymous"></script>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="help.css">
    <link rel="stylesheet" href="feedback.css">
    <script src="help.js" defer></script>
    <script src="log.js" defer></script>
</head>

<body>
    <div class="top1">
        <div class="item1">
            <img src="gallery/footerBg.png" alt="satyameva jayate" height="40cm">
        </div>
        <div class="item1">
            <p class="f1">Ministry of Skill Development and Entrepreneurship</p>
        </div>
    </div>
    <div class="top2">
        <div class="top3">
            <div class="item2">
                <img src="gallery/gggg-1@2x.png" alt="logo" height="60cm">
            </div>
            <div class="item2">
                <p> Farm</p>
                <p>Rentals</p>
            </div>
        </div>
        <div class="item2">
            <nav>
                <ul class="navbar">
                    <li class="lii"><a class="h" href="index.html">Home</a></li>
                    <li class="lii"><a class="h" href="Owner1.html">Owner</a></li>
                    <li class="lii"><a class="h" href="Customer1.html">Customer</a></li>
                    <li class="lii"><a class="h" href="help.html">Help</a></li>
                </ul>
            </nav>
        </div>
        <div class="item2">
            <a href="Sign_log/index.html" class="left-part9 dabba6"><button class="ba">Login</button></a>
            <a href="Sign_log/index.html" class="left-part9 dabba6"><button class="bb">Sign Up</button></a>
        </div>
    </div>
    <div class="help-top">
        <div class="help-top2"></div>
        <div class="fd12"></div>
        <h1 class="help-top21">Log in Form</h1>
        <div class="fd1">
            <form method="post" class="fd2" id="forget_password">
                <label for="sign_name" class="fd3">Username</label><br>
                <input type="text" id="sign_name"  name="user_name" class="fd4"><br>
                <label for="sign_pass" class="fd3">Password</label><br>
                <input type="password" id="sign_pass" name="password" class="fd4">
                <div class="fd13">
                    <div><input type="checkbox" name="" id="" class="fd14">Remember me</div>
                    <div class="fd15" id="fg_button">Forgot Password?</div>
                </div>
                <div class="fd6"><button class="fd5">Log in</button>
            </div>
            <div class="fd6">
                <p class="register" style="font-size:1.25rem; margin:1rem 0">Not a member?  <a href="signup.php">Signup</a></p>
            </div>
            </form>
            <!-- <form action="" class="fd16" id="reset_password">
                <label for="valid_mail" class="fd3">Email Id</label><br>
                <input type="email" id="valid_mail" class="fd4" required><br>
                <label for="new_password" class="fd3">New password</label><br>
                <input type="text" id="new_password" class="fd4" required><br>
                <label for="confirm_password" class="fd3">Confirm password</label><br>
                <input type="password" id="confirm_password" class="fd4" required>
                <div class="fd6"><button class="fd5" id="reset_password2">Reset Password</button></div>
            </form> -->
        </div>
        <div class="help-top320">
            <div class="help-top319">
                <h1 class="help-top311">Still need help?</h1>
                <div><a href="mailto:sam05122003@gmail.com"><button class="help-top321 help-top316">Contact Us</button></a></div>
            </div>
        </div>
        <div class="dabba5">
            <div class="box1">
                <div class="item7"><a href="index.html" class="left-part9 dabba6">
                    <img src="gallery/gggg-1@2x.png" alt="logo" height="130cm"></a>
                </div>
                <div class="item7"><a href="index.html" class="left-part9 dabba6">
                    <p class="tp4" style="margin-top: 30px;"> Farm</p>
                    <p class="tp4">Rentals</p></a>
                </div>
            </div></a>
            <div class="box2">
                <div class="box21">
                    <div>
                        <p class="tp6"><b>Menu</b></p>
                        <p class="tp6">Home</p>
                        <p class="tp6">Market</p>
                    </div>
                    <div>
                        <p class="tp6"><b>Support Centre</b></p>
                        <a href="help.html" class="left-part9 dabba6"><p class="tp6">Help Centre</p></a>
                        <a href="feedback.html" class="left-part9 dabba6"><p class="tp6">Feedback</p></a>
                        <a href="faq.html" class="left-part9 dabba6"><p class="tp6">FAQS</p></a>
                    </div>
                </div>
                <div style="text-align:center;">Please provide us feedback <a href="feedback.html">Here</a></div>
            </div>
            <div class="box3">
                <div class="tp6">Give us a follow on social media</div>
                <div class="box31">
                    <div> <a href="https://www.instagram.com"><img src="gallery/instagram.png" alt="" height="30cm"></a> </div>
                    <div><a href="https://www.facebook.com"><img src="gallery/facebook-circular-logo.png" alt="" height="30cm"></a></div>
                    <div><a href="https://www.twitter.com"><img src="gallery/twitter.png" alt="" height="30cm"></a></div>
                </div>
                <div style="font-size: 18px;">Made by: Group No.4, CSE, 2020-24, GCOEN</div>
            </div>
            <div class="box4">
                <div><img src="gallery/footerBg.png" alt="satyameva jayate" height="150cm"></div>
                <div class="tp7">Ministry of Skill Development and Entrepreneurship</div>
            </div>
        </div>
    </div>
</body>

</html>