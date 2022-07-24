<!--this is doc type-->
<!DOCTYPE html>
<!--The HTML lang attribute is used to identify the language of text content on
the web. This information helps search engines return language specific results,
and it is also used by screen readers that switch language profiles to provide
the correct accent and pronunciation.-->

<!--out html code starts here-->
<html lang="en">
  <!--our head tag starts here-->
  <head>
    <meta charset="UTF-8" />
    <!--characters are set to be UTF-8-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--it enocourages the responsive designs so that page looks better in every size screen either it is mobile, laptop, ipad etc.-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--to display the contents in highest compatibility mode-->
    <meta name="description" content="this is  description" />
    <meta
      name="keywords"
      content="html, css, js, visitnepal, tour nepal, explore nepal"
    />
    <meta name="robots" content="INDEX, FOLLOW" />
    <!--robots describes if your website should be scrolled or not or followed or not-->

    <!--custom css file  link-->
    <link rel="stylesheet" href="css/style.css" type="text/css"></link>
    <link rel="stylesheet" href="css/responsive.css" type="text/css"></link>
    <link rel="stylesheet" href="css/spb.css" type="text/css"></link>
   <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,600&display=swap" rel="stylesheet"> 
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,500;1,600&display=swap" rel="stylesheet"> 
   <script src="https://kit.fontawesome.com/8aa1c76097.js" crossorigin="anonymous"></script>
</head>
  <body>
      
   <!--Navigation bar starts from here-->
   <nav>
       <div class="container">
           <div class="menu-parent">
               <div class="logo-parent">
                  <a href="index.html"><h2>Nepal</h2></a>
               </div>
               <div class="nav">
               <ul>
            <li><a class="hover-menu" href="index.php">Home</a></li>
            <li><a class="hover-menu" href="places.php">Travel</a></li>
            <li><a class="hover-menu" href="gallery.php">Gallery</a></li>
            <li><a class="hover-menu" href="https://www.charlotteplansatrip.com/en/nepal-en/">Blog</a></li>
            <li><a class="hover-menu" href="includes/signup.php">Signup</a></li>
            <li><a class="hover-menu" href="includes/login.php">login</a></li>
          </ul>
                </div>
                <div id="button-toggle">
                 <i class="fa fa-bars"></i>
               </div>
           </div>
       </div>
   </nav>
   <!--nav bar ends here-->

   <!--first section starts here to modify the head texts-->
   <section id="welcome-text-Nepal">
     <div class="container">
       <h2>The official visit site of Nepal, one of the top Asian country</h2>
       <p>Here are some exciting places of Nepal .... see the galleries bellow!</p>
     </div>
   </section>
   <!--first section ends here-->

   <!--second section starts from here to create the slides-->
   <section id="slides-parent">
    <div class="container">
      <div class="slides">
        <div class="slide-first">
          <div class="slide-detail">
            <p>Bunjee</p>

          </div>
        </div>
        <div class="slide-first slide-second">
          <div class="slide-detail">
            <p>Swoyambhunath</p>

          </div>
        </div>
        <div class="slide-first slide-third">
          <div class="slide-detail">
            <p>Rupandehi/Lumbini</p>

          </div>
        </div>
        <div class="slide-first slide-fourth">
          <div class="slide-detail">
            <p>Garden of Dreams</p>

          </div>
        </div>
        <div class="slide-first slide-fifth">
          <div class="slide-detail">
            <p>Ilam</p>

          </div>
        </div>
        <div class="slide-first slide-sixth">
          <div class="slide-detail">
            <p>sanga</p>

          </div>
        </div>
        <div class="slide-first slide-seventh">
          <div class="slide-detail">
            <p>Pokhara</p>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--second section ends here-->


   <!--fourth section starts here to form the gallery-->
   <section id="gallery">
     <div class="container">
       <div class="row">
         <div align="center" class="filter-btn-parent">
           <button class="filter-button" data-filter="all">ALL</button>
           <button class="filter-button" data-filter="temple">TEMPLE</button>
           <button class="filter-button" data-filter="hill_mountains">HILLS AND MOUNTAINS</button>
           <button class="filter-button" data-filter="greenary">GREENARY</button>
         </div>
         <div class="filter-gall-parent">
           <div class="gallery-item filter temple">
             <!--created three classes
            1. gallery-item to use the custom class
            2. filter to connect the button and the galleries
            3. temple using from the data-filter-->
            <img class="img-responsive" src="images/whitetemplepokhare.jpg"/>
           </div>
           <div class="gallery-item filter hill_mountains">
             <img class="img-responsive" src="images/chandragirihill.jpg"/>
           </div>

           <div class="gallery-item filter temple">
             <img class="img-responsive" src="images/swoyambhunathstupa.jpg"/>
           </div>
            
           <div class="gallery-item filter greenary">
             <img class="img-responsive" src="images/ilamnepal.jpg"/>
           </div>

           <div class="gallery-item filter greenary">
             <img class="img-responsive" src="images/nagarkot.webp"/>
           </div>

           <div class="gallery-item filter hill_mountains">
             <img class="img-responsive" src="images/mounteverest.jpg"/>
           </div>

           <div class="gallery-item filter hill_mountains">
             <img class="img-responsive" src="images/kanchanganga.jpg"/>
           </div>

           <div class="gallery-item filter temple">
             <img class="img-responsive" src="images/pashupati.jpg"/>
           </div>

           <div class="gallery-item filter greenary">
             <img class="img-responsive" src="images/helambu.webp"/>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!--fourth section gallery section ends here-->

  <!--info footer starts from here-->
  <footer>
     <div class="container">
       <div class="footer-parent">
         <div class="footer-1st">
          <h3 class="footer-logo-heading">Nepal</h3>
         </div>
         <div class="footer-1st footer-info">
           <h3>Follow Us</h3>
           <ul>
           <li><a href="#"> <i class="fab fa-facebook-f"></i> facebook </a></li>
           <li><a href="#"> <i class="fab fa-twitter"></i> twitter </a></li>
           <li><a href="#"> <i class="fab fa-instagram"></i> instagram </a></li>
           <li><a href="#"> <i class="fab fa-linkedin"></i> linkedin </a></li>
           </ul>
         </div>
         <div class="footer-1st footer-info">
            <h3>Extra Links</h3>
             <ul>
             <li><a href="#"><i class="fas fa-angle-right"></i>  Ask Questions</a></li>
             <li><a href="#"><i class="fas fa-angle-right"></i>  Terms and conditions</a></li>
             <li><a href="#"><i class="fas fa-angle-right"></i>  Tourism lele</a></li>
             <li><a href="#"><i class="fas fa-angle-right"></i>  Tourism lele</a></li>
           </ul>
         </div>
         <div class="footer-1st footer-info">
            <h3>Need any help ?</h3>
            <ul>
              <li><a href="#"><i class="fas fa-angle-right"></i>  contact us in +123-456-8790</a></li>
              <li><a href="#"><i class="fas fa-angle-right"></i>  email us at visitnepal@gmail.com</a></li>
            </ul>
         </div>
       </div>
     </div>
     <!--ifo footer ends here-->
     
      <p class="copyright">
        © 2022 | Created and Designed By |<a href="https://github.com/iamisha">
          Isha Hitang</a
        >
        and <a href="https://github.com/priyanka201725">Priyanka Sinha</a> |
      </p>
    </footer>
    <!--adding the js external files jquery and another external.js-->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="js/external.js"></script>
  </body>
</html>
