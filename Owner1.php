<?php
session_start();
include("connection.php");
include("functions.php");
// echo "'<h1>'HELLO'</h1>'";
//echo "<h2>" . $_SESSION['username'] . "</h2>";
//$user_data=check_login($con);
// $query1="select * from users";
// $result1=mysqli_query($con1,$query1);
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
    $filename=$_FILES["image"]["name"];
    $tempname=$_FILES["image"]["tmp_name"];
    $folder="images/".$filename;
//echo $folder;
    move_uploaded_file($tempname,$folder);
//echo "<img src='$folder' height='100px' width='100px'>";


    $equipment=$_POST['equipment'];
    $full_name=$_POST['full_name'];
    $brand=$_POST['brand'];
    $image=$filename
    ;
    $rate=$_POST['rate'];
    $equip_id=$_SESSION["user_id"];
    $user_id=random_num(10);
    $_SESSION["equipid"] = $user_id;
    $_SESSION["equiptype"] = $equipment;
    $_SESSION["brand"] = $brand;
    // echo $equipment;
        $query="insert into dash_boardd(equipment,full_name,brand,image,rate,user_id,equip_id) values('$equipment','$full_name','$brand','$image','$rate','$user_id','$equip_id')";
        mysqli_query($con,$query);
        echo("<script>alert('Equipment added successfully')</script>");
      echo("<script>window.location = 'owner1.php';</script>");
        //die;
    // else{
    //     echo"Enter valid information";
    // }
}
$hehe=$_SESSION["user_id"];
$query2="select * from dash_boardd where equip_id='$hehe'";
$result1=mysqli_query($con,$query2);
$numrow=mysqli_num_rows($result1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Equipments: FarmRentals</title>
    <link rel="stylesheet" href="/mini/index.css">
    <script src="https://kit.fontawesome.com/83b33407c6.js" crossorigin="anonymous"></script>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/mini/Owner.css">
</head>

<body>
    <!-- <?php
    echo "Favorite color is " . $_SESSION["username"] . ".<br>";
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
                    <li class="lii"><a class="h" href="http://localhost/mini/Owner1.php">Owner</a></li>
                    <li class="lii"><a class="h" href="Customer1.php">Customer</a></li>
                    <li class="lii"><a class="h" href="help.html">Help</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="left-part31">
        <div class="left-part28">
            <div><img class="left-part29" src="gallery/profile-user.png" alt=""></div>
            <div style="margin:.5rem"><?php
    echo " Hello, " . $_SESSION["username"] . "<br>";
    ?></div>
        </div>
        <div class="left-part32">
            <button class="left-part30 left-part33">
                <a href="Owner1.html" class="left-part9" style="color: white">
                    <div style="width:100%;">Your Equipments</div>
                </a>
            </button>
            <button class="left-part30 left-part34">
                <a href="Owner2.html" class="left-part9" style="color: white">
                    <div style="width:100%;">Booking Details</div>
                </a>
            </button>
        </div>
    </div>
    <div class="left-part">
        <div class="left-part1">
            <div class="left-part2">
                <h1 class="left-part3">Equipment Status</h1>
            </div>
            <div class="left-part4">
                <div class="left-part6">
                    <span class="left-part5">Total Number of Equipments Added:</span>
                    <span class="left-part7"><?php echo $numrow?></span>
                </div>
                <!-- <div class="left-part6">
                    <span class="left-part5">Number of Equipments Currently on Rent:</span>
                    <span class="left-part7">00</span>
                </div>
                <div class="left-part6">
                    <span class="left-part5">Number of Ideal Equipments:</span>
                    <span class="left-part7">00</span>
                </div> -->
                <a href="Owner1.html#add_eq" class="left-part9"><div class="left-part8 left-part6">
                    <div>Add Equipments</div>
                    <div>
                        <svg ariaHidden="true" class="" dataReactid="266" fill="none" height="24"
                            stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="6 9 12 15 18 9"></polyline>
                    </div>
                </div></a>
                <a href="Owner1.html#eq_det" class="left-part9"><div class="left-part8 left-part6" id>
                    <div>Equipments Details</div>
                    <div>
                        <svg ariaHidden="true" class="" dataReactid="266" fill="none" height="24"
                            stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="6 9 12 15 18 9"></polyline>
                    </div>
                </div></a>
                <a href="Owner2.html#pre_book" class="left-part9"><div class="left-part8 left-part6">
                    <div>Previous Booking</div>
                    <div>
                        <svg ariaHidden="true" class="" dataReactid="266" fill="none" height="24"
                            stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="6 9 12 15 18 9"></polyline>
                    </div>
                </div></a>
                <a href="Owner2.html#curr_book" class="left-part9"><div class="left-part8 left-part6">
                    <div>Current Booking</div>
                    <div>
                        <svg ariaHidden="true" class="" dataReactid="266" fill="none" height="24"
                            stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="6 9 12 15 18 9"></polyline>
                    </div>
                </div></a>
                <a href="Owner2.html#cust_req" class="left-part9"><div class="left-part8 left-part6">
                    <div>Customer Requests</div>
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
                <span class="left-part11" id="eq_det">Equipments Details</span>
                <div class="left-part20">
                    <input type="search" placeholder="Enter your equipment here..." class="left-part21">
                    <button class="left-part22">Search</button>
                </div>
                <div class="left-part23">
                    <!-- <div class="left-part24"> -->
                        <!-- <div class="left-part25">Date</div>
                        <div class="left-part25">Equipment ID</div>
                        <div class="left-part25">Equipment Type</div>
                        <div class="left-part25">Brand</div> -->
                        <!-- <div class="left-part25">Modify</div> -->
                        <!-- <div class="left-part25">Remove</div> -->
                         <!-- <table align = "left" border = "1" cellpadding = "3" cellspacing = "2">
                            <tbody>
                            <tr class="left-part25">
                                <th>Date</th>
                                <th>Equipment ID</th>
                                <th>Equipment Type</th>
                                <th>Brand</th>
                                <th>Full Name</th>
                                <th>Asked Rate</th>
                            </tr>
                            
                            </tbody>                 
                        </table> -->                                                
                    <!-- </div> -->
                    <table class="left-part251">
                            <tr class="left-part25">
                                <th style="border-top-left-radius:20px; border-bottom-left-radius:20px">Date</th>
                                <th>Equipment ID</th> 
                                <th>Equipment Type</th>
                                <th>Brand</th>
                                <th>Full Name</th>
                                <th style="border-top-right-radius:20px; border-bottom-right-radius:20px">Asked Rate</th> 
                            </tr>                            
                            <?php
                                while($row=mysqli_fetch_assoc($result1))
                                {
                            ?>
                            <tr class="left-part25">
                            <td ><?php echo $row['date']; ?></td>
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['equipment']; ?></td>
                            <td><?php echo $row['brand']; ?></td>
                            <td><?php echo $row['full_name']; ?></td>
                            <td><?php echo $row['rate']; ?></td>
                            </tr>
                            <?php
                                }
                            ?>                 
                        </table>
                        <?php
                            if($numrow==0){
                                echo '<div class="left-part26" style="display:flex; justify-content:center">
                                <div class="left-part27">No equipments added yet</div>
                                </div>';
                            }
                        ?>
                </div>
                
            </div><hr>
            <div class="left-part12">
                <span class="left-part11" id="add_eq">Add Equipments</span>
                <div class="left-part18">
                    <form method="post" class="left-part17" enctype="multipart/form-data">
                    <div class="left-part15">
                        <div class="left-part16"><label for="equip" class="left-part13">Equipment type: </label></div>
                        <select name="equipment" id="equip" class="left-part14">
    <optgroup label="Farming Vehicles">
      <option value="tractor">Tractor</option>
      <option value="combine">Combine or Harvester</option>
    </optgroup>
    <optgroup label="Tractor Attachments">
      <option value="plow">Plows</option>
      <option value="harrow">Harrows</option>
      <option value="spreader">Fertilizer Spreader</option>
      <option value="seeder">Seeders</option>
      <option value="other">Other</option>
    </optgroup>
  </select>
                        <!-- <input type="text" id="form1" class="left-part14"> -->
                    </div>
                    <div class="left-part15">
                        <div class="left-part16"><label for="form1" class="left-part13">Full Name</label></div>
                        <input type="text" id="form1" class="left-part14" name="full_name">
                    </div>
                    <div class="left-part15">
                        <div class="left-part16"><label for="form2" class="left-part13">Brand: </label></div>
                        <input type="text" id="form2" class="left-part14" name="brand">
                    </div>
                    <div class="left-part15">
                        <div class="left-part16"><label for="form3" class="left-part13">Images: </label></div>
                        <input type="file" id="form3" class="left-part14" style="border:none" name="image">
                    </div>
                    <div class="left-part15">
                        <div class="left-part16"><label for="form5" class="left-part13">Amount/day(₹): </label></div>
                        <input type="text" id="form5" class="left-part14" name="rate">
                    </div>
                    <div class="left-part35">
                        <button type="submit" class="left-part36">Add</button>
                        <button type="reset" class="left-part37">Reset</button>
                    </div>
                </form></div>
            </div><hr>
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
                    <p class="tp6">Partner Dispute</p>
                    <a href="help.html" class="left-part9 dabba6"><p class="tp6">FAQS</p></a>
                </div>
            </div>
            <div style="text-align:center;">Please provide us feedback at: farmrentals.in/feedback</div>
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
<!-- <?php
$filename=$_FILES["image"]["name"];
$tempname=$_FILES["image"]["tmp_name"];
$folder="images/".$filename;
//echo $folder;
move_uploaded_file($tempname,$folder);
echo "<img src='$folder' height='100px' width='100px'>"
// print_r($_FILES["image"]);
?> -->
<!-- <img src="images/collaboration diagram_page-0001.jpg" alt="" height="100px" width="100px"> -->