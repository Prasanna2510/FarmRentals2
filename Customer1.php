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
$hehe=$_SESSION["user_id"];
$query2="select * from dash_boardd ";
$query3="select * from users where user_id=$hehe ";
$result1=mysqli_query($con,$query2);
$result2=mysqli_query($con,$query3);
$numrow=mysqli_num_rows($result1);
$row2=mysqli_fetch_assoc($result2)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Equipments: FarmRentals</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/83b33407c6.js" crossorigin="anonymous"></script>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Owner.css">
    <link rel="stylesheet" href="Customer.css?v=<?php echo time();?>">
    <script src="Customer.js?v=<?php echo time();?>" defer></script>
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
                    <li class="lii"><a class="h" href="Owner1.php">Owner</a></li>
                    <li class="lii"><a class="h" href="Customer1.php">Customer</a></li>
                    <li class="lii"><a class="h" href="help.html">Help</a></li>
                </ul>
            </nav>
        </div>
        <!-- <div class="item2">
            <a href="Sign_log/index.html" class="left-part9 dabba6"><button class="ba">Login</button></a>
            <a href="Sign_log/index.html" class="left-part9 dabba6"><button class="bb">Sign Up</button></a>
        </div> -->
    </div>
    <div class="left-part31">
        <div class="left-part28">
            <div><img class="left-part29" src="gallery/profile-user.png" alt=""></div>
            <div style="margin:.5rem">Sachin Chaturvedi,</div>
        </div>
        <div class="left-part32">
            <button class="left-part30 left-part33">
                <a href="Customer1.html" class="left-part9" style="color: white">
                    <div style="width:100%;">All Equipments</div>
                </a>
            </button>
            <button class="left-part30 left-part34">
                <a href="Customer2.html" class="left-part9" style="color: white">
                    <div style="width:100%;">Booking Details</div>
                </a>
            </button>
        </div>
    </div>
    <div class="left-part">
        <div class="left-part1">
            <div class="left-part2">
                <h1 class="left-part3">Product Filters</h1>
            </div>
            <div class="left-part4">
                <div class="right-part1">
                    <label class="right-part2" for="eq-type-rp">Equipment Type:</label>
                    <select name="eq-type-rp" id="eq-type-rp" class="right-part3">
                        <option value="" class="right-part4">Select equipment type</option>
                    </select>
                </div>
                <div class="right-part1">
                    <label class="right-part2" for="eq-brand-rp">Brand:</label>
                    <select name="eq-brand-rp" id="eq-brand-rp" class="right-part3">
                        <option value="" class="right-part4">Select brand</option>
                    </select>
                </div>
                <div class="right-part1">
                    <label class="right-part2" for="eq-pph-rp">Price / hour:</label><br>
                    <input type="range" id="eq-pph-rp" class="right-part5" min="0" max="1000"><br>
                    <span class="right-part4"><span id="out-pph">0</span><span> to </span><span>1000</span></span><br><br>
                </div>
                <div class="right-part1">
                    <label class="right-part2" for="eq-ppd-rp">Price / day:</label><br>
                    <input type="range" id="eq-ppd-rp" class="right-part5" min="0" max="10000"><br>
                    <span class="right-part4"><span id="out-ppd">0</span><span> to </span><span>10000</span></span><br><br>
                </div>
                <div class="right-part1">
                    <label class="right-part2" for="eq-ppm-rp">Price / month:</label><br>
                    <input type="range" id="eq-ppm-rp" class="right-part5" min="0" max="100000"><br>
                    <span class="right-part4"><span id="out-ppm">0</span><span> to </span><span>100000</span></span><br><br>
                </div>
                <div class="right-part1">
                    <span class="right-part2">Availability Date:</span><br><br>
                    <label class="right-part4" for="eq-fd-rp">From:</label><br>
                    <div class="right-part7">
                        <button class="right-part6" >DD-MM-YYYY</button>
                    </div>
                    <div class="right-part10">
                        <div class="right-part9"><span class="right-part4">Time: </span>
                        <input type="time" name="" id="eq-fd-rp" class="right-part8"></div>
                        <div class="right-part9"><span class="right-part4">Date: </span>
                        <input type="date" name="" id="eq-fd-rp" class="right-part8"></div>
                    </div><br>
                    <label class="right-part4" for="eq-td-rp">To:</label><br>
                    <div class="right-part7">
                        <button class="right-part6" >DD-MM-YYYY</button>
                    </div>
                    <div class="right-part10">
                        <div class="right-part9"><span class="right-part4">Time: </span>
                        <input type="time" name="" id="eq-td-rp" class="right-part8"></div>
                        <div class="right-part9"><span class="right-part4">Date: </span>
                        <input type="date" name="" id="eq-td-rp" class="right-part8"></div>
                    </div><br>
                </div>
                <a href="Customer1.html#all_pro" class="left-part9"><div class="left-part8 left-part6">
                    <div>All Products</div>
                    <div>
                        <svg ariaHidden="true" class="" dataReactid="266" fill="none" height="24"
                            stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="6 9 12 15 18 9"></polyline>
                    </div>
                </div></a>
                <a href="Customer2.html#your_req" class="left-part9"><div class="left-part8 left-part6" id>
                    <div>Your Requests</div>
                    <div>
                        <svg ariaHidden="true" class="" dataReactid="266" fill="none" height="24"
                            stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="6 9 12 15 18 9"></polyline>
                    </div>
                </div></a>
                <a href="Customer2.html#curr2_book" class="left-part9"><div class="left-part8 left-part6">
                    <div>Current Booking</div>
                    <div>
                        <svg ariaHidden="true" class="" dataReactid="266" fill="none" height="24"
                            stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="6 9 12 15 18 9"></polyline>
                    </div>
                </div></a>
                <a href="Customer2.html#pre2_book" class="left-part9"><div class="left-part8 left-part6">
                    <div>Previous Booking</div>
                    <div>
                        <svg ariaHidden="true" class="" dataReactid="266" fill="none" height="24"
                            stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="6 9 12 15 18 9"></polyline>
                    </div>
                </div></a>
            </div>
        </div>
        <div class="left-part10">
            <hr>
            <div class="left-part12">
                <span class="left-part11" id="fil_pro">Filtered Products</span>
            </div><hr>
            <div class="left-part12">
                <span class="left-part11" id="all_pro">All Products</span>
            </div><hr>
            <div class="right-part11">
                <?php
                    while($row=mysqli_fetch_assoc($result1))
                    {
                        $hehe=$row['image'];
                        $folder="images/".$hehe;
                        $rate=$row['rate'];
                        $full_name=$row['full_name'];
                        $equipment=$row['equipment'];
                        $brand=$row['brand'];
                        $email=$row2['email'];
                        echo "<div class=\"right-part12\"><div class=\"right-part21\">
                            <div><img src='$folder' class=\"right-part13\"></div>
                            <div class=\"right-part14\">
                                <div class=\"right-part15\"><p><i>$rate</i>/-</p></div>
                                <div class=\"right-part16\"><p><i>Contact</i></p></div>
                            </div>
                            <div class=\"right-part17\">
                                <button class=\"right-part18\">BUY NOW</button>
                            </div>
                            <div class=\"right-part19\">
                                <div class=\"right-part20\">Name: 
                                    <span style=\"font-weight: 450;\">$full_name</span>
                                </div>
                                <div class=\"right-part20\">Email: 
                                    <span style=\"font-weight: 450;\">$email</span>
                                </div>
                                <div class=\"right-part20\">Equipment: 
                                    <span style=\"font-weight: 450;\">$equipment</span>
                                </div>
                                <div class=\"right-part20\">Brand: 
                                    <span style=\"font-weight: 450;\">$brand</span>
                                </div>
                            </div></div>
                        </div>";
                    }
                ?> 
            </div>
            <?php?> 
                <!-- while($row=mysqli_fetch_assoc($result1))
                {
                    $hehe=$row['image'];
                    $folder="images/".$hehe;
                    echo "<img src='$folder' width='150px' height='150px'>";
                    echo $row['rate'];
                    echo "<br>";
                } -->
            
            
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
</body>

</html>