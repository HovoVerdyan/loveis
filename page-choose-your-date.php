<?php
/**
 * The template for displaying choose your date page
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


?>


<?php get_header(); ?>

    <section class="section-dating">
        <div class="container-fluid px-0">
            <h2 class="section-dating-header">Категории свиданий</h2>
            
            <div class="row row-section-dating">
               <?php if ( have_rows( 'category_of_dates_items' ) ) : ?>
                <?php while ( have_rows( 'category_of_dates_items' ) ) : the_row(); ?>
                <div class="col-lg-6 position-relative">
                
                  <a href="#">
                  <?php $category_of_dates_image = get_sub_field( 'category_of_dates_image' ); ?>
	              	<?php if ( $category_of_dates_image ) : ?>
			              <img class="w-100" src="<?php echo esc_url( $category_of_dates_image['url'] ); ?>" alt="<?php echo esc_attr( $category_of_dates_image['alt'] ); ?>" />
	               	<?php endif; ?>
                  <div class="section-dating-info position-absolute">
                    <span><?php the_sub_field( 'category_of_dates_span' ); ?></span>
                    <h3><?php the_sub_field( 'category_of_dates_header' ); ?></h3>
                  </div>
                  </a>
                  
                </div>
                <?php endwhile; ?>
                <?php endif; ?>      
            </div>

            <div class="row row-section-dating">
               <?php if ( have_rows( 'category_of_dates_items_2' ) ) : ?>
                <?php while ( have_rows( 'category_of_dates_items_2' ) ) : the_row(); ?>
                <div class="col-lg-6 position-relative">
                
                  <a href="#">
                  <?php $category_of_dates_image = get_sub_field( 'category_of_dates_image' ); ?>
	              	<?php if ( $category_of_dates_image ) : ?>
			              <img class="w-100" src="<?php echo esc_url( $category_of_dates_image['url'] ); ?>" alt="<?php echo esc_attr( $category_of_dates_image['alt'] ); ?>" />
	               	<?php endif; ?>
                  <div class="section-dating-info position-absolute">
                    <span><?php the_sub_field( 'category_of_dates_span' ); ?></span>
                    <h3><?php the_sub_field( 'category_of_dates_header' ); ?></h3>
                  </div>
                  </a>
                  
                </div>
                <?php endwhile; ?>
                <?php endif; ?>      
            </div>

            <div class="row row-section-dating">
               <?php if ( have_rows( 'category_of_dates_items_3' ) ) : ?>
                <?php while ( have_rows( 'category_of_dates_items_3' ) ) : the_row(); ?>
                <div class="col-lg-6 position-relative">
                
                  <a href="#">
                  <?php $category_of_dates_image = get_sub_field( 'category_of_dates_image' ); ?>
	              	<?php if ( $category_of_dates_image ) : ?>
			              <img class="w-100" src="<?php echo esc_url( $category_of_dates_image['url'] ); ?>" alt="<?php echo esc_attr( $category_of_dates_image['alt'] ); ?>" />
	               	<?php endif; ?>
                  <div class="section-dating-info position-absolute">
                    <span><?php the_sub_field( 'category_of_dates_span' ); ?></span>
                    <h3><?php the_sub_field( 'category_of_dates_header' ); ?></h3>
                  </div>
                  </a>
                  
                </div>
                <?php endwhile; ?>
                <?php endif; ?>      
            </div>

            
        </div>
    </section>

    <section class="contact-us">
      <div class="row-contact-us d-flex">

        <div class="col-md-6 col-sm-6">
          <div class="contact-us-text"><?php the_field( 'category_of_dates_contact_text' ); ?></div> 
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