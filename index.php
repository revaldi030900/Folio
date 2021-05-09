<?php
  function get_CURL($url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);

    return json_decode($result, true);
  }

  $result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UClB6HQepls9IRx4ZVCJqqbg&key=AIzaSyDDAOsV9M8fTcNP1Yg4RCwNKOkA801lURM');

  $urlLatestVid = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyDDAOsV9M8fTcNP1Yg4RCwNKOkA801lURM&channelId=UClB6HQepls9IRx4ZVCJqqbg&maxResult=1&order=date&part=snippet';

  $getVid = get_CURL($urlLatestVid);

  $latestVid = $getVid['items'][0]['id']['videoId'];


  
  $ytPP = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
  $ytTittle = $result['items'][0]['snippet']['title'];
  $ytSubs = $result['items'][0]['statistics']['subscriberCount'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Revaldi's Profile</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/hover/hover.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Folio - v2.1.0
  * Template URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Navbar ======= -->
  <nav id="main-nav">
    <div class="row">
      <div class="container">

       <!--  <div class="logo">
          <a href="index.html"><img src="assets/img//logo.png" alt="logo"></a>
        </div> -->

        <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>

        <ul class="nav-menu list-unstyled">
          <li><a href="index.html" class="smoothScroll">Home</a></li>
          <li><a href="#about" class="smoothScroll">About</a></li>
          <li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
          <li><a href="#journal" class="smoothScroll">Sertificate</a></li>
          <li><a href="#contact" class="smoothScroll">Contact</a></li>
        </ul>

      </div>
    </div>
  </nav><!-- End Navbar -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="home">

    <div class="container">
      <div class="hero-content">
        <h1>I'm <span class="typed"></span></h1>
        <p class="typed-items" data-typed-person="Revaldi Eka Pramuja">Front End Developer, Back End Developer, Network Administrator, Writer</p>

        <ul class="list-unstyled list-social">
          <li><a href="https://facebook.com/revaldi.spenega/"><i class="ion-social-facebook"></i></a></li>
          <li><a href="https://twitter.com/bingung_euyy"><i class="ion-social-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/03.rev/"><i class="ion-social-instagram"></i></a></li>
          <li><a href="https://github.com/revaldi030900"><i class="ion-social-github"></i></a></li>
          <li><a href="https://www.linkedin.com/in/revaldi-eka-pramuja-8a1b5912b"><i class="ion-social-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-4 ">
            <div class="div-img-bg">
              <div class="about-img">
                <img src="assets/img/me1.jpg" class="img-responsive" alt="me">
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="about-descr">

              <p class="p-heading">I'm a student at State Islamic University of Sunan Kalijaga Yogyakarta with my major is Informatics</p>
              <p class="separator">I am the type of person who is thirsty for knowledge and information, therefore there is no time for me to be lazy and be stuck without doing anything that is beneficial to me especially for other people. I am deep in the field of web development including front end, back end, HTML, PHP, JavaScript, Laravel, and others. The reason is because the need for the web is increasingly proportional to and in line with technological advances and the all-digital in this era. I have completed some of the works that I have made in my spare time and at the study stage with my best. To pass the time apart from deep learning about web developer, sometimes I also read and write specifically related to philosophy because I like it so much.</p>

            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="section-title text-center paddsection">
          <h2>Curriculum Vitae</h2>
          <br><br>
           <img src="assets/img/cv.png" class="img-responsive" alt="me">
           <br><br><br>
           <a href="#"><u>Click here to download Academic Transcript</u></a>
      </div>
    </div>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <div id="services">
      <div class="container">

        <div class="services-carousel owl-theme paddsection">

          <div class="services-block">

            <i class="ion-ios-browsers-outline"></i>
            <span>Web Development</span>
            <p class="separator">Both of Front End and Back End Development</p>

          </div>

          <div class="services-block">

            <i class="ion-network"></i>
            <span>Network Administrator</span>
            <p class="separator">Handle for network security and another administration</p>

          </div>

          <div class="services-block">
 
            <i class="ion-ios-color-wand-outline"></i>
            <span>Writer</span>
            <p class="separator">Writings on philosophy, poem, and others</p>

          </div>

        </div>

      </div>

    </div><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>My Portfolio</h2>
        </div>
      </div>

      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Writing</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/web1b.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Kalkulator IP IPS IPK</h4>
              <br><br>
              <p>Web untuk menghitung/mengkalkulasi IP, IP sementara, dan IPK</p>
              <a href="assets/img/portfolio/web1b.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="https://revaldi030900.github.io" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/app1b.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>SPL Matriks Gauss Jordan</h4>
              <br><br>
              <p>Program C++ Penyelesaian SPL Matriks dengan Metode Gauss Jordan</p>
              <a href="assets/img/portfolio/b.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="https://onlinegdb.com/Sy3aOfMHw" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/wr1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Memahami Penderitaan dalam Hidup</h4>
              <br><br>
              <p>Pada dasarnya hidup merupakan sebuah rentetan....</p>
              <a href="assets/img/portfolio/wr1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="blog-single.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div> -->

        </div>

      </div>

    </div><!-- End Portfolio Section -->

    <!-- sosmed -->

   <section class="social mt-3 mb-3" id="social">
     <div class="container">
       <div class="row">
         <div class="col text-center">
           <h2>Social Media</h2>
         </div>
       </div>

       <div class="row justify-content-center mt-3">
         <div class="col-md-5">
          <div class="row">
            <div class="col-md-4">
              <img src="<?= $ytPP; ?>" class="img-responsive rounded-circle img-thumbnail" width="200">
            </div>
            <div class="col-md-8 mt-2">
              <h5><?= $ytTittle ?></h5>
              <p><?= $ytSubs ?> Subscriber</p>  
              <div class="g-ytsubscribe" data-channelid="UClB6HQepls9IRx4ZVCJqqbg" data-layout="default" data-theme="dark" data-count="hidden"></div> 
            </div>
          </div>
          <div class="row mt-3 pb-3">
            <div class="col">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVid ?>?rel=0" allowfullscreen></iframe>  
              </div>
            </div>
          </div>                   
         </div>
         <div class="col-md-5">
          <div class="row">
            <div class="col-md-4">
              <img src="assets/img/me1.jpg" class="img-responsive rounded-circle img-thumbnail" width="200">
            </div>
            <div class="col-md-8 mt-3">
              <h5>@03.rev</h5>
              <p>411 Followers</p>   
            </div>
          </div>
          <div class="row mt-3 pb-3">
            <div class="col">
                <img src="assets/img/portfolio/portfolio-1.jpg" style="width: 100px;">
                <img src="assets/img/portfolio/portfolio-2.jpg" style="width: 100px;">
                <img src="assets/img/portfolio/portfolio-3.jpg" style="width: 100px;">
                <img src="assets/img/portfolio/portfolio-4.jpg" style="width: 100px;">
                <img src="assets/img/portfolio/portfolio-5.jpg" style="width: 100px;">
                <img src="assets/img/portfolio/portfolio-6.jpg" style="width: 100px;">
                <img src="assets/img/portfolio/portfolio-1.jpg" style="width: 100px;">
                <img src="assets/img/portfolio/portfolio-1.jpg" style="width: 100px;">
            </div>
          </div>      
       </div>
         </div>          
     </div>
   </section>

    <!-- ======= Journal Section ======= -->
    <div id="journal" class="text-left paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>Sertificate/Organization</h2>
        </div>
      </div>

<!--       <div class="container">
        <div class="journal-block">
          <div class="row">

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="blog-single.html"><img src="assets/img/blog-post-1.jpg" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="blog-single.html">SO LETS MAKE THE MOST IS BEAUTIFUL</a></h4>
                  <p class="separator">To an English person, it will seem like simplified English
                  </p>

                </div>

              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="blog-single.html"><img src="assets/img/blog-post-2.jpg" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="blog-single.html">WE'RE GONA MAKE DREAMS COMES</a></h4>
                  <p class="separator">To an English person, it will seem like simplified English
                  </p>

                </div>

              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="blog-single.html"><img src="assets/img/blog-post-3.jpg" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="blog-single.html">NEW LIFE CIVILIZATIONS TO BOLDLY</a></h4>
                  <p class="separator">To an English person, it will seem like simplified English
                  </p>

                </div>

              </div>
            </div>

          </div>
        </div>
      </div> -->

    </div><!-- End Journal Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="paddsection">
      <div class="container">
        <div class="contact-block1">
          <div class="row">

            <div class="col-lg-6">
              <div class="contact-contact">

                <h2 class="mb-30">Contact Me!</h2>

                <ul class="contact-details">
                  <li><span>Muntilan, Magelang</span></li>
                  <li><span>Jawa Tengah, Indonesia</span></li>
                  <li><span>+6287735153793 (WA)</span></li>
                  <li><span>revalekapram@gmail.com</span></li>
                </ul>

              </div>
            </div>

            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">

                  <div class="col-lg-6">
                    <div class="form-group contact-block1">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validate"></div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validate"></div>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validate"></div>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validate"></div>
                    </div>
                  </div>

                  <div class="col-lg-12 mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>

                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">

        <ul class="list-unstyled">
          <li><a href="https://facebook.com/revaldi.spenega/"><i class="ion-social-facebook"></i></a></li>
          <li><a href="https://twitter.com/bingung_euyy"><i class="ion-social-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/03.rev/"><i class="ion-social-instagram"></i></a></li>
          <li><a href="https://github.com/revaldi030900"><i class="ion-social-github"></i></a></li>
          <li><a href="https://www.linkedin.com/in/revaldi-eka-pramuja-8a1b5912b"><i class="ion-social-linkedin"></i></a></li>
        </ul>

      </div>

      <p>&copy; Copyrights Folio. All rights reserved.</p>

      <!-- <div class="credits">
        
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Folio
      
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
 -->
    </div>
  </div><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/typed/typed.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="https://apis.google.com/js/platform.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>