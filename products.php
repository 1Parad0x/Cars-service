<!DOCTYPE html>
<html lang="en">
  <?php
  require_once("partials/header.php");
  ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Motor Products</title>
  <meta name="description" content="">
         <div class="templatemo-welcome">
          <div class="container">
            <div class="row">
              <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                <img src="img/welcome-img.png" class="img-responsive welcome-img" alt="Welcome">
              </div>
              <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <h2 class="text-uppercase">
                  <span class="welcome-title-1">We love your</span>
                  <span class="welcome-title-2">satisfaction</span>
                </h2>
                <p class="welcome-message">Motor is free Bootstrap v3.3.4 responsive web template provided 
                by <span class="blue">template</span><span class="green">mo</span>.com website. You can download, 
                modify and use this for your website projects.</p>
                <a href="#" class="welcome-read-more">Read More</a>
              </div>
            </div>    
          </div>
        </div>
      </section>
      <section class="container margin-bottom-50">
       <div class="row">
        <h2 class="col-lg-12 text-center text-uppercase margin-bottom-30">Donec pede justo fringilla ulputate eget</h2>
        <p class="col-lg-12 text-center margin-bottom-30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
        <div class="col-lg-12 tm-overflow-hidden">
          <div class="tm-img-1-container">
            <img src="img/0.jpg" alt="Image description">
            <p class="tm-img-1-description">Porsche</p>
          </div>
          <div class="tm-img-1-container">
            <img src="img/1.jpg" alt="Image description">
            <p class="tm-img-1-description">Mercedes</p>
          </div>
          <div class="tm-img-1-container">
            <img src="img/0.jpg" alt="Image description">
            <p class="tm-img-1-description">BMW</p>
          </div>
          <div class="tm-img-1-container">
            <img src="img/1.jpg" alt="Image description">
            <p class="tm-img-1-description">Lexus</p>
          </div>         
        </div>
      </div>
    </section>    

    
    <section class="container margin-bottom-50">
      <div class="tm-overflow-hidden row">
        <div class="tm-gallery col-lg-9 col-md-9 col-sm-8 col-xs-12">
          <h3 class="tm-gallery-title">Toyota (53)</h3>          
          <div class="tm-item-container">
            <img src="img/2.jpg" alt="Image">
            <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
            <div class="tm-item-price-container">
              <span class="tm-item-price">$ 50,000</span>
              <a href="#" class="tm-item-link">
                <span class="tm-item-action">Add to Cart</span>
                <img src="img/plus.png" class="tm-item-add-icon" alt="Image">
              </a>
            </div>
          </div>
          <?php
          $db = new DataBase();
          $product = new Product($db);
          $products = $product->index();

          foreach ($products as $product) {
            $imageData = base64_encode($product['Image']);
            echo '<div class="tm-item-container">';
            echo '<img src="data:image/png;base64,' . $imageData . '" width="200" height="130">';
            echo '<p class="tm-item-description">' . htmlspecialchars($product['Name']) . '</p><hr>';
            echo '<div class="tm-item-price-container">';
            echo '<span class="tm-item-price">$ ' . htmlspecialchars($product['Price']) . '</span>';
            echo '<a href="#" class="tm-item-link">';
            echo '<span class="tm-item-action">Add to Cart</span>';
            echo '<img src="img/plus.png" class="tm-item-add-icon" alt="Image">';
            echo '</a>';
            echo '</div>';
            echo '</div>';
          }

          ?>
          
        </div>
        <aside class="tm-gallery-aside col-lg-3 col-md-3 col-sm-4 col-xs-12">
          <nav class="tm-gallery-nav">
            <h2 class="tm-gallery-nav-title">Category <i class="fa fa-caret-up"></i></h2>
            <ul>
              <li class="active">
                <a href="#">
                  <img src="img/gallery-list-icon.png" class="tm-gallery-list-img" alt="Image">Toyota
                  <i class="fa fa-caret-right tm-gallery-list-fa"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="img/gallery-list-icon.png" class="tm-gallery-list-img" alt="Image">Honda
                  <i class="fa fa-caret-right tm-gallery-list-fa"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="img/gallery-list-icon.png" class="tm-gallery-list-img" alt="Image">Nissan
                  <i class="fa fa-caret-right tm-gallery-list-fa"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="img/gallery-list-icon.png" class="tm-gallery-list-img" alt="Image">BMW
                  <i class="fa fa-caret-right tm-gallery-list-fa"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="img/gallery-list-icon.png" class="tm-gallery-list-img" alt="Image">Audi
                  <i class="fa fa-caret-right tm-gallery-list-fa"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="img/gallery-list-icon.png" class="tm-gallery-list-img" alt="Image">Mercedes
                  <i class="fa fa-caret-right tm-gallery-list-fa"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="img/gallery-list-icon.png" class="tm-gallery-list-img" alt="Image">Lexus
                  <i class="fa fa-caret-right tm-gallery-list-fa"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="img/gallery-list-icon.png" class="tm-gallery-list-img" alt="Image">Ford
                  <i class="fa fa-caret-right tm-gallery-list-fa"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="img/gallery-list-icon.png" class="tm-gallery-list-img" alt="Image">Ferrari
                  <i class="fa fa-caret-right tm-gallery-list-fa"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="img/gallery-list-icon.png" class="tm-gallery-list-img" alt="Image">Lamborghini
                  <i class="fa fa-caret-right tm-gallery-list-fa"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="img/gallery-list-icon.png" class="tm-gallery-list-img" alt="Image">Porsche
                  <i class="fa fa-caret-right tm-gallery-list-fa"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="img/gallery-list-icon.png" class="tm-gallery-list-img" alt="Image">Land Rover
                  <i class="fa fa-caret-right tm-gallery-list-fa"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="img/gallery-list-icon.png" class="tm-gallery-list-img" alt="Image">Chevrolet
                  <i class="fa fa-caret-right tm-gallery-list-fa"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="img/gallery-list-icon.png" class="tm-gallery-list-img" alt="Image">More...
                  <i class="fa fa-caret-right tm-gallery-list-fa"></i>
                </a>
              </li>
            </ul>
          </nav>
          <div class="tm-call-us">
            <h3 class="text-uppercase tm-call-us-title">Call us</h3>
            <a href="tel:" class="tm-call-us-link">+11 565 789 57</a>
          </div>    
        </aside>
      </div>

      <!--banner-->
      <div class="tm-banner">
        <h2 class="tm-banner-title">Maecenas</h2>
        <p class="tm-banner-description">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium</p>
        <a href="#" class="tm-banner-link"><i class="fa fa-play"></i></a>
      </div>
    </section> <!-- Main content -->
    <!--Footer content-->
      <?php
      require_once("partials/footer.php");
      ?>
    <!-- Footer content-->
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
  </html>