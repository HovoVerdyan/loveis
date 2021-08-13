<?php
/**
 * The template for displaying services page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package love is
 */


$header_image = get_field( 'header_image' );

get_header(); 

?>

    <section class="blog-section">
      <div class="blog-scetion-inner">
        <h2 class="mb-0"><img class="pe-4" src="<?php echo esc_url( $header_image['url'] ); ?>" alt="<?php echo esc_attr( $header_image['alt'] ); ?>"><?php the_field( 'header_text' ); ?></h2>

        <div class="blog-items blog-items-first d-md-flex">
        <?php if ( have_rows( 'services_items' ) ) : ?>
	        <?php while ( have_rows( 'services_items' ) ) : the_row(); ?>
          <div class="blog-item col-md-4 col-sm-12 mb-sm-4 pb-0">
            <div class="blog-item-inner bg-white me-md-4">
            <?php $services_image = get_sub_field( 'services_image' ); ?>
	        	<?php if ( $services_image ) : ?>
		        	<img src="<?php echo esc_url( $services_image['url'] ); ?>" alt="<?php echo esc_attr( $services_image['alt'] ); ?>" />
	         	<?php endif; ?>
             <div class="blog-item-text-area">
              <span><?php the_sub_field( 'services_span' ); ?></span>
              <h3><?php the_sub_field( 'services_header' ); ?></h3>
              <div><?php the_sub_field( 'services_text' ); ?></div>
              <a href="#"><?php the_sub_field( 'services_button' ); ?><svg xmlns="http://www.w3.org/2000/svg" style="margin-left:10px;" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
             </svg></a>
             </div>      
            </div>  
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
        </div>

       
        <div class="blog-items blog-items-first d-md-flex">
        <?php if ( have_rows( 'services_items_2' ) ) : ?>
	        <?php while ( have_rows( 'services_items_2' ) ) : the_row(); ?>
          <div class="blog-item col-md-4 col-sm-12 mb-sm-4">
            <div class="blog-item-inner bg-white me-md-4">
            <?php $services_image = get_sub_field( 'services_image' ); ?>
	        	<?php if ( $services_image ) : ?>
		        	<img src="<?php echo esc_url( $services_image['url'] ); ?>" alt="<?php echo esc_attr( $services_image['alt'] ); ?>" />
	         	<?php endif; ?>
             <div class="blog-item-text-area">
              <span><?php the_sub_field( 'services_span' ); ?></span>
              <h3><?php the_sub_field( 'services_header' ); ?></h3>
              <div><?php the_sub_field( 'services_text' ); ?></div>
              <a href="#"><?php the_sub_field( 'services_button' ); ?><svg xmlns="http://www.w3.org/2000/svg" style="margin-left:10px;" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
             </svg></a>
             </div>      
            </div>  
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
        </div>
      

        <div class="blog-items blog-items-first d-md-flex">
        <?php if ( have_rows( 'services_items_3' ) ) : ?>
	        <?php while ( have_rows( 'services_items_3' ) ) : the_row(); ?>
          <div class="blog-item col-md-4 col-sm-12 mb-sm-4">
            <div class="blog-item-inner bg-white me-md-4">
            <?php $services_image2 = get_sub_field( 'services_image' ); ?>
	        	<?php if ( $services_image2 ) : ?>
		        	<img src="<?php echo esc_url( $services_image2['url'] ); ?>" alt="<?php echo esc_attr( $services_image['alt'] ); ?>" />
	         	<?php endif; ?>
             <div class="blog-item-text-area">
              <span><?php the_sub_field( 'services_span' ); ?></span>
              <h3><?php the_sub_field( 'services_header' ); ?></h3>
              <div><?php the_sub_field( 'services_text' ); ?></div>
              <a href="#"><?php the_sub_field( 'services_button' ); ?><svg xmlns="http://www.w3.org/2000/svg" style="margin-left:10px;" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
             </svg></a>
             </div>      
            </div>  
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
        </div>
        
        
      </div>  
    </section>

    <section class="contact-us">
      <div class="row-contact-us d-flex">

        <div class="col-md-6 col-sm-6">
          <div class="contact-us-text"><?php the_field( 'contact_us_text' ); ?></div> 
        </div>

        <div class="col-md-6 col-sm-6 homepage-contact-form">
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
        </div>

      </div>
    </section>

<?php get_footer(); ?>