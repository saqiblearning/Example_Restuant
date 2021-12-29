 <?php
/*
Template Name: chef-choice
Template page Type: post, page, event
*/

?>




<?php get_header(); ?>


<?php

$hero = get_field('hero_section');
$about = get_field('about_us');  
$why_choose = get_field('why_choose_section');
$menu = get_field('menu');
$events = get_field('event');
$saying = get_field('saying_section');
$gallery = get_field('gallery_detail');
$chef = get_field('chef');
$contact_us = get_field('contact_us_section');
$contact_info = get_field('contact_info');

?>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1><?php echo $hero['hero_title'];?></span></h1>
          <h2><?php echo $hero['hero_paragraph'];?></h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto"><?php echo $hero['link_text_button'];?></a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto"><?php echo $hero['link_text_button1'];?></a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
             
             <?php if( get_field('about_us_image') ): ?>
                <img src="<?php echo the_field('about_us_image'); ?>" />
            <?php endif; ?>
           
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><?php echo $about['about_us_heading'];?></h3>
            <p class="fst-italic">
              <?php echo $about['about_us_paragraph'];?>
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i><?php echo $about['about_us_check'];?></li>
              <li><i class="bi bi-check-circle"></i><?php echo $about['about_us_check1'];?></li>
              <li><i class="bi bi-check-circle"></i><?php echo $about['about_us_check2'];?></li>
            </ul>
            <p>
             <?php echo $about['about_us_paragraph1'];?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo $why_choose['why_choose_title'];?></h2>
          <p><?php echo $why_choose['why_choose_paragraph'];?></p>
        </div>

        
               <div class="row">


                         <?php 
                         
                            $repeater = get_field('why_choose');
                            // echo ("here");
                            // print_r($repeater);
                            if( $repeater ) {
                                
                                foreach( $repeater as $row ) {
                                    $count = $row['choose_count'];
                                    $title = $row['choose_title'];
                                    $description = $row['choose_paragraph'];
                           ?>
                                              
                                   
             


                <div class="col-lg-4">
                  <div class="box" data-aos="zoom-in" data-aos-delay="100">
                    <span><?php echo ($count);?></span>
                    <h4><?php echo ($title);?></h4>
                    <p><?php echo ($description);?>t</p>
                  </div>
                </div>


                <?php
                 }  
                }
           
             ?>

       </div>    

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo $menu['menu_small_title']; ?></h2>
          <p><?php echo $menu['menu_title']; ?></p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lobster Bisque</a><span>$5.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Bread Barrel</a><span>$6.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/menu/cake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Crab Cake</a><span>$7.95</span>
            </div>
            <div class="menu-ingredients">
              A delicate crab cake served on a toasted roll with lettuce and tartar sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/menu/caesar.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Caesar Selections</a><span>$8.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Tuscan Grilled</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Grilled chicken with provolone, artichoke hearts, and roasted red pesto
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mozzarella Stick</a><span>$4.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Greek Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach, crisp romaine, tomatoes, and Greek olives
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Spinach Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lobster Roll</a><span>$12.95</span>
            </div>
            <div class="menu-ingredients">
              Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p>Check Our Specials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Architecto ut aperiam autem id</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/specials-1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/specials-2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/specials-3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/specials-4.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/specials-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo $events['event_title'];?></h2>
          <p><?php echo $events['event_paragraph'];?></p>
        </div>
       
        
        

                       
                                              

    

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
              <?php 
                         
                            $rows = get_field('testimonial_event');
                            // echo ("here");
                            // print_r($repeater);
                            if( $rows ) {
                                
                                foreach( $rows as $row ) {
                                    $testimonial_img = $row['testimonial_image'];
                                    $title = $row['testimonial_title'];
                                    $price = $row['testimonial_price'];
                                    $paragraph = $row['testimonial_paragraph'];
                                    $tag = $row['testimonial_tag_line'];
                                    $tag1 = $row['testimonial_tag_line1'];
                                    $tag2 = $row['testimonial_tag_line2'];
                                    $description1 = $row['testimonial_paragraph1'];
                                    
                           ?>
           

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="<?php echo($testimonial_img); ?>" class="img-fluid" alt="">
                  

                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3><?php echo ($title);?></h3>
                  <div class="price">
                    <p><span><?php echo ($price);?></span></p>
                  </div>
                  <p class="fst-italic">
                      <?php echo ($paragraph);?>
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> <?php echo ($tag);?></li>
                    <li><i class="bi bi-check-circled"></i> <?php echo ($tag1);?></li>
                    <li><i class="bi bi-check-circled"></i> <?php echo ($tag2);?></li>
                  </ul>
                  <p>
                    <?php echo ($description1);?>
                  </p>

                </div>

      

              </div>
            </div><!-- End testimonial item -->


                 <?php
              }

            }  ?>
        

           
          </div>

          <div class="swiper-pagination"></div>
         
      
        </div>
        
       


      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservation</h2>
          <p>Book a Table</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Book a Table</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo $saying['saying_title'];?></h2>
          <p><?php echo $saying['saying_paragraph'];?></p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">


           <?php             
                            $rows = get_field('saying_slider');
                            // echo ("here");
                            // print_r($repeater);
                            if( $rows ) {
                                
                                foreach( $rows as $row ) {
                                    $saying_desc = $row['saying_description'];
                                    $saying_img = $row['saying_image'];
                                    $saying_head = $row['saying_heading'];
                                    $saying_detl = $row['saying_detail'];  
                                   
                                    
                           ?>  



            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                       <?php echo ($saying_desc);?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?php echo($saying_img); ?>" class="testimonial-img" alt="">
                <h3><?php echo ($saying_head);?></h3>
                <h4><?php echo ($saying_detl);?></h4>
              </div>
            </div><!-- End testimonial item -->

            <?php  
                  }
                }
               ?> 


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2><?php echo $gallery['gallery_title'];?></h2>
          <p><?php echo $gallery['gallery_paragraph'];?></p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

              <?php 
                  $images = get_field('gallery_image');
                  $size = 'full'; // (thumbnail, medium, large, full or custom size)
                  if( $images ): ?>
                     
                          <?php foreach( $images as $image_id ): ?>
                           
                              




          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
           
                <img src="<?php echo wp_get_attachment_image( $image_id, $size ); ?>
            
            </div>
          </div>
                     
                                  
                            
                          <?php endforeach; ?>
                     
                  <?php endif; ?>

         

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo $chef['chef_heading'];?></h2>
          <p><?php echo $chef['chef_paragraph'];?></p>
        </div>

        <div class="row">

           <?php             
                            $rows = get_field('chef_detail');
                            // echo ("here");
                            // print_r($repeater);
                            if( $rows ) {
                                
                                foreach( $rows as $row ) {
                                    $chef_image = $row['chef_image'];
                                    $chef_name = $row['chef_name'];
                                    $chef_designation = $row['chef_designation'];
                                    $facebook = $row['facebook'];  
                                    $intagram = $row['intagram']; 
                                    $twitter = $row['twitter']; 
                                    $linkedin = $row['linkedin']; 
                                    
                           ?> 




          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="<?php echo($chef_image); ?>" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4><?php echo ($chef_name);?></h4>
                  <span><?php echo ($chef_designation);?></span>
                </div>
                <div class="social">
                  <a href="<?php echo ($facebook);?>"><i class="bi bi-twitter"></i></a>
                  <a href="<?php echo ($intagram);?>"><i class="bi bi-facebook"></i></a>
                  <a href="<?php echo ($twitter);?>"><i class="bi bi-instagram"></i></a>
                  <a href="<?php echo ($linkedin);?>"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

         <?php }}   ?>
 

        

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo $contact_us['contact_us_heading'];?></h2>
          <p><?php echo $contact_us['contact_us_paragraph'];?></p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4><?php echo $contact_info['location'];?></h4>
                <p><?php echo $contact_info['address'];?></p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4><?php echo $contact_info['open_hours'];?></h4>
                <p>
                 <?php echo $contact_info['open_days'];?>
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4><?php echo $contact_info['email'];?></h4>
                <p><?php echo $contact_info['info_email'];?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4><?php echo $contact_info['phone'];?></h4>
                <p><?php echo $contact_info['phone_number'];?></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <?php 
               echo do_shortcode( '[contact-form-7 id="225" title="Contact form 1"]'); 
            ?>
         <!--    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div> 
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
             <div class="text-center"><button type="submit">Send Message</button></div>
            </form> -->

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->



  <?php get_footer(); ?>