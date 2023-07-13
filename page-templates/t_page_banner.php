<?php
/*
Template Name:Page with Banner
*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>Página Banner</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
   

</head>
<body>
    <div class="txt-container">
      <header>
        <!---nav------>
           <nav class="txt-nav navbar navbar-expand-lg">
                <div class="container-fluid">
                <a class="txt-logo navbar-brand " href="#">FITLIFE<span>GYM</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
               <li class="nav-item px-3">
                 <a class="nav-link" href="#home">Home</a>
               </li>
              <li class="nav-item px-3">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link" href="#faq">FAQ</a>
              </li>
              <li class="nav-item px-3">
                <!--button--->
                <button class="txt-button"><a class="nav-link" href="#newsletter">Newsletter</a></button> 
              </li>
            </ul>
          </div>
        </div>
      </nav>  

      <!--banner-->
      <section class="banner py-5" id="home">
          <div class="row">
              <div class="txt-I col-sm-12 col-md-6 col-lg-6 col-12 px-4">
                <h2>YOUR BODY</h2>
                <h1>YOUR TRANSFORMATION</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>
                  Nulla itaque animi laudantium nam. Consequuntur accusamus <br>
                  ratione eligendi odio, porro dolor modi eum praesentium.
                </p>
                <button class="txt-buttom">DARE YOURSELF</button>
              </div>
              <div class="txt-img col-sm-12 col-md-6 col-lg-6 col-12" >
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1 (2).jpg" alt="Descripción de la imagen">
              </div>
          </div>
      </section>
     </header>

    <!--Brands-->
    <section class="brands">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-interval="500">
        <div class="carousel-inner py-3">
          <div class="carousel-item active">
            <div class="row">
              <div class="text-brands col-3 text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/re.png" alt="Descripción de la imagen" >
              </div>
              <div class="text-brands col-3 text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/R.png" alt="Descripción de la imagen">
              </div>
              <div class="text-brands col-3 text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nike.png" alt="Descripción de la imagen">
              </div>
              <div class="text-brands col-3 text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/R (1).png" alt="Descripción de la imagen">
              </div>
            </div>
          </div>
          <div class="carousel-item" data-interval="500">
            <div class="row">
            <div class="text-brands col-3 text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/re.png" alt="Descripción de la imagen" >
              </div>
              <div class="text-brands col-3 text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/R.png" alt="Descripción de la imagen">
              </div>
              <div class="text-brands col-3 text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nike.png" alt="Descripción de la imagen">
              </div>
              <div class="text-brands col-3 text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/R (1).png" alt="Descripción de la imagen">
              </div>
          </div>
          </div>
          <div class="carousel-item" data-interval="500">
        
          <div class="row">
            <div class="text-brands col-3 text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/re.png" alt="Descripción de la imagen" >
              </div>
              <div class="text-brands col-3 text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/R.png" alt="Descripción de la imagen">
              </div>
              <div class="text-brands col-3 text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nike.png" alt="Descripción de la imagen">
              </div>
              <div class="text-brands col-3 text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/R (1).png" alt="Descripción de la imagen">
              </div>
          </div>
            </div>
          </div>
        </div>
    </section>

    <!--services--->
    <section class="txt-services text-center" id="services">
        <div clas="container">
          <div class="text-center">
            <h1>Our<span> Services</span></h1>
            <hr class="txt-hr w-25 m-auto">
          </div>

            <!---.card----> 

          <div class="container py-5">
              <div class="row">
                <div class=" col-sm-12 col-md-6 col-lg-4 col-12 py-2 opacity-card" >
                  <div class="card">
                      <div class="txt-card card-body">
                      <i class="fa-solid fa-dumbbell "></i>
                          <h5 class="card-title custom-title">Personalized Training</h5>
                          <p class="card-text custom-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, nulla? Illum atque voluptate labore aliquam maxime reiciendis voluptatem ratione animi, doloribus repellendus rerum, hic beatae possimus sequi pariatur quasi quam itaque? Doloribus consequatur ipsa blanditiis, sed atque officiis maiores? Nostrum, laborum. Perspiciatis id, autem fugit voluptate cum nemo molestiae corrupti dolor reprehenderit dolorem incidunt eos omnis. Facere tenetur voluptatem quod?</p>
                            <button class="txt-buttom">Read More</button>
                      </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-12 py-2 opacity-card" >
                  <div class="card">
                      <div class="txt-card card-body">
                      <i class="fa-solid fa-people-group"></i>
                          <h5 class="card-title custom-title">Group Training</h5>
                            <p class="card-text custom-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, nulla? Illum atque voluptate labore aliquam maxime reiciendis voluptatem ratione animi, doloribus repellendus rerum, hic beatae possimus sequi pariatur quasi quam itaque? Doloribus consequatur ipsa blanditiis, sed atque officiis maiores? Nostrum, laborum. Perspiciatis id, autem fugit voluptate cum nemo molestiae corrupti dolor reprehenderit dolorem incidunt eos omnis. Facere tenetur voluptatem quod?</p>
                            <button class="txt-buttom">Read More</button>
                      </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-12 py-2 opacity-card" >
                  <div class="card">
                      <div class="txt-card card-body">
                        <i class="fa-solid fa-heart-pulse"></i>
                          <h5 class="card-title custom-title">Health & Wellness</h5>
                          <p class="card-text custom-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, nulla? Illum atque voluptate labore aliquam maxime reiciendis voluptatem ratione animi, doloribus repellendus rerum, hic beatae possimus sequi pariatur quasi quam itaque? Doloribus consequatur ipsa blanditiis, sed atque officiis maiores? Nostrum, laborum. Perspiciatis id, autem fugit voluptate cum nemo molestiae corrupti dolor reprehenderit dolorem incidunt eos omnis. Facere tenetur voluptatem quod?</p>
                            <button class="txt-buttom">Read More</button>
                      </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </section>
    

    <!--FAQ-->
    <section class="txt-Faq text-center" id="faq">
    <div class="container">
          <div  class="text-center">
            <h1>Our<span> FAQ</span></h1>
            <hr/ class="w-25 m-auto">
          </div>
        </div>

        <!--section-->
        <div class="container">
          <div class="row">
          <div class="txt-img-faq col-sm-12 col-md-6 col-lg-6 col-12 py-5" >
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1(3).jpg" alt="Descripción de la imagen">
          </div>
          <div class="txt-accodion col-sm-12 col-md-6 col-lg-6 col-12 " >
          <?php
                $args = array(
                  'post_type' => 'post_type_faq',
                  'posts_per_page' => -1,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                  echo '<div class="accordion" id="accordionExample">';
                  $counter = 1;
                  while ($query->have_posts()) {
                    $query->the_post();
                    $accordion_item_id = 'collapse' . $counter;
                    $aria_expanded = ($counter === 1) ? 'true' : 'false';
                    $show_class = ($counter === 1) ? 'show' : '';
                    ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button <?php echo $show_class; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $accordion_item_id; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="<?php echo $accordion_item_id; ?>">
                            <?php the_title(); ?>
                          </button>
                        </h2>
                        <div id="<?php echo $accordion_item_id; ?>" class="accordion-collapse collapse <?php echo $show_class; ?>" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <?php the_content(); ?>
                          </div>
                        </div>
                      </div>
                    <?php
                    $counter++;
                  }
                  echo '</div>';
                  wp_reset_postdata();
                }
                ?>
          </div>
        </div>
    </section>



      <!--newsletter-->
    <section class="txt-newsletter" id="newsletter">
        <div class="container">
              <div  class="text-center">
                <h1>Our<span> Newsletter</span></h1>
                <hr/ class="w-25 m-auto">
              </div>
         </div>


         <!------>

         <div class="row">
          <div class="txt-new col-sm-12 col-md-6 col-lg-6 col-12 newsletter-section px-5">
              <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                  <input type="hidden" name="action" value="newsletter_subscribe">
                    <div class="form-group">
                        <label for="first_name">Name:</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last name:</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter your last name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                  <button type="submit" class="btn btn-outline-warning w-100 mt-3">Send</button>
              </form> 
            </div>
            <div class="txt-new-I col-sm-12 col-md-6 col-lg-6 col-12">
                <h2>YOUR BODY</h2>
                <h1>YOUR TRANSFORMATION</h1> 
            </div>
        </div>
  </section>

  <!--contact--->
  <section class="contact">
      <ul class="list-unstyled text-center">
        <li class="icon"><i class="fas fa-map-marker-alt"></i> 123 Street, City, Country</li>
        <li class="icon"><i class="fas fa-envelope"></i> info@example.com</li>
        <li class="icon"><i class="fas fa-phone"></i> +1234567890</li>
      </ul>
  </section>

  <footer class="txt-footer text-light">
    <div class="container py-4">
        <div class="row text-center">
            <div class="col-md-3">
                <h3>
                  <a class="nav-link" href="#home">Home</a>
                </h3>
            </div>
            <div class="col-md-3">
                <h3>
                  <a class="nav-link" href="#services">Services</a>
                </h3>
            </div>
            <div class="col-md-3">
                <h3>
                  <a class="nav-link" href="#faq">FAQ</a>
                </h3>
            </div>
            <div class="col-md-3">
                <h3>
                   <a class="nav-link" href="#newsletter">Newsletter</a>
                </h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                  Nullam at ligula vitae turpis eleifend bibendum at id lorem. <br>
                Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="txt-copy text-center py-1">
        <p>&copy; kjgomez26programation All rights reserved.</p>
    </div>
    </div>
</footer> 

</div>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    
</body>
</html>
