<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/data/css/style.css">
    <title>WP BASE PROJECT</title>
    <?php wp_head(); ?>
  </head>
  <body>

<header>
  <div class="l-header">
    <div class="l-header__inner">
        <?php if(is_front_page()): ?>
        <h1 class="l-header__logo"><a href="<?php echo home_url('/') ?>" class="l-header__logo__anchor">Logo</a></h1>
        <?php else: ?>
        <p class="l-header__logo"><a href="<?php echo home_url('/') ?>" class="l-header__logo__anchor">Logo</a></p>
        <?php endif; ?>

        <nav class="l-nav">
            <p class="u-sp-only l-nav__trigger">
                <button class="l-nav__trigger__button">
                    <span class="l-nav__trigger__line"></span>
                    <span class="l-nav__trigger__line"></span>
                    <span class="l-nav__trigger__line"></span>
                </button>
            </p>

            <div class="">
                <ul class="l-nav__content u-pc-only">
                    <li class="l-nav__content__menu"><a href="<?php echo home_url('/') ?>" class="l-nav__content__menu__anchor">Home</a></li>
                    <li class="l-nav__content__menu"><a href="#" class="l-nav__content__menu__anchor">SubPage1</a></li>
                    <li class="l-nav__content__menu"><a href="#" class="l-nav__content__menu__anchor">SubPage2</a></li>
                    <li class="l-nav__content__menu"><a href="#" class="l-nav__content__menu__anchor">SubPage3</a></li>
                </ul>
            </div>
        </nav>
    </div>
  </div>
  <div class="">
      <ul class="l-nav__content u-sp-only">
          <li class="l-nav__content__menu"><a href="<?php echo home_url('/') ?>" class="l-nav__content__menu__anchor">Home</a></li>
          <li class="l-nav__content__menu"><a href="#" class="l-nav__content__menu__anchor">SubPage1</a></li>
          <li class="l-nav__content__menu"><a href="#" class="l-nav__content__menu__anchor">SubPage2</a></li>
          <li class="l-nav__content__menu"><a href="#" class="l-nav__content__menu__anchor">SubPage3</a></li>
      </ul>
  </div>
</header>
