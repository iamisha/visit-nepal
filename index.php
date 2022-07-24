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
  <meta name="keywords" content="html, css, js, visitnepal, tour nepal, explore nepal" />
  <meta name="robots" content="INDEX, FOLLOW" />
  <!--robots describes if your website should be scrolled or not or followed or not-->

  <!--custom css file  link-->
  <link rel="stylesheet" href="css/style.css" type="text/css">
  </link>
  <link rel="stylesheet" href="css/responsive.css" type="text/css">
  </link>
  <link rel="stylesheet" href="css/spb.css" type="text/css">
  </link>
  <link
    href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,600&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,500;1,600&display=swap"
    rel="stylesheet">
  <script src="https://kit.fontawesome.com/8aa1c76097.js" crossorigin="anonymous"></script>
</head>
</head>

<body>
  <!--to add the arrow to go up of the website-->
  <div id="arrow">
    <i class="fa fa-arrow-up"></i>
  </div>
  <!--Navigation bar starts from here-->
  <nav>
    <div class="container">
      <div class="menu-parent">
        <div class="logo-parent">
          <a href="index.php">
            <h2>Nepal</h2>
          </a>
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

  <!--header section starts from here-->
  <header>
    <div class="container">
      <div class="header-info-parent">
        <!--Creating heading class to create the dynamic text haha-->
        <h1 class="typewrite" data-period="2000" data-type='[ "Happiness is closer than you think",
         "Adventure awaits, go find it.", "Dont be a tourist, be a traveller." ]'></h1>
        <p>Land of mystic mountains and tales, Nepal is a paradise for hikers hidden between China and India. It’s been
          an important trading point for silk and it is also said that Nepal is the birth place of Buddha. There are
          unlimited beautiful and asthetic places to visit. Know more thing about Nepal</p>
        <a href="https://en.wikipedia.org/wiki/Nepal">Read More</a>
      </div>
      <div class="video">
        <video id="video" autoplay loop muted>
          <!--to colclude the video, we use source-->
          <source
            src="https://player.vimeo.com/progressive_redirect/playback/692674331/rendition/360p?loc=external&oauth2_token_id=1027659655&signature=028df634fd9e4dcdeeaffa2475039b6c5a81d9440334192f8c6a57adda5fe601"
            type="video/mp4" />
        </video>
      </div>
    </div>
  </header>
  <!--header section ends here-->

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

  <!-- services section starts  -->

  <section class="services">

    <h1 class="heading-title"> our services </h1>

    <div class="box-container">

      <div class="box">
        <img src="images/icon-1.png" alt="">
        <h3>adventure</h3>
      </div>

      <div class="box">
        <img src="images/icon-2.png" alt="">
        <h3>tour guide</h3>
      </div>

      <div class="box">
        <a href="#packing_tips"><img src="images/icon-3.png" alt=""></a>
        <h3>trekking</h3>
      </div>

      <div class="box">
        <img src="images/icon-4.png" alt="">
        <h3>camp fire</h3>
      </div>

      <div class="box">
        <img src="images/icon-5.png" alt="">
        <a href="https://www.wikiloc.com/trails/offroading/nepal"><h3>off road</h3></a>
      </div>

      <div class="box">
        <img src="images/icon-6.png" alt="">
        <h3>camping</h3>
      </div>

    </div>

  </section>

  <!-- services section ends -->

  <!-- home packages section starts  -->

  <section class="home-packages">

    <h1 class="heading-title"> our packages </h1>

    <div class="box-container">

      <div class="box">
        <div class="image">
          <img src="images/travelimage.jpeg" alt="">
        </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>Mount Everest attracts many climbers, including highly experienced mountaineers!</p>
          <a href="includes/signup.php" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/swoyambhunathstupa.jpg" alt="">
        </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>Lumbini, the Birthplace of the Lord Buddha  Siddhartha Gautama!</p>
          <a href="includes/signup.php" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/whitetemplepokhare.jpg" alt="">
        </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>White temple of Nepal located in Pokhara
            religious!</p>
          <a href="includes/signup.php" class="btn">book now</a>
        </div>
      </div>

    </div>

    <div class="load-more"> <a href="https://www.thrillophilia.com/places-to-visit-in-nepal" class="btn">load more</a>
    </div>

  </section>

  <!-- home packages section ends -->

  <!-- home offer section starts  -->

  <section class="home-offer">
    <div class="content">
      <h3>upto 50% off</h3>
      <p>Visit amazing three places of Nepal with an amazing offer. This holiday, make your best holiday by visiting one of the best places of Nepal at very reasonable price
        Hurry up !!</p>
      <a href="includes/signup.php" class="btn">book now</a>
    </div>
  </section>

  <!-- home offer section ends -->



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
            <img class="img-responsive" src="images/whitetemplepokhare.jpg" />
          </div>
          <div class="gallery-item filter hill_mountains">
            <img class="img-responsive" src="images/chandragirihill.jpg" />
          </div>

          <div class="gallery-item filter temple">
            <img class="img-responsive" src="images/swoyambhunathstupa.jpg" />
          </div>

          <div class="gallery-item filter greenary">
            <img class="img-responsive" src="images/ilamnepal.jpg" />
          </div>

          <div class="gallery-item filter greenary">
            <img class="img-responsive" src="images/nagarkot.webp" />
          </div>

          <div class="gallery-item filter hill_mountains">
            <img class="img-responsive" src="images/mounteverest.jpg" />
          </div>

          <div class="gallery-item filter hill_mountains">
            <img class="img-responsive" src="images/kanchanganga.jpg" />
          </div>

          <div class="gallery-item filter temple">
            <img class="img-responsive" src="images/pashupati.jpg" />
          </div>

          <div class="gallery-item filter greenary">
            <img class="img-responsive" src="images/helambu.webp" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--fourth section gallery section ends here-->

  <!--packing tips starts from here -->
  <div class="container">
  <div id="packing_tips" style="text-align: center; font-size: 14px;border: 2px solid teal; margin: 10px;">
