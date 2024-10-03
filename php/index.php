<?php


include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome <?php echo $_SESSION['username']; ?>!</title>
<link rel="stylesheet" href="../styles/style.css" />
<title>home</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" crossorigin="anonymous"></script>

  <link rel="shortcut icon" href="../images/shirt.png" >
  <link rel="stylesheet" type="text/css" href="../styles/homestylen.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
        /* Social media icons */
        .column1 {
            background-color: black;
            width: 100%;
            height: 120px;
            margin-top: 150px;
            margin-bottom: -150px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .column1 h2 {
            color: white;
            font-family: Century Gothic;
            margin: 0;
            padding-right: 20px;
        }

        .fa {
            margin-right: 20px;
            font-size: 24px;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .fa:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        /* Footer */
        footer {
            border: 1px solid darkgrey;
            background-color: #111345;
            margin-top: 150px;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        footer p {
            margin: 0;
        }

        footer a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #14cde7;
        }

        .top {
            color: white;
            text-decoration: none;
            font-size: 24px;
            margin-left: 10px;
            transition: color 0.3s ease;
        }

        .top:hover {
            color: #14cde7;
        }
    </style>
</head>
<body>




  




<A name="top"></A>

    <!-- MENUS -->
   
        <nav class="topnav" id="myTopnav">
          <img class="attirent" src="../images/wardrobe.png" width=150 height=75>

           <label  for="drop" class="toggle" >MENU <i class="fa fa-bars" style="font-size: 20px;"></i></label>
           <input type="checkbox" id="drop" />


          <ul class="menu">
            
            <li><a href="logout.php" style="font-size: 15px;" >LOGOUT <i class="fa fa-sign-out" style="font-size:16px"></i></a>
                              

            </li>

            <li><a href="#">SELECT YOUR PLACE   <i class="fa fa-chevron-down" style="font-size:12px"></i></a>
                              
                              <ul>
                                <li><a href="contact.php">MUMBAI  <img src="../images/mumbai.jpeg" width="30" height="25"></li>
                                <li><a href="contact.php"><a href="#"><a href="#">AGRA  <img src="../images/agra.png"  width="30" height="25"></li>
                                <li><a href="contact.php"><a href="#">PUNE  <img src="../images/pune.png" width="50" height="30"></li>
                                <li><a href="contact.php">DELHI  <img src="../images/delhi.png" width="50" height="40"></li>   
                              </ul>         
            </li>
            
            <li><a href="#">OFFERS  <i class="fa fa-chevron-down" style="font-size:15px"></i></a>
              <ul>
                <li><a href="../templates/festiveoff.html">FESTIVE   <i class="fas fa-gifts" style="font-size:15px"></i></a></li>
                <li><a href="../templates/wedoffers.html">WEDDING   <i class="fas fa-gifts" style="font-size:15px"></i></a></li>
              </ul>
            </li>
            <li><a href="#">CATEGORY  <i class="fa fa-chevron-down" style="font-size:15px"></i></a>

              <ul>
                <li><a href="../templates/weddingmen.html">MEN   <i class="fas fa-male" style="font-size:15px"></i></a>
                  <ul>
                    
                    <li><a href="weddingmen.html">WEDDING </a></li>
                    
                   
                  </ul>
                </li>
                <li><a href="../templates/weddingwomen.html">WOMEN   <i class="fas fa-female" style="font-size:15px"></i></a>
                  <ul>
                    
                    <li><a href="weddingwomen.html">WEDDING  </a></li>
                    
                    
                  </ul>
                </li>
                

              </ul>
            </li>
            
            <li><a href="contact.php">CONTACT US</a></li>
     
          </ul>

       
        </nav>

      


        <!--SLIDER--> 
             

             <div class="slideshow">


              <div class="myslides fade">

                <div class="number">
                  1/3
                  </div>
                  <img src="../images/quick.jpg" style="height:75%; width:100%">
                    <div class="text">FORMAL TRIBE</div>

                    
                </div>

                <div class="myslides fade">

                <div class="number">
                  2/3
                  </div>
                  <img src="../images/wedd.jpg" style="height:75%; width:100%" class="lehenga">
                    <div class="text">WEDDING/TRADITIONAL OCCASION</div>
                </div>

                <div class="myslides fade">

                <div class="number">
                  3/3
                  </div>
                  <img src="../images/womenlehenga.jpg" style=" height: 75%; width:100%">
                    <div class="text">FESTIVE VIBES</div>
                </div>
                 
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a> 
                <a class="next" onclick="plusSlides(1)">&#10095;</a>  

         </div>
         <br>
         <div style="text-align: center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
         </div> 
      </div>


      <script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("myslides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }
</script>




<!-- contents-->

<div class="coltext" style="background-color: white;">
     <h1><u>How Attirent Works ?</u></h1>
</div>


      <div class="row" >
        
  <div class="column" style="background-color:white; ">
    <h2>Select Your Style</h2>
    <div class="zoom">
     <img src="../images/Hanger.png" style="zoom:50px; margin-top: -50px; margin-left: 6px;"> 
   </div>
    <p  align="center">Pick your perfect style from our collection of designer outfits and accessories.</p>
  </div>


  <div class="column" style="background-color:white;">
    <h2>Book Your Fabric</h2>
     <div class="zoom">
    <img src="../images/book.png" style="zoom:50px; margin-top: -50px; margin-left: 6px;">
      </div>
    <p align="center">Book your look for 3, 5, 7 or 10 days. <br>Outfit will be altered to your size and dry cleaned before delivery.</p>
  </div>


  <div class="column" style="background-color:white;">
    <h2>Flaunt It</h2>
    <div class="zoom">
    <img src="../images/flaunt.png" style="zoom:50px; margin-top: -50px; margin-left: 6px;">
  </div>
    <p align="center">Flaunt your look with that <br>perfect outfit chosen by you and <br>enjoy the compliments</p>
  </div>



  <div class="column" style="background-color:white;">
    <h2>Return It</h2>
    <div class="zoom">
    <img src="../images/Freepickup.png" style="zoom:50px; margin-top: -50px; margin-left: 6px;">
  </div>
    <p>Pack the outfit and we'll pick it<br> up a day after your occasion or the<br> dates chosen by you.</p>
  </div>

</div>





<!-- contents-->

<div class="coltextone" style="background: transparent; margin-bottom: 20px; margin-top:-50px;height:200px;margin-left: 0px; color: #3F001B;text-shadow: 2px 2px #FF022C;">
 <u><span class="blinking" style="font-size: 60px;  margin-top:-150px;border-color: solid black ; "><b> ! CATEGORIES ! </b></span></u>
     
</div>



<!--column1 and row1-->
<div class="row2">
  <div class="column2" style="background-color:grey;width: 50%; -webkit-box-shadow: inset 0 0 50px #000000; height:410px;background: linear-gradient(to top right, #ffccff 0%, #ffffcc 100%);">
    
    <h1 style="color: #FF004D;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Style means being curious and having the confidence to choose what you love.</h1>
    <h1 style="color: #FF004D;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Think like a lady and act like a queen.</h1>
  
    <span class="blinking" style="color: white;margin-left: -20px;margin-top: -52%;border-radius: 50px; border-style: double;border-color: solid black ; padding: 10px;"><b>ATTIRE FAB!</b></span>
 <div>
   <!--button-->
    <button class="btn info" onclick="location.replace('festiveoff.html');" style="font-size: 20px;border-radius: 20px;box-shadow: 10px 12px 11px -1px rgba(0,0,0,0.48)">FESTIVE</button>
</div>
<div>
    <button class="btn info" onclick="location.replace('wedoffers.html');" style="margin-top: 20px;font-size: 20px;border-radius: 20px;box-shadow: 10px 12px 11px -1px rgba(0,0,0,0.48)">WEDDING</button>
 </div>

 </div>
 <div class="column2" style="background-color:transparent;width: 50%;height: 410px;">
    <img src="../images/vogueweddingwomen.jpg" style="width: 670px; height: 410px" >
 </div>
  
</div>








<!--column2 and row2-->
<div class="row3">
  <div class="column3" style="background-color:transparent;width: 50%; height:410px;">
    <img src="../images/charbaugwedding.jpg" style="width: 675px; height: 410px; ">
  </div>
  <div class="column3" style="background-color:grey;-webkit-box-shadow: inset 0 0 50px #000000;width: 50%;height:410px;background: linear-gradient(to bottom left, #66ffff 0%, #ffffcc 100%);">
    <h1 style="color: #140140;text-shadow: -2px 0 #F8FD94, 0 2px #F8FD94, 1px 0 #F8FD94, 0 -1px #F8FD94;font-family:Candara;">Don't let anyone dull your sparkle.</h1>
    <h1 style="color: #140140;text-shadow: -2px 0 #F8FD94, 0 2px #F8FD94, 1px 0 #F8FD94, 0 -1px #F8FD94;font-family:Candara;">Dress as per your requirements for your own wedding only @ATTIRENT.</h1>
    <span class="blinkingone" style="color: white;margin-left: -20px;margin-top: -50%;border-radius: 50px; border-style: double;border-color: solid black ; padding: 10px;"><b>TRIBAL CHOICE!</b></span>
   <div>
   <!--button-->
    <button class="btn info" onclick="location.replace('../templates/festiveoff.html');" style="font-size: 20px;border-radius: 20px;box-shadow: 10px 12px 11px -1px rgba(0,0,0,0.48)">FESTIVE</button>
</div>
<div>
    <button class="btn info" onclick="location.replace('../templates/wedoffers.html');" style="margin-top: 20px;font-size: 20px;border-radius: 20px;box-shadow: 10px 12px 11px -1px rgba(0,0,0,0.48)">WEDDING</button>
</div> 
  
  </div>
</div>


  




 <div class="row4">
        
  


  <div class="column4" style="background: #ffe7ad;-webkit-box-shadow: inset 0 0 50px #000000; height: 430px;width: 675px;margin-top: -55px">
   <!--audio-->
    <audio controls autoplay class="audio" style="margin-left: 100px; margin-top: 30px;" >
        <source src="../images/tobu-higher.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>
      <h3 align="center" style="color:#f00362; margin-left: 100px;">Enjoy The Above Song and Keep Renting !!!!</h3>
      <u style="color: #f00362"><h1 align="center" style="color:#f00362;">About Us </h1></u>
      <p style="margin-left:50px; font-weight: bold; color:#f00362">We Have created A website where people can rent clothes for a specific period of time. Nowdays buying traditional clothes requires lots of money and clothes used only for particular event only, but we here from team attirent gives service of renting clothes so that u dont need to waste your money for a specific event.</p>
      <h2 style="margin-left:50px; font-weight: bold; color:#f00362">Keep Wearing Keep Renting!!!</h2>
  </div>



  <div class="column4" style="height:50px ;width: 670px;">
    <!--video-->      
      <video width="650" poster="attire.jpg" height="470" controls style="margin-top: -15px">
  <source src="../images/attirent.mp4" type="video/mp4">
  
Your browser does not support the video tag.
</video>
  </div>

</div>










            


<!---social media icons-->


<div class="column1">
    <h2>Follow Us On !</h2>
    <a href="#" class="fa fa-facebook" style="background: #3B5998"></a>
    <a href="#" class="fa fa-instagram" style="background: #125688"></a>
    <a href="#" class="fa fa-pinterest" style="background: #cb2027"></a>
    <a href="#" class="fa fa-youtube" style="background: #bb0000"></a>
  </div>

  <!-- Footer -->
  <footer>
    <p>Copyright © 2024 Rental.com | All Rights Reserved <a href="#top" class="top">^</a></p>
  </footer>
                
    

  


</body>
</html>
