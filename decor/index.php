<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DezeanNepal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <script>
      function showMessage() {
          //if the element exist
          if(typeof(document.getElementById("msg-box")) != 'undefined' && document.getElementById("msg-box") != null){
              var fadeTarget = document.getElementById("msg-box");
              var fadeEffect = setInterval(function () {
                  if (!fadeTarget.style.opacity) {
                      fadeTarget.style.opacity = 1;
                  }
                  if (fadeTarget.style.opacity > 0) {
                      fadeTarget.style.opacity -= 0.05;
                  } else {
                      clearInterval(fadeEffect);
                  }
              }, 50);
          }
      }
    </script>
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" onload="showMessage();">


  <!-- STARTING ----- This is the process of starting session and displaying msg! -->
  <?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if (isset($_SESSION['message'])){
      if ($_SESSION['message'] != null){

          echo "<div id='msg-box' style='position:fixed; bottom:10px; right:10px; padding:20px; background: #333; color: #eaeaea; z-index:1000000; border-radius: 4px;'>"
          .$_SESSION['message'].
          "</div>";

          $_SESSION['message'] = null;
      }
    }
  ?>
  <!-- ENDING ----- This is the process of starting session and displaying msg! -->
  

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo"><a href="index.html">DezeanNepal</a></div>
          <div>
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#work-section" class="nav-link">Work</a></li>
                <li><a href="#process-section" class="nav-link">Process</a></li>
                <li><a href="#services-section" class="nav-link">Services</a></li>
              </ul>
            </nav>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block">
                <li class="cta"><a href="#contact-section" class="nav-link"><span class="rounded border border-primary">Contact</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 mr-auto" data-aos="fade-up">
            <h1>"If you fall I will be there"<br>-Floor</h1>
            <p class="mb-5">But if you need a flooring construction.</p>
            <p><a href="#contact-section" class="btn btn-outline-light py-3 px-5">Contact Us</a></p>

          </div>
          <div class="col-lg-2 ml-auto"  data-aos="fade-up" data-aos-delay="100">
            <figure class="img-absolute">
              <img src="images/tile_1.jpg" alt="Image" class="img-fluid">
            </figure>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section section-1">
      
    
      <div class="container">
        <div class="row">
          <div class="col-lg-5 mr-auto mb-5">

            <div class="mb-5">
              <span class="section-sub-title d-block">About DezeanNepal</span>
              <h2 class="section-title">We Value More on Quality and not in Quantity.</h2>
              <p>Dezean Nepal is the floor installation company. We specialize in installing epoxy 3d mural  floor and are experts on 3d epoxy flooring and wall flooring. We are different from other companies because we use the best quality of epoxy in the world  to create stunning floor for your home and business. Epoxy floors are perfect for places of business because of anti slippery properties and unique design options as per the need.</p>
            </div>