<h2 style="padding: 10px; color: teal;">PACKING TIPS</h2>
<h3>Bipin Khanal from our supplier Exodus shares his packing tips for trekking in Nepal:</h3>

<p style="padding: 20px;">
“Layers are the way to go as opposed to big jackets, certainly for lower altitude treks; I would bring a couple of lighter fleeces and long sleeved tops and layer up that way. Some people like to use walking poles and I think they’re especially useful on long days of descent as it takes the weight off you knees, though it’s generally adults and people in their 40s and upwards who use them. There are outdoor shops in Thamel where you can pick up additional trekking kit and clothing for a fraction of the price – I wouldn’t want to guarantee the quality, but there is opportunity to grab something if you forget it. It’s always the case that you don’t need everything you think you will; as a rule of thumb you’ll probably need half of what you originally pack.” 
</p>
<h2 style="padding: 20px;">Advice on coping with Altitude</h2>
<h3>Bipin Khanal from our supplier Exodus shares his advice on coping with altitude:</h3>
<p style="padding: 20px;">“Altitude affects people very differently, so you need to walk at a slower pace than the pace you’d trek at somewhere in the UK, and when trekking in a group the Nepali leaders will always be sure to hold you back anyway. There are acclimatization days and walks that are built into trekking itineraries especially to get trekker’s bodies used to the environment, which are very helpful for the next day’s higher altitude trekking. There will always be some people that are affected by altitude sickness, but the staff that are leading the trip are so attune to the very first signs that they can identify those that are not coping so well early on. Always let your leader know if you are experiencing headaches or a significant shortening of breath as they are able to take you down very quickly if they see fit.”</p>
<h2 style="padding: 10px; color: teal;">EXTRA TIPS</h2>
<p style="padding: 20px"><b>Visit your GP or travel clinic at least 6-8 weeks before departure</b> to ensure you have all the necessary vaccinations and that they are up to date.
     <b>Medical treatment is expensive at western travellers&#8217; clinics in Nepal</b> and healthcare is poor in most places outside the Kathmandu Valley and Pokhara. <b>Make sure you have adequate travel health insurance</b> and accessible funds to cover the cost of any medical treatment abroad, emergency helicopter evacuation and repatriation.
     <b>If you do need to receive medical treatment in Nepal, up-front payment may be required</b> even if it is covered by your insurance.
     <b>If you need emergency medical assistance during your trip, dial 102 and ask for an ambulance</b>. You should contact your insurance company promptly if you are referred to a medical facility for treatment. 
     <b>Don&#8217;t attempt to take your children trekking in high mountain altitudes</b>; they are demanding and tough on even the most acclimatised adults. 
     <b>Familiarise yourself with the dangers of altitude sickness</b>, especially if you are trekking in remote areas.
     <b>Many travellers experience stomach upsets in Bhutan</b>. These are not usually serious, but do be prepared, and <b>bring medication including rehydration and diarrhoea remedies</b> to ensure this disrupts your trip as little as possible.
     There is no malaria risk in Kathmandu, Pokhara or the mountain trekking areas, but <b>malaria does exist in the southern belt of Nepal</b> (the Terai) and risk is highest in the months of June, July and August, so consult your doctor or travel clinic about the best medication to take, especially if travelling to Nepal with kids.
     <b>Only drink bottled water and avoid ice cubes</b>. Do not eat fruits or vegetables unless they have been peeled or cooked. Avoid cooked foods that are no longer piping hot - cooked food that has been left at room temperature is a particularly common culprit for tummy upsets, and avoid raw and/or undercooked meat or fish.
     <b>Apply insect repellent to skin and clothing to being bitten</b>: wear long sleeves, long trousers, hats and shoes (rather than sandals), and for rural and forested areas, boots are preferable, with trousers tucked in, to prevent tick bites. 
     <b>Kathmandu&#8217;s polluted air gives many people respiratory infections</b> within a few days of arrival; asthmatics should take particular care - minimize exposure by staying off the main streets, and think about bringing a filtering face mask if you&#8217;re spending much time in the Kathmandu Valley.
     <b>Personal hygiene is paramount in Nepal</b>. Wash your hands often and use antibacterial hand gel. Keep any cuts clean and disinfected. Hookworm can be picked up through bare feet, so it&#8217;s best to always wear shoes.
     </p>
