<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="Cs/Style.css" rel="stylesheet" />
    <script src="Js/jquery-3.2.1.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans|Lobster+Two|Pacifico');
    </style>
</head>
<body>
    <section>
        <!-- This is Section 1 of the page -->
        <div class="section1">
            <img src="Images/Website_Logo.png" class="logo" />
            <div class="navigation">
                <img src="Images/if_List_Text_Menu_Numbers_String_Burger_1329080.png" class="toggle" />
                <a class="cgr" >Categories</a>
            </div>
            <div>
                <a class="submenu" >Sound devices</a>
                <a class="submenu">Video game consoles</a>
                <a class="submenu">Cell/Mobile/Wireless phones</a>
                <a class="submenu">Home security system</a>
                <a class="submenu">Cameras</a>
                <a class="submenu">Home theater system</a>
                <a class="submenu">TVs</a>
                <a class="submenu">Computers</a>
                <a class="submenu">Games/Movies/Music</a>
                <a class="submenu">Accessories</a>
                <a class="submenu">Office</a>
                <a class="submenu">Home appliances</a>
            </div>

            <p class="para1">Specials</p>
            <?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'ecommerce');


$query = " SELECT `name`, `image`, `price`, `discount`, `description`
 FROM `ecom` WHERE tag='specials' ";

 $result = mysqli_query($con,$query);

 $num = mysqli_num_rows($result);

 if($num > 0){
     while($product = mysqli_fetch_array($result)){
        ?>



            <div class="Special">
                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                    <img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:150px;">
                    <div class="div2">
                    <h3><?php echo $product['price']; ?><strike>(<?php echo $product['discount']; ?>% off)</strike></h3>
                    <h4><?php echo $product['name']; ?></h4>
                    <p><?php echo $product['description']; ?></p>
                    </div>
                    </div>
                    
                </fieldset>
                

            
            </div>
            <?php
                }
            }
            ?>


        </div>



        <!-- This is section 2 of the page -->
        <div class="section2">
            <input type="text" placeholder="search" class="txtsrch" /><button type="button" class="btnsrch">Search</button>

            <img src="Images/if_call_322424.png" class="call-icon" />
            <span class="tel-no">800-8600-9662</span>


            <nav>
                <a class="menuitem" >Home</a>
                <a class="menuitem">Wish list(0)</a>
                <a class="menuitem">My Account</a>
                <a class="menuitem">Shopping Cart</a>
                <a class="menuitem">Checkout</a>
                <a class="menuitem">items(s)</a>
            </nav>

            <div class="slider">
                <div class="slides">
                    <div class="slide1">
                        <img src="Images/4-2-iphone-png-picture-png-image.png" class="img1" />
                    </div>
                    <div class="slide1">
                        <img src="Images/2-2-iphone-png-picture.png" class="img2" />
                    </div>
                    <div class="slide1">
                        <img src="Images/1-2-iphone-png-picture-png-clipart.png" class="img3" />
                    </div>
                    <div class="constant">
                        <h1>iPhone 7</h1>
                        <p>Comfort is a very important things nowadays because it is a condition of satifaction.</p>

                        <a class="btnshopnow">Shop Now!</a>
                    </div>
                </div>
            </div>


            <div class="content1">
                <div class="innertitle1">
                    <h3>Home Theater & TV</h3>
                    <p class="para1">Comfort is a very important things nowadays because it is a condition of satifaction.</p>
                    <br />
                    <p class="para1">Shop Now!</p>
                </div>

                <div class="innertitle2">
                    <h3>Home Appliances</h3>
                    <p class="para1">Comfort is a very important things nowadays because it is a condition of satifaction.</p>
                    <br />
                    <p class="para1">Shop Now!</p>
                </div>

                <div class="inner1">
                    <img src="Images/Home_Theaters.png" class="img1" />
                </div>
                <div class="inner2">
                    <img src="Images/Black_Vacuum_Cleaner_PNG_Clipart-629.png" class="img2" />
                </div>
            </div>

           <p class="featuredpara">Latest</p>
           

            <?PHP



// if($con){
//  echo "connection successful";
// }else{
//  echo "no connection";
// }


$query = " SELECT `name`, `image`, `price`, `discount`, `description`
 FROM `ecom` WHERE tag='latest' ";

 $result = mysqli_query($con,$query);

 $num = mysqli_num_rows($result);

 if($num > 0){
     while($product = mysqli_fetch_array($result)){
        ?>
        
<div class="col-lg-4 col-md-4 col-sm-12" style="padding:25px;">
            <div class="products">
                <fieldset class="col1">
                    <legend>New</legend>
                    <img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:150px;">
                    <h3> <?php echo $product['price']; ?><strike>(<?php echo $product['discount']; ?>% off)</strike></h3>
                    <h4><?php echo $product['name']; ?></h4>
                    <p><?php echo $product['description']; ?></p>
                </fieldset>

                </div>
                
                <?php
                }
            }
            ?>
            </div>
           

            
            <p class="featuredpara">Featured</p>
<?php
$query = " SELECT `name`, `image`, `price`, `discount`, `description`
 FROM `ecom` WHERE tag='featured' ";

 $result = mysqli_query($con,$query);

 $num = mysqli_num_rows($result);

 if($num > 0){
     while($product = mysqli_fetch_array($result)){
        ?>

            <div class="products">
                <fieldset class="col1">
                    <legend>Hot Deal</legend>
                    <img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:150px;">
                    <h3><?php echo $product['price']; ?><strike>(<?php echo $product['discount']; ?>% off)</strike></strike></h3>
                    <h4><?php echo $product['name']; ?></h4>
                    <p><?php echo $product['description']; ?></p>
                </fieldset>
                </div>
            <?php
                }
            }
            ?>

                
            
                

        </div>
    </section>
</div>
</div>
    <div class="background"></div>
<br>
<br>
<br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br><br>
    <div class="footer">

        <div class="outer">
            <div class="inner">
                <h4>Information</h4>
                <a>About</a>
                <a>Delivery Information</a>
                <a>Privacy Policy</a>
                <a>Tearm & Condition</a>
            </div>
            <div class="inner2">
                <h4>Customer Information</h4>
                <a>Contact Us</a>
                <a>Return</a>
                <a>Site Map</a>
            </div>
            <div class="inner">
                <h4>My Account</h4>
                <a>Order History</a>
                <a>Wish list</a>
                <a>News Latter</a>
            </div>
            <div class="inner2">
                <h4>Follow Us</h4>
                <a>Facebook</a>
                <a>Twitter</a>
                <a>Google +</a>
                <a>Youtube</a>
            </div>
        </div>

        <hr />
        <div class="copyright">
            <span>Powered by Daily Tuition © 2017</span>
        </div>
        
    </div>

    <script>

        var $slides = $('.slides');
        var $slide = $('.slide1');
        var count = 1;

        $(document).ready(function () {

            setInterval(function () {

                $slides.animate({ 'margin-left': '-=68vw' }, 1200, function () {

                    count++;
                    if (count === 4) {
                        $slides.css("margin-left", 0);
                        count = 1;
                    }

                });
            }, 4000);
        });

    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>
