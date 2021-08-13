<?php 

/**
 * The template for displaying more info page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Love is
 */

 

$slider_image_1 = get_field( 'slider_image_1' );
$slider_image_2 = get_field( 'slider_image_2' );
$slider_image_3 = get_field( 'slider_image_3' );
$slider_image_4 = get_field( 'slider_image_4' );
$slider_image_5 = get_field( 'slider_image_5' );

get_header(); 

?>

    <section class="section-services">
        <div class="container-fluid section-services-container p-0 mb-0">
            <div class="section-services-main-texts">
                <span class="saction-padding-left saction-padding-mx-754"><?php the_field( 'more_info_header_span' ); ?></span>
                <h1  class="saction-padding-left saction-padding-mx-754 mb-0"><?php the_field( 'more_info_header' ); ?></h1>
                <p class="saction-padding-left saction-padding-mx-754 mb-0">
                   <?php the_field( 'more_info_text_area' ); ?>
                </p>
            </div>

       <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      

      <div class="carousel-inner">
      <img height="609"  class="w-100 carousel-item active" src="<?php echo esc_url( $slider_image_1['url'] ); ?>" alt="<?php echo esc_attr( $slider_image_1['alt'] ); ?>">
      <img height="609"  class="w-100 carousel-item" src="<?php echo esc_url( $slider_image_2['url'] ); ?>" alt="<?php echo esc_attr( $slider_image_2['alt'] ); ?>">
      <img height="609"  class="w-100 carousel-item"src="<?php echo esc_url( $slider_image_3['url'] ); ?>" alt="<?php echo esc_attr( $slider_image_3['alt'] ); ?>">
      <img height="609"  class="w-100 carousel-item" src="<?php echo esc_url( $slider_image_4['url'] ); ?>" alt="<?php echo esc_attr( $slider_image_4['alt'] ); ?>">
      <img height="609"  class="w-100 carousel-item" src="<?php echo esc_url( $slider_image_5['url'] ); ?>" alt="<?php echo esc_attr( $slider_image_5['alt'] ); ?>">
      </div> 

      <div style="position: relative !important; bottom: 57px !important;" class="carousel-indicators">
        <button style="height: 12px; width: 12px; border-radius: 50%;  border: 1px solid #FFFFFF; background: none; margin-right: 27px;" type="button" data-bs-target="#myCarousel" data-bs-slide-to="0"  class="slider-button active" aria-current="true" aria-label="Slide 1"></button>
        <button style="height: 12px; width: 12px; border-radius: 50%;  border: 1px solid #FFFFFF; background: none; margin-right: 27px;" type="button" data-bs-target="#myCarousel" class="slider-button" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button style="height: 12px; width: 12px; border-radius: 50%;  border: 1px solid #FFFFFF; background: none; margin-right: 27px;" type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" class="slider-button slider-button-last" aria-label="Slide 3"></button>
        <button style="height: 12px; width: 12px; border-radius: 50%;  border: 1px solid #FFFFFF; background: none; margin-right: 27px;" type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" class="slider-button slider-button-last" aria-label="Slide 3"></button>
        <button style="height: 12px; width: 12px; border-radius: 50%;  border: 1px solid #FFFFFF; background: none;" type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" class="slider-button slider-button-last" aria-label="Slide 3"></button>
      </div>
    </div>

            
            <div class="section-services-options">
              <h2 class="section-services-options-header text-center"><?php the_field( 'pricing' ); ?></h2>
          
              <div class="section-services-options-tarrifs d-lg-flex">
              
              <?php if ( have_rows( 'pricing_table' ) ) : ?>
                <?php while ( have_rows( 'pricing_table' ) ) : the_row(); ?>
                <div class="col-lg-4 col-sm-12 section-services-tarrif  bg-white me-3 position-relative">
                    <div class="section-services-tarrif-header"><?php the_sub_field( 'pricing_header' ); ?></div>
                    <ul class="section-services-tarrif-ul">
                    <?php if ( have_rows( 'pricing_included_services' ) ) : ?>
			            <?php while ( have_rows( 'pricing_included_services' ) ) : the_row(); ?>
                        <li><?php the_sub_field( 'included_services' ); ?></li>
                        <?php endwhile; ?>
		            <?php endif; ?>
                    </ul>
                    <div class="section-services-tarrif-price-and-btn d-flex justify-content-center position-absolute">
                        <div class="section-services-tarrif-price-and-btn_inner">
                            <div class="text-center pb-2"><?php the_sub_field( 'price' ); ?></div>
                            <div class="col-6 button-container">
                                <a class="services-contact-form-button" href="#"><?php the_sub_field( 'button_text_area' ); ?></a>
                            </div>  
                        </div>         
                    </div> 
                </div>
                <?php endwhile; ?>
              <?php endif; ?>
                

              </div>
              
            </div>
             
            <h2 class="section-services-additional-services-h2 text-center mb-0"><?php the_field( 'additional_services' ); ?></h2>

            <div class="section-services-additional-texts">
            <?php if ( have_rows( 'additional_services_items' ) ) : ?>
	           <?php while ( have_rows( 'additional_services_items' ) ) : the_row(); ?>
                <div class="section-services-additional-item d-flex w-100 justify-content-between">
                    <div class="section-services-additional-item-text"><?php the_sub_field( 'service_name' ); ?></div>
                    <div class="section-services-additional-item-price"><?php the_sub_field( 'service_price' ); ?></div>
                </div>
                <?php endwhile; ?>
               <?php endif; ?>

            </div>

        </div>
        
    </section>

    <section class="contact-us">
      <div class="row-contact-us d-flex">

        <div class="col-md-6 col-sm-6">
          <div class="contact-us-text"> Отправьте заявку и мы подберем свидание для вас!</div> 
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