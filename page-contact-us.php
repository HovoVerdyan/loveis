<?php
/**
 * The template for displaying contact us page
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
    
    <section class="section-contact">
        <div class="container-fluid section-contact-container p-0 mb-0">
            <div class="section-contact-main-texts">
                <h1  class="saction-padding-left saction-padding-mx-754 mb-0"><?php the_field( 'text_area_blue' ); ?></h1>
                <h2 class="saction-padding-left saction-padding-mx-754 mb-0">
                    <?php the_field( 'text_area_rose' ); ?>
                </h2>
            </div>
        </div>
    </section>

    <section class="contact-us">
        <div class="row">

            <div class="col-12 col-sm-6 contact-page-contact-form order-2 order-sm-1">
                <div class="d-sm-none contact-us-text">Отправьте заявку и мы подберем свидание для вас!</div>
                <?php echo do_shortcode( '[wpforms id="311" title="false"]'); ?>
              </div>
  
          <div class="col-12 col-sm-6 order-1 order-sm-2">
               <div class="contact-us-more-info">
                   <div class="icon-row icon-row-1">
                     <span>Телефон</span>
                     <div><a href="tel:<?php the_field( 'contact_us_phone' ); ?>"><?php the_field( 'contact_us_phone' ); ?></a></div>
                   </div>
                   <div class="icon-row icon-row-2">
                    <span>E-mail</span>
                    <div><a href="mailto:<?php the_field( 'contact_us_email' ); ?>"><?php the_field( 'contact_us_email' ); ?></a></div>
                  </div>
                  <div class="icon-row icon-row-3">
                    <span>Мессенджеры</span>
                    <div><a href="https://wa.me/<?php the_field( 'contact_us_wahts_up' ); ?>">WhatsApp</a>&nbsp;<a href="<?php the_field( 'contact_us_telegram' ); ?>">Telegram</a></div>
                  </div>
                  <div class="icon-row icon-row-3">
                    <span>Мессенджеры</span>
                    <div class="d-flex pt-2">
                        <a href="<?php the_field( 'contact_us_vk' ); ?>" class="pe-2"><img src="https://loveiscompany.ru/wp-content/uploads/2021/08/contact-us-vk.png"></a>
                        <a href="<?php the_field( 'contact_us_facebook' ); ?>" class="pe-2"><img src="https://loveiscompany.ru/wp-content/uploads/2021/08/contact-us-facebook.png"></a>
                        <a href="<?php the_field( 'contact_us_instagram' ); ?>"><img src="https://loveiscompany.ru/wp-content/uploads/2021/08/contact-us-insta.png"></a>
                    </div>
                  </div>
               </div>
          </div>
  
        </div>
      </section>

<?php get_footer(); ?>