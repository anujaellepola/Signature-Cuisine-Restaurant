<?php

@include 'config.php';

session_start();
if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
 }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="./Home image/123.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="foodmenu-seemore.html">
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signature Cuisine</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="headerbar">
                <div class="account">
                    <ul>
                        <a href="">
                        <li><i class="fa-solid fa-house-chimney"></i></li></a>
                        <a href="#">
                        <li><i class="fa-solid fa-magnifying-glass searchicon" id="searchicon1"></i></li></a>

                        <div class="search" id="searchinput1">
                            <input type="search">
                            <i class="fa-solid fa-magnifying-glass srchicon"></i>
                        </div>
                        <a href="user_page.php"> <li><i class="fa-solid fa-user" id="user-mb"></i></li></a>
                    </ul>
                </div>
                <div class="nav">
                    <ul>
                        <a href="#">
                        <li>Home</li></a>
                        <a href="#foodmenu">
                        <li>Food Menu/Offers</li></a>
                        <a href="#aboutus">
                        <li>About Us</li></a>
                        <a href="#reservation">
                        <li>Reservation</li></a>
                    </ul>

                </div>
            </div>
            <div class="logo">
                <img src="./Home image/456.png" alt="">
            </div>

            <div class="bar">
                <i class="fa-solid fa-bars" id="hdbars"></i>
                <i class="fa-solid fa-xmark" id="hdcross"></i>
            </div>
            <div class="nav">
                <ul>
                    <a href="#">
                    <li>Home</li></a>
                    <a href="#foodmenu">
                    <li>Food Menu/Offers</li></a>
                    <a href="#aboutus">
                    <li>About Us</li></a>
                    <a href="#reservation">
                    <li>Reservation</li></a>
                </ul>
            </div>
            <div class="account">
                <ul>
                    <a href="#" id="login-button">
                    <li><i class="fa-solid fa-house-chimney"></i></li></a>
                    <a href="#" id="login-button">
                    <li><i class="fa-solid fa-magnifying-glass" id="searchicon2"></i></li></a>

                    <div class="search" id="searchinput2">
                        <input type="search">
                        <i class="fa-solid fa-magnifying-glass  srchicon"></i>
                    </div>
                    <a href="user_page.php" id="login-button">
                    <li><i class="fa-solid fa-user" id="user-lap"></i></li></a>
                </ul>
            </div>
        </div>
    </header>

    <div class="home" id="home">
        <div class="main_slide">  <!-- Welcome -->
            <div>
                <h1>Welcome to <span>Signature Cuisine,</span> where every dish is a revelation.</h1>
                <p>Welcome to our culinary sanctuary, where each bite tells a story. Explore a world of exquisite flavors, handcrafted with love. Join us for an unforgettable dining experience that transcends taste and tradition. Discover your next gastronomic adventure here.</p>

                <button class="red_btn">Visit Now   <i class="fa-solid fa-arrow-right-long"></i></button>
            </div>
            <div>
                <img src="./Home image/plate5-rbg.png" alt="">
            </div>
        </div>

        <div class="section-padding" id="foodmenu"> <!-- Food Styles -->
            <div class="food-items">
                <div class="item">
                    <div>
                        <img src="./Home image/789.jpg" alt="food item">
                    </div>
                    <h3>Indian Style</h3>
                    <p>Indian foodstyle is a tantalizing journey of aromatic spices, diverse regional flavors, and a harmonious blend of sweet, savory, and spicy elements, creating a rich tapestry of culinary traditions that have delighted palates for centuries.</p>
                    <a href="foodmenu-indian.html"><button class="white_btn">See Menu</button></a>
                </div>

                <div class="item">
                    <div>
                        <img src="./Home image/Srilankan.jpeg" alt="food item">
                    </div>
                    <h3>Sri Lankan Style</h3>
                    <p>Sri Lankan foodstyle is a vibrant tapestry of flavors, blending aromatic spices, coconut, and tropical ingredients to create a rich and diverse culinary heritage known for its balance of sweet, spicy, and savory elements.</p>
                    <a href="foodmenu-srilankan.html"><button class="white_btn">See Menu</button></a>
                </div>


                <div class="item">
                    <div>
                        <img src="./Home image/Beverage.jpg" alt="food item">
                    </div>
                    <h3>Beverages & Desserts</h3>
                    <p>"Beverages range from soothing teas to refreshing cocktails. Desserts offer sweet delights, from creamy cheesecakes to indulgent chocolate truffles."</p>
                    <a href="foodmenu-beverage.html"><button class="white_btn">See Menu</button></a>
                </div>


                <div class="item">
                    <div>
                        <img src="./Home image/Fastfood.jpg" alt="food item">
                    </div>
                    <h3>Fast Food</h3>
                    <p>Fast food is a convenient and quick dining option that typically includes items like burgers, fries, and sandwiches, designed for on-the-go consumption, offering simplicity, speed, and familiar, comforting flavors.</p>
                    <a href="foodmenu-fastfood.html"><button class="white_btn">See Menu</button></a>
                </div>


                <div class="item">
                    <div>
                        <img src="./Home image/Beverage.jpg" alt="food item">
                    </div>
                    <h3>Offers !!</h3>
                    <p>Experience delectable cuisine and savings at our restaurant. Enjoy tantalizing dishes with special offers. Indulge in flavors while saving big. <br><br>Don't miss out on our mouthwatering deals.</p>
                    <a href="foodmenu-offers.html"><button class="white_btn">See Offers</button></a>
                </div>
            </div>
        </div>

        <div class="main_slide2">  <!-- Why People Choose Us -->
            <div class="fooding">
                <img src="./Home image/fooding.png" alt="">
            </div>
            <div class="question">
                <div>
                    <h2>Why People Choose Us</h2>
                </div>
                <div>
                    <div class="q-ans">
                        <div>
                            <img src="./Home image/mojito.png" alt="">
                        </div>
                        <div>
                            <h4>Blue Mojito</h4>
                            <p>Savor the refreshing burst of zesty lime and the invigorating, minty coolness in every sip of our tantalizing blue mojito.</p>
                        </div>
                    </div>

                    <div class="q-ans">
                        <div>
                            <img src="./Home image/biriyani.png" alt="">
                        </div>
                        <div>
                            <h4>Chicken Biriyani</h4>
                            <p>Indulge in the mouthwatering heat of succulent, spiced chicken enveloped in fragrant, aromatic rice, all coming together in a delightful spicy chicken biriyani that's sure to tantalize your taste buds.</p>
                        </div>
                    </div>

                    <div class="q-ans">
                        <div>
                            <img src="./Home image/burger.png" alt="">
                        </div>
                        <div>
                            <h4>Cheese chicken burger</h4>
                            <p>Indulge in the delectable fusion of succulent, spicy chicken, gooey melted cheese, and a symphony of savory flavors with our mouthwatering cheese chicken burger.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_slide3"> <!-- Our Popular food items -->
            <div class="fav-head">
                <h3>Our Popular food items</h3>
                <p>
                    From the rich, creamy goodness of our Signature Cuisine chicken biriyani, salads, kottu and noodles to the sizzling perfection of our steak, each dish is a symphony of flavors that delights the palate. <br><br>
                    <h5>Join us for a memorable dining experience that elevates your taste buds to new heights.</h5>
                </p>
            </div>
            <div class="fav-food">
                <div class="item">
                    <div>
                        <img src="./Home image/kottu.png" alt="">
                    </div>
                    <h3>Kottu</h3>
                    <p>Savor the irresistible heat and aromatic spices that dance through every bite of our delectable spicy kottu, a culinary adventure that ignites the senses.</p>
                    <p class="fav-price">Rs.900/=</p>
                </div>

                <div class="item">
                    <div>
                        <img src="./Home image/plate1-rgb.png" alt="">
                    </div>
                    <h3>Salads</h3>
                    <p>Our salads are a delightful medley of crisp, garden-fresh greens, vibrant vegetables, and tantalizing dressings, creating a healthy and flavorsome feast for your senses.</p>
                    <p class="fav-price">Rs.800/=</p>
                </div>

                <div class="item">
                    <div>
                        <img src="./Home image/biriyani.png" alt="">
                    </div>
                    <h3>Biriyani</h3>
                    <p>Savor the tantalizing blend of aromatic spices and tender, flavorful rice in every mouthwatering bite of our spicy biryani (Chicken/Beef/Fish..).</p>
                    <p class="fav-price">Rs.1200/=</p>
                </div>


                <div class="item">
                    <div>
                        <img src="./Home image/noodles.png" alt="">
                    </div>
                    <h3>Noodles</h3>
                    <p>Savor the fiery and aromatic delight of our spicy noodles that ignite your taste buds with every savory bite.</p>
                    <p class="fav-price">Rs.990/=</p>
                </div>
            </div>
            <div class="dsgn"></div>
        </div>

        <div class="section-padding" id="aboutus"> <!-- About Us -->
            <div class="main_slide2">
                <div class="fooding">
                    <img src="./Home image/123.png" alt="">
                </div>
                <div class="question">
                    <div>
                        <h2>About Us</h2>
                    </div>
                    <div>
                        <div>
                            <p>
                                Signature Cuisine is a culinary haven where passion meets palate. Nestled in the heart of the city, we craft extraordinary dining experiences for discerning gourmands. <br><br>
                                Our expert chefs meticulously curate each dish, blending innovation with tradition to create gastronomic delights that tantalize taste buds and spark conversations. With an unwavering commitment to sourcing the finest, locally-sourced ingredients, we transform them into art on a plate. <br><br>
                                Our restaurant is a haven for food lovers seeking refined, unforgettable flavors in an elegant ambiance. Come savor the essence of our culinary artistry and embark on a journey of taste that transcends the ordinary.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-padding" id="reservation"> <!-- Make a reservation -->
            <div class="reservationbox">
                <div class="banner question">
                    <h2>Reservation</h2>
                    <div class="card-container">
                        <div class="card-img"></div>

                        <div class="card-content">
                            <h3>BOOK YOUR TABLE NOW</h3>
                            <form action="reservation.php" method="post">
                                <div class="form-row">
                                    <input type="datetime-local" name="date_time" placeholder="datetime:">
                                </div>
                                <div class="form-row">
                                    <input type="text" placeholder="Full Name" name="fullname">
                                    <input type="text" placeholder="Phone Number" name="phonenumber">
                                </div>
                                <div class="form-row">
                                    <input type="number" placeholder="How many people?" min="1" name="people">
                                    <input type="submit" value="BOOK TABLE">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="main_slide2">  <!-- Facilities We Provide -->
            <div class="fooding">
                <img src="./Home image/facility.png" alt="">
            </div>
            <div class="question">
                <div>
                    <h2>Facilities We Provide</h2>
                </div>
                <div>
                    <div class="q-ans">
                        <div>
                            <img src="./Home image/wifi.jpg" alt="">
                        </div>
                        <div>
                            <h4>Free Wi-Fi</h4>
                            <p>Unlimited Access</p>
                        </div>
                    </div>

                    <div class="q-ans">
                        <div>
                            <img src="./Home image/parking.png" alt="">
                        </div>
                        <div>
                            <h4>Free Parking</h4>
                            <p>For over 50+ vehicles</p>
                        </div>
                    </div>

                    <div class="q-ans">
                        <div>
                            <img src="./Home image/dine-in.jpg" alt="">
                        </div>
                        <div>
                            <h4>Dine-In</h4>
                            <p>100 customers can dine-in at a time</p>
                        </div>
                    </div>

                    <div class="q-ans">
                        <div>
                            <img src="./Home image/bar.png" alt="">
                        </div>
                        <div>
                            <h4>Bar</h4>
                            <p>24- hour bar with DJ nights</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_slide4"> <!-- Chef-feed -->
            <div class="chef-feed">
                <h2>Customer <span style="color: rgb(194, 12, 12);">Feedback</span></h2>
                <p>"I recently dined at your restaurant, and I must say, it was an exceptional experience from start to finish. The ambiance was charming, the staff incredibly attentive, and the food, simply divine. The flavors in every dish were a revelation, and I couldn't help but appreciate the dedication to quality ingredients and culinary artistry. Your team made me feel truly valued as a customer, and I can't wait to return for another unforgettable meal. You've set the bar high for hospitality and gastronomy, and I'm thrilled to be a loyal patron. Thank you!"</p>
                <div class="chef-detail">
                    <div>
                        <img src="./Home image/webdeveloper.png" alt="">
                    </div>
                    <div>
                        <h6>Devaka Bandara</h6>
                        <p>Web Developer</p>
                    </div>
                </div>
                <div class="chef-vic">
                    <div>
                        <i class="fa-solid fa-hand-peace"></i>
                        <h4>68</h4>
                        <p>People universally savor the joyous flavors.</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-trophy"></i>
                        <h4>956</h4>
                        <p>Honored with prestigious culinary awards.</p>
                    </div>
                </div>
            </div>
            <div class="chef">
                <img src="./Home image/chef.png" alt="">
            </div>
        </div>

        <div class="letter"> <!-- Subscribe -->
            <div class="letter-head">
                <h2>Subscribe <span>for new menus or offers</span></h2>
            </div>
            <div class="letter-input">
                <div>
                    <input type="email" placeholder="Example@signaturecuisine.com">
                </div>
                <button class="red_btn"> Subscribe</button>
            </div>
        </div>
    </div>

    <div class="footer"> <!-- Footer -->
        <div class="footer-1">
            <div class="logo">
                <img src="./Home image/456.png" alt="">
            </div>
            <div>
                <address>
                    <p>E-mail: signature.cuisine@gmail.com </p>
                    <p>Phone: +94 76 732 7371</p>
                    <p>Mr. A D B Ellepola <br>20 DS Senanayake Veediya, Kandy 20000</p>
                </address>
            </div>
        </div>

        <div class="footer-2">
            <img src="./Home image/123.png" alt="">
            <h2>Powered by <em>Signature Cuisine</em></h2>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>