<!--

            <div class="row">
              <div class="col-lg-6">
                
                <div class="counter d-flex align-items-start mb-5" data-aos="fade-up" data-aos-delay="">
                  <div class="icon-wrap"><span class="flaticon-reload text-primary"></span></div>
                  <div class="counter-text">
                    <strong>24</strong>
                    <span>Hour Instillation</span>
                  </div>
                </div>

                <div class="counter d-flex align-items-start" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-wrap"><span class="flaticon-download text-primary"></span></div>
                  <div class="counter-text">
                    <strong>1,500</strong>
                    <span>Tiles sold </span>
                  </div>
                </div>

              </div>
              <div class="col-lg-6">
                
                <div class="counter d-flex align-items-start mb-5" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-wrap"><span class="flaticon-monitor text-primary"></span></div>
                  <div class="counter-text">
                    <strong>100+</strong>
                    <span>Number of design</span>
                  </div>
                </div>

                <div class="counter d-flex align-items-start" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-wrap"><span class="flaticon-chat text-primary"></span></div>
                  <div class="counter-text">
                    <strong>250</strong>
                    <span>Happy Customers</span>
                  </div>
                </div>

              </div>
            </div>-->
          </div>

          <div class="col-lg-6">
            <div class="image-absolute-box" >
              <div class="box" data-aos="fade-up">
                <div class="icon-wrap"><span class="flaticon-vector"></span></div>
                <h3>Long Lasting and Durable</h3>
                <p>Our product shall not only leave you open-mouthed with their beauty, but are also built to save your money.</p>
              </div>
              <img src="images/about_1.jpg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="site-section section-2" id="work-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <span class="section-sub-title d-block">Excellent Work</span>
            <h2 class="section-title">Our Works</h2>
            <p>3D technology is gaining increasing popularity. The 3D floor has been used more and more in Homes, Apartments, offices, Hotels, Hospitals, Shopping malls and Halls. due to its creativity and high performance. This is the latest fad in the fancy floor world.
            ​It is not like a sticker or painted vinyl that is directly under your feet, the installed 3D floor gives the perception of depth and is impervious to all sorts of damage that would usually affect floor decorations.</p>
          </div>
        </div>

      </div>
        




      <div class="owl-carousel nonloop-block-13">

          <a class="work-thumb" href="images/about_1.jpg" data-fancybox="gallery">
            <div class="work-text">
              <h3>Work Name Here</h3>
              <span class="category">Website</span>
            </div>
            <img src="images/about_1.jpg" alt="Image" class="img-fluid">
          </a> 
          
          <a class="work-thumb" href="images/slide_1.jpg"  data-fancybox="gallery">
            <div class="work-text">
              <h3>Work Name Here</h3>
              <span class="category">Illustration</span>
            </div>
            <img src="images/slide_1.jpg" alt="Image" class="img-fluid">
          </a>

          <a class="work-thumb" href="images/slide_2.jpg"  data-fancybox="gallery">
            <div class="work-text">
              <h3>Work Name Here</h3>
              <span class="category">Branding</span>
            </div>
            <img src="images/slide_2.jpg" alt="Image" class="img-fluid">
          </a>

          <a class="work-thumb" href="images/slide_3.jpg"  data-fancybox="gallery">
            <div class="work-text">
              <h3>Work Name Here</h3>
              <span class="category">Web Development</span>
            </div>
            <img src="images/slide_3.jpg" alt="Image" class="img-fluid">
          </a>

          <a class="work-thumb" href="images/slide_4.jpg"  data-fancybox="gallery">
            <div class="work-text">
              <h3>Work Name Here</h3>
              <span class="category">Design</span>
            </div>
            <img src="images/slide_4.jpg" alt="Image" class="img-fluid">
          </a>
      </div>

    </div>


    <div class="site-section section-2" id="process-section" >
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <span class="section-sub-title d-block">Our Process</span>
            <h2 class="section-title">Our Process</h2>
            <p>Epoxy 3D floor are used in shooping malls, halls, offices, home and apartments due to its creativity and high performance. This is the latest fad in the fancy floor world. It involves installation process, laying down a layer of self-leveling primer followed by the desired images. This is then treated with a transparent two-components epoxy or polyurethane to give the perfect image depth. A level of protective varnish is the final step.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="process p-3">
              <span class="number">01</span>
              <div>
                <span class="icon-square-o display-4 text-primary mb-4 d-inline-block"></span>
                <h3>3D Flooring </h3>
                <p>An epoxy 3D mural floor is essentially a 2-dimensional picture that is laid on your floor and then treated with a transparent two-components epoxy to give the perfect image depth and create the jaw-dropping 3D effect.</p>
              </div>

            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="process p-3">
              <span class="number">02</span>
              <div>
                <span class="icon-view_carousel display-4 text-primary mb-4 d-inline-block"></span>
                <h3>3D Wall Flooring</h3>
                <p>An epoxy 3D mural wall is essentially a 2-dimensional picture that is laid on your wall and then treated with a transparent two-components epoxy to give the perfect image depth and create the jaw-dropping 3D effect. </p>
              </div>

            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="process p-3">
              <span class="number">03</span>
              <div>
                <span class="icon-view_headline display-4 text-primary mb-4 d-inline-block"></span>
                <h3>3D Stairs Flooring</h3>
                <p>An epoxy 3D mural stairs is essentially a 2-dimensional picture that is laid on your stairs and then treated with a transparent two-components epoxy to give the perfect image depth and create the jaw-dropping 3D effect.</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <span class="section-sub-title d-block">Services</span>
            <h2 class="section-title">Services</h2>
            <p>3D Flooring has been proven to be an environmentally friendly alternate to other types of flooring, easy to install over old or new concrete floors with self-leveling feature.
			Create a seamless, hard, elegance, smooth, chemical resistance, high gloss surface to the floor.</p>
          </div>
        </div>

      </div>
        
      <div class="owl-carousel nonloop-block-14">
        
        <div class="service">
          <div>
            <span class="icon-movie_filter display-4 text-primary mb-4 d-inline-block"></span>
            <h3>Visual effect</h3>
            <p>One of the most significant characteristics of the 3D floor is the stunning visual effect.  By choosing the right 3D floor which gives gorgeous appearance, it can visually solve many problems of the room interior because of the unique aesthetic qualities.</p>
          </div>
        </div>


        <div class="service">
          <div>
            <span class="icon-chain display-4 text-primary mb-4 d-inline-block"></span>
            <h3>High strength</h3>
            <p>3D Floor is virtually impervious and highly resistant to acids, chlorine and other materials such as bleaches and daily cleaners. Because of these reasons the floors are considered good for industrial as well as for home when properly installed.</p>
          </div>
        </div>

        <div class="service">
          <div>
            <span class="icon-wrench display-4 text-primary mb-4 d-inline-block"></span>
            <h3>Easy maintenance</h3>
            <p>3D floor has no seams, joints, cracks, pores, and gaps make the 3D flooring is absolutely immune to any kind of dirt, dust, water and chemicals.  When properly installed, the 3D floor can serve at least 15 to 20 years of age without any colour loss.</p>
          </div>
        </div>

        <div class="service">
          <div>
            <span class="icon-child display-4 text-primary mb-4 d-inline-block"></span>
            <h3>Safe and hygienic</h3>
            <p>3D floor does not accumulate dust and do not create a favorable environment for a variety of pathogens/bacteria. The floor material used has no odor and corrosive fumes and is safe for human health which is confirmed by manufacturer certificates.</p>
          </div>
        </div>

        <div class="service">
          <div>
            <span class="icon-fire display-4 text-primary mb-4 d-inline-block"></span>
            <h3>Fire resistance</h3>
            <p>3D Floor do not burn, it is one of the reasons that the coating used in manufacturing, warehouses, hospitals, child care centers and other places where increased control of fire safety are needed. The material are very resistance to high temperature. </p>
          </div>
        </div>
