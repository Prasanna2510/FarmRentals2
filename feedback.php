<?php
session_start();
include("connection.php");
include("functions.php");
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    //echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
} else {
    
    // header("Location:login.php");
    // echo "Please log in first to see this page.";
    echo("<script>alert('Login First, My friend')</script>");
    echo("<script>window.location = 'login.php';</script>");
}
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $fname=$_POST['name'];
    $phone=$_POST['phone'];
    $description=$_POST['desc'];
    $email=$_SESSION["email"];
    
    $user_id=$_SESSION["user_id"];
    $feedback_id=random_num(8);
    $query3="insert into feedback (fname,phone,description,email,user_id,feedback_id) values('$fname','$phone','$description','$email','$user_id','$feedback_id')";
    mysqli_query($con,$query3);
    echo("<script>alert('Thank You for your valuable feedback! Click ok to go to dashboard')</script>");
        echo("<script>window.location = 'Owner1.php';</script>");
        //header("Location:login.php");
        die;
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
</head>

<body>
    <!-- <?php 
    echo "<h1>" . $_SESSION["email"] . "</h1>"
    ?> -->
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
        <h1 class="help-top21">Feedback Form</h1>
        <div class="fd1">
            <form  method="post" class="fd2">
                <label for="fd_name" class="fd3">Name</label><br>
                <input type="text" id="fd_name" class="fd4" name="name"><br>
                <label for="fd_pn" class="fd3">Phone number</label><br>
                <input type="number" id="fd_pn" class="fd4" name="phone"><br>
                <label for="fd_des" class="fd3">Description</label><br>
                <textarea name="desc" id="fd_des" cols="30" rows="10" class="fd7"></textarea>
                <div class="fd6"><button class="fd5">SUBMIT</button></div>
            </form>
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