<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Love is
 */


$top_dating_image = get_sub_field( 'top_dating_image' ); 

?>


<?php get_header('front'); ?>

    <section class="blog-section">
      <div class="blog-scetion-inner">
        <h2 class="text-center mb-0"><?php the_field( 'homepage_date_header' ); ?></h2>

        <div class="blog-items d-md-flex">

         <?php if ( have_rows( 'homepage_top_dates' ) ) : ?>
          <?php while ( have_rows( 'homepage_top_dates' ) ) : the_row(); ?>
          <a href="#">
          <div class="blog-item col-md-4 col-sm-12 mb-sm-4">        
            <div class="blog-item-inner bg-white me-md-4">
            <?php $top_dating_image = get_sub_field( 'top_dating_image' ); ?>
            <?php if ( $top_dating_image ) : ?>
			        <img src="<?php echo esc_url( $top_dating_image['url'] ); ?>" alt="<?php echo esc_attr( $top_dating_image['alt'] ); ?>" />
	        	<?php endif; ?>
            <div class="blog-item-text-area">
              <span><?php the_sub_field( 'top_datings_span' ); ?></span>
              <h3><?php the_sub_field( 'top_datings_header' ); ?></h3>
              <div><?php the_sub_field( 'top_datings_textarea' ); ?></div>
              <a href="#"><?php the_sub_field( 'top_datings_button' ); ?><svg xmlns="http://www.w3.org/2000/svg" style="margin-left:10px;" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
             </svg></a>
             </div>      
            </div>  
          </div>
          </a>
          <?php endwhile; ?>      
        <?php endif; ?>

        </div>

        <div class="blog-items d-md-flex">

         <?php if ( have_rows( 'homepage_top_dates_second' ) ) : ?>
          <?php while ( have_rows( 'homepage_top_dates_second' ) ) : the_row(); ?>
          <a href="#">
          <div class="blog-item col-md-4 col-sm-12 mb-sm-4">
            <div class="blog-item-inner bg-white me-md-4">
            <?php $top_dating_image = get_sub_field( 'top_dating_image' ); ?>
            <?php if ( $top_dating_image ) : ?>
			        <img src="<?php echo esc_url( $top_dating_image['url'] ); ?>" alt="<?php echo esc_attr( $top_dating_image['alt'] ); ?>" />
	        	<?php endif; ?>
            <div class="blog-item-text-area">
              <span><?php the_sub_field( 'top_datings_span' ); ?></span>
              <h3><?php the_sub_field( 'top_datings_header' ); ?></h3>
              <div><?php the_sub_field( 'top_datings_textarea' ); ?></div>
              <a href="#"><?php the_sub_field( 'top_datings_button' ); ?><svg xmlns="http://www.w3.org/2000/svg" style="margin-left:10px;" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
             </svg></a>
             </div>      
            </div>  
          </div>
          </a>
          <?php endwhile; ?>      
        <?php endif; ?>

        </div>

        <div class="text-center blog-secetion-button-container">
          <a class="blog-secetion-button" href="#"><?php the_field( 'homepage_top_dates_button' ); ?></a>
        </div>
        
      </div>  
    </section>

    <section class="our-advantages">
        <h2 class="text-center our-advantages-header mb-0"><?php the_field( 'our_adventages_header' ); ?></h2>
        <p class="our-advantages-text text-center"><?php the_field( 'our_adventages_text_area' ); ?></p>

        <div class="our-advantages-list">
          <div class="container-fluid p-0 m-0">
          

          <div class="row">
          <?php if ( have_rows( 'our_adventages_list' ) ) : ?>
	          <?php while ( have_rows( 'our_adventages_list' ) ) : the_row(); ?>
            <div class="col-md-4 col-sm-12">
              <div class="our-advantages-list-item d-flex">
               <img height="20" width="23" src="https://loveiscompany.ru/wp-content/uploads/2021/08/ready.png">
               <p><?php the_sub_field( 'our_adventages_list_text' ); ?></p>
              </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <div class="row">
          <?php if ( have_rows( 'our_adventages_list_2' ) ) : ?>
	          <?php while ( have_rows( 'our_adventages_list_2' ) ) : the_row(); ?>
            <div class="col-md-4 col-sm-12">
              <div class="our-advantages-list-item d-flex">
               <img height="20" width="23" src="https://loveiscompany.ru/wp-content/uploads/2021/08/ready.png">
               <p><?php the_sub_field( 'our_adventages_list_text' ); ?></p>
              </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <div class="row">
          <?php if ( have_rows( 'our_adventages_list_3' ) ) : ?>
	          <?php while ( have_rows( 'our_adventages_list_3' ) ) : the_row(); ?>
            <div class="col-md-4 col-sm-12">
              <div class="our-advantages-list-item d-flex">
               <img height="20" width="23" src="https://loveiscompany.ru/wp-content/uploads/2021/08/ready.png">
               <p><?php the_sub_field( 'our_adventages_list_text' ); ?></p>
              </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <div class="row">
          <?php if ( have_rows( 'our_adventages_list_4' ) ) : ?>
	          <?php while ( have_rows( 'our_adventages_list_4' ) ) : the_row(); ?>
            <div class="col-md-4 col-sm-12">
              <div class="our-advantages-list-item d-flex">
               <img height="20" width="23" src="https://loveiscompany.ru/wp-content/uploads/2021/08/ready.png">
               <p><?php the_sub_field( 'our_adventages_list_text' ); ?></p>
              </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <div class="row">
          <?php if ( have_rows( 'our_adventages_list_5' ) ) : ?>
	          <?php while ( have_rows( 'our_adventages_list_5' ) ) : the_row(); ?>
            <div class="col-md-4 col-sm-12">
              <div class="our-advantages-list-item d-flex">
               <img height="20" width="23" src="https://loveiscompany.ru/wp-content/uploads/2021/08/ready.png">
               <p><?php the_sub_field( 'our_adventages_list_text' ); ?></p>
              </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>

        
        </div>

       
          </div>
          
    </section>

    <div class="video-frame">
      <h2 class="text-center"><?php the_field( 'video_header' ); ?></h2>
      <div class="lightbox text-center position-relative">
        <a href="<?php the_field( 'video_link' ); ?>" data-lity><img class="position-absolute" src="https://loveiscompany.ru/wp-content/uploads/2021/08/PlayButton.png"></a>
      </div>
    </div>

    <section class="contact-us">
      <div class="row-contact-us d-flex">

        <div class="col-md-6 col-sm-6">
          <div class="contact-us-text"><?php the_field( 'contact_us_text_area' ); ?></div> 
        </div>

        <div class="col-md-6 col-sm-6 homepage-contact-form">
          <?php echo do_shortcode( '[wpforms id="311" title="false"]'); ?>
          <!--
          <form>
            <input type="email" class="form-control form-control-custom" aria-describedby="emailHelp" placeholder="Имя*" pb-role="username">
            <input type="email" class="form-control form-control-custom" aria-describedby="emailHelp" placeholder="Телефон*" pb-role="username">
            <input type="email" class="form-control form-control-comments" aria-describedby="emailHelp" placeholder="Комментарии" pb-role="username">
            <div class="homepage-contact-form-button-container d-flex">
              <div class="col-md-6 col-sm-12 button-container">
                <a class="homepage-contact-form-button " href="#">отправить</a>
              </div>             
              <span class="col-md-6 col-sm-12">Нажимая кнопку «Отправить заявку», Вы принимаете условия <a class="privicy-policy" href="">пользовательского соглашения</a></span>
            </div>
          </form>
          -->
        </div>

      </div>
    </section>

<?php get_footer(); ?>