<!--
        <div class="service">
          <div>
            <span class="flaticon-vector display-4 text-primary mb-4 d-inline-block"></span>
            <h3>Creative Design</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
          </div>
        </div>
-->


      </div>

    </div>


    <div class="site-section" id="contact-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-7">


            
            <h2 class="section-title mb-3">Message Us</h2>
            <p class="mb-5">For more details, Contact us.</p>
          
            <form method="post" action="mail.php" data-aos="fade">
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input type="text" name="fname" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" name="lname" class="form-control" placeholder="Last name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" name="phone" class="form-control" placeholder="Phone">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="Write your message here."></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  
                  <input type="submit" class="btn btn-primary py-3 px-5 btn-block" value="Send Message">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

  
     
    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About DezeanNepal</h3>
            <p>We specialize in installing epoxy 3d mural  floor and are experts on 3d epoxy flooring and wall flooring. We are different from other companies because we use the best quality of epoxy in the world  to create stunning floor for your home and business.</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#home-section">Home</a></li>
              <li><a href="#work-section">Work</a></li>
              <li><a href="#process-section">Process</a></li>
              <li><a href="#services-section">Services</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3>Subscribe</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt incidunt iure iusto architecto? Numquam, natus?</p>
            <form action="#">
              <div class="d-flex mb-5">
                <input type="text" class="form-control rounded-0" placeholder="Email">
                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </div>
            </form>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>

        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | DezeanNepal

      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>