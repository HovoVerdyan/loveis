<?php
/**
 * The template for displaying the header of front page
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

$navbar_logo_image = get_field( 'navbar_logo_image' );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love is</title>

    <?php wp_head(); ?>


</head>
<body>
    
  <header class="position-relative">

  <div class="mobile-navbar collapse text-white d-xl-none position-relative" id="navbarSupportedContent">
    <div class="navClose position-absolute">
      <button class="navbar-toggler navbar-toggler-custom d-xxl-none px-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <img class="navbar-toggler-icon pt-0" src="https://loveiscompany.ru/wp-content/uploads/2021/08/closeNavbar.png">    
      </button>
    </div>
    
    <div class="mobile-navbar-items mobile-navbar-text-1"><a href=""><?php the_field( 'navbar_menu_item_1' ); ?></a></div>
    <div class="mobile-navbar-items mobile-navbar-text-2"><a href=""><?php the_field( 'navbar_menu_item_2' ); ?></a></div>
    <div class="mobile-navbar-items mobile-navbar-text-3">Телефон</div>
    <div class="mobile-navbar-items mobile-navbar-text-4"><a href="tel:<?php the_field( 'navbar_numbers' ); ?>"><?php the_field( 'navbar_numbers' ); ?></a></div>
    <div class="mobile-navbar-items mobile-navbar-text-5">E-mail</div>
    <div class="mobile-navbar-items mobile-navbar-text-6"><a  href="mailto: <?php the_field( 'link_to_your_email_accout' ); ?>"><?php the_field( 'link_to_your_email_accout' ); ?></a></div>
    <div class="mobile-navbar-items mobile-navbar-text-7">Мессенджеры</div>
    <div class="mobile-navbar-items mobile-navbar-text-8 d-flex">
      <div class="pe-3"><a href="https://wa.me/<?php the_field( 'link_to_your_whats_up_account' ); ?>">WhatsApp</a></div>
      <div><a href="<?php the_field( 'link_to_your_telegram_accout' ); ?>">Telegram</a></div>
    </div>
    <div class="mobile-navbar-items mobile-navbar-text-9">Соцсети</div>
    <div class="mobile-navbar-items mobile-navbar-text-10 d-flex">
      <a href="<?php the_field( 'link_to_vk_account_' ); ?>"><img class="pe-3" src="https://loveiscompany.ru/wp-content/uploads/2021/08/mobile-vk.png"></a>
      <a href="<?php the_field( 'link_to_facebook_account' ); ?>"><img class="pe-3" src="https://loveiscompany.ru/wp-content/uploads/2021/08/mobile-fb.png"></a>
      <a href="<?php the_field( 'link_to_instagram_account' ); ?>"><img src="https://loveiscompany.ru/wp-content/uploads/2021/08/mobile-insta.png"></a>
    </div>

    <a href="#" class="mobile-navbar-items mobile-navbar-text-button"><?php the_field( 'navigation_button_text_' ); ?></a>
      
  </div>

    <nav class="navbar navbar-expand-xl p-0 main-navigation">
      <div class="container-fluid p-0 navbar-custom">
        <a class="navbar-brand navbar-love-you-img me-0 p-0" href="<?php get_home_url(); ?>">
          <?php if ( $navbar_logo_image ) : ?>
	        <img src="<?php echo esc_url( $navbar_logo_image['url'] ); ?>" alt="<?php echo esc_attr( $navbar_logo_image['alt'] ); ?>" />
          <?php endif; ?>
        </a>
        
        <button class="navbar-toggler d-xxl-none px-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <div class="d-flex">
            <div class="header-icons-ad d-xxl-none pt-1">
              <a class="pe-2" href="mailto:<?php the_field( 'link_to_your_email_accout' ); ?>"><img  height="30" width="30" class="header-vector-1" src="https://loveiscompany.ru/wp-content/uploads/2021/08/vector-email.png" alt=""></a>
              <a class="pe-2" href="https://wa.me/<?php the_field( 'link_to_your_whats_up_account' ); ?>"><img  height="30" width="30" class="header-vector-1" src="https://loveiscompany.ru/wp-content/uploads/2021/08/Vector-wp.png" alt=""></a>
              <a class="pe-3" href="<?php the_field( 'link_to_your_telegram_accout' ); ?>"><img  height="30" width="30" class="header-vector-1" src="https://loveiscompany.ru/wp-content/uploads/2021/08/akar-icons_telegram-fill.png" alt=""></a>
            </div>
            <img class="navbar-toggler-icon" src="https://loveiscompany.ru/wp-content/uploads/2021/08/Break.png">
          </div>    
        </button>

        
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link p-0" aria-current="page" href="#"><?php the_field( 'navbar_menu_item_1' ); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-second p-0" aria-current="page" href="#"><?php the_field( 'navbar_menu_item_2' ); ?></a>
              </li>
          </ul>
          <div class="love-is-call-tp-action d-flex">
            <div class="love-is-header-number p-0"><a href="tel:<?php the_field( 'navbar_numbers' ); ?>"><?php the_field( 'navbar_numbers' ); ?></a></div>
            <a href="" class="header-button"><?php the_field( 'navigation_button_text_' ); ?></a>
          </div>
          <div class="header-icons d-flex">
            <a  href="mailto:<?php the_field( 'link_to_your_email_accout' ); ?>"><img  height="30" width="30" class="header-vector-1" src="https://loveiscompany.ru/wp-content/uploads/2021/08/vector-email.png" alt=""></a>
            <a href="https://wa.me/<?php the_field( 'link_to_your_whats_up_account' ); ?>"><img  height="30" width="30" class="header-vector-1" src="https://loveiscompany.ru/wp-content/uploads/2021/08/Vector-wp.png" alt=""></a>
            <a href="<?php the_field( 'link_to_your_telegram_accout' ); ?>"><img  height="30" width="30" class="header-vector-1" src="https://loveiscompany.ru/wp-content/uploads/2021/08/akar-icons_telegram-fill.png" alt=""></a>
          </div>
        </div>
      </div>

    </nav>
    
    <div id="myCarousel" class="header-texts-container d-flex  carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button style="height: 12px; width: 12px; border-radius: 50%;  border: 1px solid #FFFFFF; background: none; margin-right: 27px;" type="button" data-bs-target="#myCarousel" data-bs-slide-to="0"  class="slider-button active" aria-current="true" aria-label="Slide 1"></button>
        <button style="height: 12px; width: 12px; border-radius: 50%;  border: 1px solid #FFFFFF; background: none; margin-right: 27px;" type="button" data-bs-target="#myCarousel" class="slider-button" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button style="height: 12px; width: 12px; border-radius: 50%;  border: 1px solid #FFFFFF; background: none;" type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" class="slider-button slider-button-last" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="header-main-text carousel-item active">
          <h1 class="text-white mb-0"><?php the_field( 'header_slider_heading_1' ); ?></h1>
          <div class="text-white"><?php the_field( 'header_slider_text_area_1' ); ?></div>
          <a class="text-white" href="#"><?php the_field( 'header_slider_button_text_area_1' ); ?></a>
        </div> 

        <div class="header-main-text carousel-item">
          <h1 class="text-white mb-0"><?php the_field( 'header_slider_heading_2' ); ?></h1>
          <div class="text-white"><?php the_field( 'header_slider_text_area_2' ); ?></div>
          <a class="text-white" href="#"><?php the_field( 'header_slider_button_text_area_2' ); ?></a>
        </div> 

        <div class="header-main-text carousel-item">
          <h1 class="text-white mb-0"><?php the_field( 'header_slider_heading_3' ); ?></h1>
          <div class="text-white"><?php the_field( 'header_slider_text_area_3' ); ?></div>
          <a class="text-white" href="#"><?php the_field( 'header_slider_button_text_area_3' ); ?></a>
        </div> 
      </div> 
    </div>
    
     <a href="#"><img class="position-absolute header-phone" src="https://loveiscompany.ru/wp-content/uploads/2021/08/phone.png"></a>

</header>