</div>
</div>

  <!--News and Events section starts from here-->
  <section id="blog">
    <div class="container">
      <h3>News and Events</h3>
      <div class="blog-parent">
        <div class="blog-content">
          <div class="blog-img-parent">
            <img src="images/bahaktapur.jpg" class="img-responsive" />
          </div>
          <div class="blog-info-parent">
            <ul>
              <li>Isha Hitang</li>
              <li>20.11.2017</li>
            </ul>
            <h4>Lorem ipsum dolor sit amet consectetur </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita iste ratione, odio ipsum eligendi quae
              nemo deleniti exercitationem quaerat possimus repellat ut et ab commodi? Ratione facere consequuntur odio
              vitae.</p>
          </div>
        </div>
        <div class="blog-content">
          <div class="blog-img-parent">
            <img src="images/bahaktapur.jpg" class="img-responsive" />
          </div>
          <div class="blog-info-parent">
            <ul>
              <li>Isha Hitang</li>
              <li>20.11.2017</li>
            </ul>
            <h4>Lorem ipsum dolor sit amet consectetur </h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo non eum doloribus! Quam esse facere
              praesentium. Enim esse eveniet id? Omnis saepe molestias non enim consectetur esse sunt, soluta similique.
            </p>
          </div>
        </div>
        <div class="blog-content">
          <div class="blog-img-parent">
            <img src="images/bahaktapur.jpg" class="img-responsive" />
          </div>
          <div class="blog-info-parent">
            <ul>
              <li>Isha Hitang</li>
              <li>20.11.2017</li>
            </ul>
            <h4>Lorem ipsum dolor sit amet consectetur </h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo non eum doloribus! Quam esse facere
              praesentium. Enim esse eveniet id? Omnis saepe molestias non enim consectetur esse sunt, soluta similique.
            </p>
          </div>
        </div>
        <div class="blog-content">
          <div class="blog-img-parent">
            <img src="images/bahaktapur.jpg" class="img-responsive" />
          </div>
          <div class="blog-info-parent">
            <ul>
              <li>Isha Hitang</li>
              <li>20.11.2017</li>
            </ul>
            <h4>Lorem ipsum dolor sit amet consectetur </h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo non eum doloribus! Quam esse facere
              praesentium. Enim esse eveniet id? Omnis saepe molestias non enim consectetur esse sunt, soluta similique.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--news and events section ends here-->

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
            <li><a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a></li>
            <li><a href="#"><i class="fas fa-angle-right"></i> Terms and conditions</a></li>
            <li><a href="#"><i class="fas fa-angle-right"></i> Tourism lele</a></li>
            <li><a href="#"><i class="fas fa-angle-right"></i> Tourism lele</a></li>
          </ul>
        </div>
        <div class="footer-1st footer-info">
          <h3>Need any help ?</h3>
          <ul>
            <li><a href="#"><i class="fas fa-angle-right"></i> contact us in +123-456-8790</a></li>
            <li><a href="#"><i class="fas fa-angle-right"></i> email us at visitnepal@gmail.com</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!--ifo footer ends here-->

    <p class="copyright">© 2022 | Created and Designed By |<a href="https://github.com/iamisha"> Isha Hitang</a> and <a
        href="https://github.com/priyanka201725">Priyanka Sinha</a> |</p>
  </footer>
  <!--adding the js external files jquery and another external.js-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="js/external.js"></script>
  
</body>

</html>