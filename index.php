<?php
if (isset($_GET['message'])) {
    if ($_GET['message'] === 'success') {
        echo "<p style='color: green; text-align: center;'>Successfully applied for slot! Our executive will contact you :)</p>";
    } elseif ($_GET['message'] === 'failure') {
        echo "<p style='color: red; text-align: center;'>Booking failed :( Please try again.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bharat motors karad</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>
    <div class="logo"><img src="image\logo.jpg" alt="logo"></div>
    <a href="#" class="logo"> <span>bharat</span>motors & Tractors </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#vehicles">tractors</a>
        <a href="#services">services</a>
        <a href="#featured">featured</a>
        <a href="#reviews">reviews</a>
        <a href="#contact">contact</a>
        <a href="3-reservation.php">Book</a>
    
    </nav>

</header> 
 
</div>

<section class="home" id="home">

    <h3 data-speed="-2" class="home-parallax">farming Experts</h3>

    <img data-speed="5" class="home-parallax" src="image\homepage.jpg" alt="">

    <a data-speed="7" href="#" class="btn home-parallax">gallery</a>  

    <div class="container">

        <div class="image-container">
       
             <div class="image"><img src="image\show1.jpeg" alt=""></div>
             <div class="image"><img src="image\show2.jpeg" alt=""></div>
             <div class="image"><img src="image\show3.jpeg" alt=""></div>
             <div class="image"><img src="image\show4.jpeg" alt=""></div>
             <div class="image"><img src="image\show5.jpeg" alt=""></div>
             <div class="image"><img src="image\show6.jpeg" alt=""></div>
        
        </div>
        
        <div class="popup-image">

            <span>&times;</span> 
             <img src="image\show1.jpeg" alt="">
        
        </div>
    </div>

</section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3>50+</h3>
            <p>employees</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-tractor"></i>
        <div class="content">
            <h3>500+</h3>
            <p>tractors sold</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>1000+</h3>
            <p>happy clients</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-tractor"></i>
        <div class="content">
            <h3>10+</h3>
            <p>new models</p>
        </div>
    </div>

</section>

<section class="vehicles" id="vehicles">

    <h1 class="heading"> new <span> models</span> </h1>

    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image\N3037-TX.jpeg" alt="">
                <div class="content">
                    <h3>3037 </h3>
                    <div class="price"> <span>Availble</span> at best price</div>
                    <p>
                        35HP
                        <span class="fas fa-circle"></span> 8F+2R
                        <span class="fas fa-circle"></span> 1800 KG lift capacity
                        <span class="fas fa-circle"></span> Softek clutch
                        <span class="fas fa-circle"></span> planetary drive
                    </p>
                    <a href="brouchure\3037-tx-brochure.pdf" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image\N3600-tx-heritage.jpg" alt="">
                <div class="content">
                    <h3>3600 heritage edition</h3>
                    <div class="price"> <span>Available</span>at best price</div>
                    <p>
                        43HP
                        <span class="fas fa-circle"></span> 8F+2R /8+8 synchro shuttle
                        <span class="fas fa-circle"></span> 1800 KG lift capacity
                        <span class="fas fa-circle"></span> Softek clutch
                        <span class="fas fa-circle"></span> Lift-O-matic technology
                    </p>
                    <a href="brouchure\3600-tx-super-heritage-edition-brochure.pdf" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image\N3630-tx-special.jpeg" alt="">
                <div class="content">
                    <h3>3630 special edition</h3>
                    <div class="price"> <span>Available</span>at best price</div>
                    <p>
                        55HP
                        <span class="fas fa-circle"></span> 12F+3R
                        <span class="fas fa-circle"></span> Lift-O-matic 2000 KG
                        <span class="fas fa-circle"></span> Double clutch
                        <span class="fas fa-circle"></span> skywatch(O)
                    </p>
                    <a href="brouchure\3630-tx-special-brochure.pdf" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image\Nexcel-6010.jpeg" alt="">
                <div class="content">
                    <h3>Exel 6010</h3>
                    <div class="price"> <span>Available</span>soon !</div>
                    <p>
                        60HP
                        <span class="fas fa-circle"></span> Rotary FIP
                        <span class="fas fa-circle"></span> Flat deck platform
                        <span class="fas fa-circle"></span> 2WD and 4WD
                        <span class="fas fa-circle"></span> skywatch and ROPS with canopy
                    </p>
                    <a href="brouchure\excel-6010-2wd-brochure.pdf" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image\Nexcel-9010.jpeg" alt="">
                <div class="content">
                    <h3>Exel 9010</h3>
                    <div class="price"> <span>Available</span>soon !</div>
                    <p>
                        90HP
                        <span class="fas fa-circle"></span> Rotary FIP
                        <span class="fas fa-circle"></span> flat deck with tiltable steering
                        <span class="fas fa-circle"></span> 2WD and 4WD
                        <span class="fas fa-circle"></span> skywatch and ROPS with canopy
                    </p>
                    <a href="brouchure\excel-9010-4wd-brochure.pdf" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image\N3230.jpeg" alt="">
                <div class="content">
                    <h3>3230</h3>
                    <div class="price"> <span>Available </span>at best price</div>
                    <p>
                        38HP
                        <span class="fas fa-circle"></span> 8F+2R
                        <span class="fas fa-circle"></span> Lift-O-matic 1800 KG
                        <span class="fas fa-circle"></span> planetary drive
                        <span class="fas fa-circle"></span> Softek clutch
                    </p>
                    <a href="brouchure\3230-tx-2wd-brochure.pdf" class="btn">check out</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-tractor"></i>
            <h3>tractor sales</h3>
            <p>We sell New holland tractors from range of 35HP to 90HP for all type of farming processes.</p>
        </div>

        <div class="box">
            <i class="fas fa-tools"></i>
            <h3>servicing and maintenance</h3>
            <p>Bharat motors has adavance machinary and experience staff for all types of servicing, maintenance, repair and repalcements.</p>
           
        </div>

        <div class="box">
            <i class="fas fa-repeat"></i>
            <h3>tractor exchange</h3>
            <p>Tractor exchange policy is available at Bharat motors and tractors with best exchange value.</p>
            
        </div>

        <div class="box">
            <i class="fas fa-tractor"></i>
            <h3>farming equipments</h3>
            <p>All types of farming equipments and accesories are available. Sonalika, swan tractor equipments are available.2</p>
            
        </div>

        <div class="box">
            <i class="fas fa-gears"></i>
            <h3>spare parts</h3>
            <p>Bharat motors has spare parts inventory of CNH genuine spare parts. All types of spare parts and accesories of CNH industries are exclusively available in Bharat motors and tractors.</p>
            
        </div>

        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>Customer services</h3>
            <p>Bharat motors is known for its customer service, easy buying process, quick service, original spare parts and responsive staff.</p>
            
        </div>

        <div class="box">
            <i class="fas fa-person"></i>
            <h3>About us </h3>
            <p>Bharat motors and tractors was established in 2005 by Late. Mr. Kondiba Chavan. Bharat motors and tractors deals with CNH industries tractors and spare parts. It is best tractor dealership in market since 10 years, more than 1000 tractors were sold till now. </p>
            
        </div>


    </div>

</section>

<section class="featured" id="featured">

    <h1 class="heading"> <span>In-stock</span> tractors </h1>

    <div class="swiper featured-slider">

       <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image\3032nx_.jpeg" alt="">
                <div class="content">
                    <h3>3032 NX</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">35 HP</div>
                    <a href="brouchure\3032-brochure.pdf" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image\4710_.jpeg" alt="">
                <div class="content">
                    <h3>4710</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">47 HP</div>
                    <a href="brouchure\4710-2wd-brochure.pdf" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image\3600-2tx-allrounder.jpeg" alt="">
                <div class="content">
                    <h3>3600-2 TX allrounder super</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">50 HP</div>
                    <a href="brouchure\3600-2-tx-all-rounder-plus-2wd-brochure.pdf" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image\3630super.jpeg" alt="">
                <div class="content">
                    <h3>3630 super</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">55 HP</div>
                    <a href="brouchure\3630-tx-super-plus-2wd-brochure.pdf" class="btn">check out</a>
                </div>
            </div>

       </div>

       <div class="swiper-pagination"></div>

    </div>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
 
             <div class="swiper-slide box">
                 <img src="image\5500_.jpeg" alt="">
                 <div class="content">
                     <h3>5500 Turbo</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">55 HP</div>
                     <a href="brouchure\5500-turbo-super-2wd-brochure.pdf" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image\5620-tx_.jpeg" alt="">
                 <div class="content">
                     <h3>5620 TX plus</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">65 HP </div>
                     <a href="brouchure\5620-tx-plus-2wd-brochure.pdf" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image\6500_.jpeg" alt="">
                 <div class="content">
                     <h3>6500 Turbo super</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">65 HP </div>
                     <a href="brouchure\6500-turbo-super-2WD-brochure.pdf" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image\7500_.jpeg" alt="">
                 <div class="content">
                     <h3>7500 Turbo super</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">75 HP</div>
                     <a href="brouchure\7500-turbo-super-2WDbrochure.pdf" class="btn">check out</a>
                 </div>
             </div>
 
        </div>
 
        <div class="swiper-pagination"></div>
 
     </div>

</section>

<section class="newsletter">
    
    <h3>subscribe for latest updates</h3>
    <p>Bharat motors- New Holland</p>

   <form action="https://formsubmit.co/chinmayshete4@gmail.com" method="POST">
        <input type="email" name="Email" placeholder="enter your email" autocomplete="off" required>
        <input type="submit" value="subscribe">
   </form>

</section>

<section class="reviews" id="reviews">

    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <div class="content">
                    <p>Best showroom for tractor buying</p>
                    <h3>Mr. Jayant Yadav</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <div class="content">
                    <p>supportive experienced staff(5500 Turbo) </p>
                    <h3>Mr. Nana Lohar</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <div class="content">
                    <p>On time servicing and genuine spare parts(3600 heritage)</p>
                    <h3>Mr. Sanket Deshmukh</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <div class="content">
                    <p>6500 eninge breakdown repaired within 3 days. great servicing.</p>
                    <h3>Mr. Dipak Late</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-5.png" alt="">
                <div class="content">
                    <p>Smooth buying process and finance options(5620 plus)</p>
                    <h3>Mr. Sursh Patil</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-6.png" alt="">
                <div class="content">
                    <p>Good exchange value given.(exel 6010)</p>
                    <h3>Mr.Yusuf Kagdi</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="contact" id="contact">

    <h1 class="heading"><span>contact</span> us</h1>

    <div class="row">

    <iframe class="map" 
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244732.1495420376!2d74.0044700785198!3d16.579535778997435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc1010ea3abee69%3A0x4c6961c73f8eaa6d!2sBharat%20Tractors%20%26%20Motors%20John%20Deere!5e0!3m2!1sen!2sin!4v1735826779627!5m2!1sen!2sin" 
  allowfullscreen="" 
  loading="lazy" 
  style="border:0; width:100%; height:400px;" 
  referrerpolicy="no-referrer-when-downgrade">
</iframe>

        <form action="https://formsubmit.co/chinmayshete4@gmail.com" method="POST">

            <input type="text" name="Name" placeholder=" Name" class="box" autocomplete="off" required>
            <input type="email" name="Email" placeholder=" Email" class="box" autocomplete="off" required>
            <input type="text" name="Subject" placeholder=" Subject" class="box" autocomplete="off" required>
            <input type="number" name="Phone" placeholder=" Phone" class="box" autocomplete="off" required>
            <textarea name="message" name="Message" placeholder=" Message" class="box" cols="30" rows="10" autocomplete="off"></textarea>
            <button type="submit" >Submit</button>
        </form>

    </div>

</section>

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>Area covered</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> karad </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> patan </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> satara </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> sangli </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> kolhapur </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> tractors </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="tel:+919822021063"> <i class="fas fa-phone"></i> +919822021063 </a>
            <a href="tel:+919850990863"> <i class="fas fa-phone"></i> +919850990863 </a>
            <a href="mailto:digvijay_bmk@yahool.co.in"> <i class="fas fa-envelope"></i> digvijay_bmk@yahoo.co.in </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Kale-Pachwad road, malkapur. karad-415539 </a>
        </div>

        <div class="box">
            <h3>connect us with</h3>
            <a href="https://www.facebook.com/Bharat-Motors-Tractors-Karad-100278871780279/"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-whatsapp"></i>whatsapp</a>
        </div>

    </div>

    <div class="credit"> created by Mr. Abhishek Shingan And Rutuja Tate. BCA-YMIM. Karad | all rights reserved to Bharat motors and tractors karad</div>

</section>










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="script.js"></script>



</body>
</html>