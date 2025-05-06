<?php
include('partials/header.php');
$db = new DataBase();
$contact = new Contact($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  if ($contact->create($name, $email, $subject, $message)) {
    header('Location: thankyou.php');
    exit;
  } else {
    echo 'Nastala chyba pri odosielaní správy!';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Motor Contact</title>
  <meta name="description" content="">

     <div class="templatemo-welcome welcome-slider">
      <div class="container">
        <div class="row">
          <div class="flexslider">
            <ul class="slides">
              <li>
                <div class="about-slider">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <img src="img/about/1.jpg" class="img-responsive" alt="Image">
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                    <h2 class="text-uppercase welcome-title">
                      <span class="welcome-title-1">Performance</span>
                      <span class="welcome-title-2">for the speed</span>
                    </h2>
                    <p class="welcome-message">Motor is free Bootstrap v3.3.4 responsive web template provided 
                by <span class="blue">template</span><span class="green">mo</span>.com website. You can download, 
                modify and use this for your website projects. Please tell your friends about our templates. 
                Thank you for visiting.</p>
                  </div>              
                </div>  
              </li>
              <li>
                <div class="about-slider">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <img src="img/about/1.jpg" class="img-responsive" alt="Image">
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                    <h2 class="text-uppercase welcome-title">
                      <span class="welcome-title-1">Find to own</span>
                      <span class="welcome-title-2">the fast &amp; best</span>
                    </h2>
                    <p class="welcome-message">Lorem ipsum dolor sit amet, consectetuer adipiscing elit dori. Aenean commodo ligula eget. Aenean massa. Cumdent sociis natoque penatibus et magnis dis parturient montes, sor ind nascetur ridiculus mus. Lorem ipsum dolor sit amet dipiscing elit dori.</p>
                  </div>              
                </div>  
              </li>
            </ul>
          </div>                          
        </div>    
      </div>
    </div>
  </section>
      
    <!-- Main content -->
    <section class="container tm-contact-main">
      <div class="row">
        <div id="google-map"></div>
      </div>
      <div class="row">
        <div class="contact-form-container">
          <h2 class="contact-title">Contact Us</h2>
          <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Drbi accumsan ipsum velit.</p>
          <form method="post" class="tm-contact-form">
              <div class="col-lg-5 col-md-5 contact-form-left">
                <div class="form-group">
                    <input type="text" id="name" name="name" class="form-control" placeholder="NAME" />
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="EMAIL" />
                </div>
                <div class="form-group">
                    <input type="text" id="subject" name="subject" class="form-control" placeholder="SUBJECT" />
                </div>                
              </div>
              <div class="col-lg-7 col-md-7 contact-form-right">
                <div class="form-group margin-bottom-0">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 submit-btn-container">
                <button type="submit" name="submit" class="btn text-uppercase templatemo-submit-btn">Send Message</button>  
              </div>                        
          </form>
        </div>
      </div>
      <!--banner-->
      <div class="row">
        <div class="tm-banner">
          <h2 class="tm-banner-title">Maecenas</h2>
          <p class="tm-banner-description">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium</p>
          <a href="#" class="tm-banner-link"><i class="fa fa-play"></i></a>
        </div>  
      </div>      
    </section>

    <!-- End Main content -->
    
    <!--Footer content-->
      <?php
      include("partials/footer.php");
      ?>
    <!-- Footer content-->
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script defer src="js/jquery.flexslider-min.js"></script><!-- FlexSlider -->
    <script>

      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          slideshow: false,
          prevText: "&#xf104;",
          nextText: "&#xf105;"
        });

        // Remove preloader
        // https://ihatetomatoes.net/create-custom-preloading-screen/
        $('body').addClass('loaded');
      });

      /* Google map
      ------------------------------------------------*/
      var map = '';
      var center;

      function initialize() {
          var mapOptions = {
            zoom: 16,
            center: new google.maps.LatLng(13.758468,100.567481),
            scrollwheel: false
          };
        
          map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

          google.maps.event.addDomListener(map, 'idle', function() {
              calculateCenter();
          });
        
          google.maps.event.addDomListener(window, 'resize', function() {
              map.setCenter(center);
          });
      }

      function calculateCenter() {
        center = map.getCenter();
      }

      function loadGoogleMap(){
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
          document.body.appendChild(script);
      }
      $(document).ready(function(){                
          loadGoogleMap();                
      });

      
    </script>
  </body>
  </html>
