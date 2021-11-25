<?php
session_start();
echo "WELCOME"."  ".strtoupper($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK-justBuyUnique</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--NAVIGATION BAR -->
  <nav class ="navbar">
    <div class="nav">

        <h1>𝓟𝓡𝓐𝓚</h1>
        <div class="nav-items">
          <div class="search">
            <input type="text" class="search-box" placeholder="Search-unique">
            <button class="search-btn"> Search</button>
          </div>
        <a href="login.php"><img src="user.png" alt="user"></a>
        <a href="#"><img src="cart.png" alt="cart"></a>      
      </div>
    </div>
  </nav>

<!--DROPDOWN MENU-->  
  <div class="menu">
    <ul>

        <!--JEWELLERY-->

      <li>
        <a href="#"></i>Jewellery<i class="fa fa-caret-down"></i></a>
        <div class="dropdown1">
          <ul>
            <li><a href="viewmore1-1.html">Rings</a></li>
            <li><a href="viewmore1-2.html">Necklace</a></li>
            <li><a href="viewmore1-3.html">earings</a></li>
            <li><a href="viewmore1-4.html">Braclets</a></li>
            <li><a href="viewmore1-4.html">Braclets</a></li>
          </ul>                      
        </div>
      </li>

          <!--CLOTHING-->
      
      <li>
        <a href="#">Clothing<i class="fa fa-caret-down" ></i></a>
        <div class="dropdown1">
          <ul>
            <li><a href="viewmore2-1.html">Women's</a></li>
            <li><a href="viewmore2-2.html">Men's</a></li>
            <li><a href="viewmore2-3.html">Kid's</a></li>
            <li><a href="viewmore2-4.html">Old people</a></li>
          </ul>
        </div>
      </li>

            <!--FOOTWEAR-->

      <li>
        <a href="#">Footwear<i class="fa fa-caret-down" ></i></a>
        <div class="dropdown1">
          <ul>
            <li><a href="viewmore3-1.html">Men's </a></li>
            <li><a href="viewmore3-2.html">Women's</a></li>
            <li><a href="viewmore3-3.html">Kid's</a></li>
            <li><a href="viewmore3-4.html">Kohlapuri</a></li>
          </ul>
        </div>
      </li>

            <!--VINTAGE-->

      <li>
        <a href="#">Vintage <i class="fa fa-caret-down" ></i></a>
        <div class="dropdown1">
          <ul>
            <li><a href="viewmore4-1.html">Telephone</a></li>
            <li><a href="viewmore4-2.html">Telescope </a></li>
            <li><a href="viewmore4-3.html">Gramophone</a></li>
            <li><a href="viewmore4-4.html">Handicraft</a></li>
          </ul>
        </div>
      </li>

            <!--GIFT ITEM-->

      <li>
        <a href="#">Gift items<i class="fa fa-caret-down" ></i></a>
        <div class="dropdown1">
          <ul>
            <li><a href="viewmore5-1.html">Wallet</a></li>
            <li><a href="viewmore5-2.html">Watch</a></li>
            <li><a href="viewmore5-3.html">Charcuterie</a></li>
            <li><a href="viewmore5-4.html">Custom Name Necklace</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>

<!--FIRST SECTION-->
<section class="product">
<div class="first">    
  <div class="container2">
    <div class="images">
      <p>ASDE
      <a href="viewmore1-1.html">
      <span class="discount-tag">29% off</span>
      ASDF
        <img src="rings.jpg" class="product" alt="">
      </a>
      </p>
      ASDF
    </div>
  </div>

  <div class="container2">
    <div class="images">
      <p>
      <a href="viewmore1-2.html">
      <span class="discount-tag">21% off</span>
        <img src="necklace.jpg" class="product" alt="">
      </a>
      </p>
    </div>
  </div>

  <div class="container2">
    <div class="images">
      <p>
      <a href="viewmore1-3.html">
      <span class="discount-tag">25% off</span>
        <img src="earings.jpg" class="product" alt="">
      </a>
      </p>
    </div>
  </div>

  <div class="container2">
    <div class="images">
      <p>
      <a href="viewmore1-4.html">
      <span class="discount-tag">49% off</span>
        <img src="bangles.jpg" class="product" alt="">
      </a>
      </p>
    </div>
  </div>
</div>
</section>

<hr>
    <!--SECOND -->
<section class="product">
<div class="first">    
  <div class="container2">
    <div class="images">
      <p>
      <a href="viewmore2-1.html">
      <span class="discount-tag">59% off</span>
        <img src="rings.jpg" class="product" alt="">
      </a>
      </p>
    </div>
  </div>

  <div class="container2">
    <div class="images">
      <p>
      <a href="viewmore2-2.html">
      <span class="discount-tag">69% off</span>
        <img src="necklace.jpg" class="product" alt="">
      </a>
      </p>
    </div>
  </div>

  <div class="container2">
    <div class="images">
      <p>
      <a href="viewmore2-3.html">
      <span class="discount-tag">19% off</span>
        <img src="earings.jpg" class="product" alt="">
      </a>
      </p>
    </div>
  </div>

  <div class="container2">
    <div class="images">
      <p>
      <a href="viewmore2-4.html">
      <span class="discount-tag">79% off</span>
        <img src="bangles.jpg" class="product" alt="">
      </a>
      </p>
    </div>
  </div>
</div>
</section>

<hr>

<!--THIRD-->
<section class="product">
<div class="first">    
  <div class="container2">
    <div class="images">
      <p>
      <a href="viewmore3-1.html">
      <span class="discount-tag">74% off</span>
        <img src="rings.jpg" class="product" alt="">
      </a>
      </p>
    </div>
  </div>

  <div class="container2">
    <div class="images">
      <p>
      <a href="viewmore3-2.html">
      <span class="discount-tag">35% off</span>
        <img src="necklace.jpg" class="product" alt="">
      </a>
      </p>
    </div>
  </div>

  <div class="container2">
    <div class="images">
      <p>
      <a href="viewmore3-3.html">
      <span class="discount-tag">19% off</span>
        <img src="earings.jpg" class="product" alt="">
      </a>
      </p>
    </div>
  </div>

  <div class="container2">
    <div class="images">
      <p>
      <a href="viewmore3-4.html">
      <span class="discount-tag">15% off</span>
        <img src="bangles.jpg" class="product" alt="">
      </a>
      </p>
    </div>
  </div>
</div>
</section>

<hr>
<!--FOURTH-->
<section class="product">
<div class="first">    
  <div class="container2">
    <div class="images">
      <p>
      <a href="viewmore4-1.html">
      <span class="discount-tag">38% off</span>
        <img src="rings.jpg" class="product" alt="">
      </a>
      </p>
    </div>
  </div>

  <div class="container2">
    <div class="images">
      <p>
      <a href="viewmore4-2.html">
      <span class="discount-tag">29% off</span>
        <img src="necklace.jpg" class="product" alt="">
      </a>
      </p>
    </div>
  </div>

  <div class="container2">
    <div class="images">
      <p>
      <a href="viewmore4-3.html">
      <span class="discount-tag">24% off</span>
        <img src="earings.jpg" class="product" alt="">
      </a>
      </p>
    </div>
  </div>

  <div class="container2">
    <div class="images">
      <p>
      <a href="viewmore4-4.html">
      <span class="discount-tag">17% off</span>
        <img src="bangles.jpg" class="product" alt="">
      </a>
      </p>
    </div>
  </div>
</div>
</section>

<hr>

  <br>
  <br>
  <br>
  <br>
  <div class="bottom-mid">WHAT IS PRAK ?</div>
  <br>
  <h3><a href="files/story.html">Read our wonderfully weird story</a></h3>
 
 
  <br>
  <div class="main">
    <div class="outer">
      <h4>Organisation for handmade </h4><br>
        <p> Prak is an Indian Based e-commerce website which is a go-to trending b2b site for millions of makers of handmade goods,vintage items and craft products.It is a small start up where people will come together go buy items and surely take advantage of it.</p>
          <strong><a href=""><u>Here are some of the ways we’re making a positive impact, together.</u></a></strong>
     
    </div>
 
 
    <div class="outer1">
      <h4>Efficient Creators</h4><br>
        <p>There's no Prak warehouse just few of people selling the things they love.we make the whole process easy,helping you connect directly with makers to find something extraordinary.</p>
   
    </div>
 
 
    <div class="outer2">
      <h4>Composure</h4><br>
        <p>Your Privacy is the highest priority of our dedicated team,and if you ever need assistance, we are always ready to step in for support.</p>
     
    </div>
  </div>
 
  <br>
  <br>
<!-- reach us at -->
  <div class="bottom-container">
    <h2>Reach us at:</h2>
    <a class="footer-link" href="mailto:prakhub.inc@gmail.com"><i class="social-icon fas fa-envelope fa-2x"></i></a>
    <a class="footer-link" href="https://www.instagram.com/"><i class="social-icon fab fa-instagram fa-2x"></i></a>
    <a class="footer-link" href="https://www.telegram.com/9170852086"><i class="social-icon fab fa-telegram fa-2x"></i></a>
    <a class="footer-link" href="https://twitter.com/home"><i class="social-icon fab fa-twitter fa-2x"></i></a>
  </div>


  <br>
  <br>
  <footer class="footer"> 
    <div class="contain">
        <div class="row"> 
        <div class="foot-col">
        <h3>The Company</h3>
        <ul>
            <li><a href="index.php">Prak-in</a></li>
            <li><a href="Termsofuse.html">Terms Of Use</a></li><!-- terms of use -->
            <li><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448916.46637213975!2d77.02115597496018!3d28.47473097589749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cddb5f03b5b71%3A0x391747e4bedfcb19!2sHaldiram&#39;s!5e0!3m2!1sen!2sin!4v1622612697128!5m2!1sen!2sin" target="iframe_a">Site Map</a></li>
            <li><iframe src="" name="iframe_a" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
           </ul>
        </div>
      <div class="foot-col">
        <h3>Guide</h3>
              <ul>
            <li><a href="https://www.builderfly.com/how-to-get-products-to-sell-on-my-ecommerce-website-guide/">How To Buy</a></li>
            <li><a href="https://www.bigcommerce.com/blog/source-products-online-business/">How To Sell</a></li>
           </ul>
        </div>
      <div class="foot-col">
        <h3>Apple-Pie Order</h3>
        <ul>
            <li><a href="bulkorder.html">Bulk Orders</a></li>
            <li><a href="affilates.html">Affilates</a></li>
       </ul>
    </div>
      <div class="foot-col">
        <h3>Help & Support</h3>
        <ul>
            <li><a href="contactUs.html">Contact Us</a></li>
            <li><a href="FAQ.html">FAQ's</a></li>
            <li><a href="privacypolicy.html">Privacy Policy</a></li>
            <li><a href="termsnconditions.html">Terms & Conditions</a></li>
           </ul>
        </div>
      </div>
    </div>
    <div class="foot1">
      <p>Register for Free - <a href="register.php">  Signup!</a></p>
    </div>
    <div class="foot2">
      <ul>
        <a href="mailto:prakhub.inc@gmail.com"><i class="fa fa-envelope"></i></a>
        <a href="https://www.telegram.com/9170852086"><i class="fab fa-telegram"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a>
      </ul>
    </div>
  <div class="foot3">
    <p>Copyright &copy; 2021 All Rights by Prakhub.inc</p>
  </div>
 
</body>

<script src="index.js"></script>
</html>
