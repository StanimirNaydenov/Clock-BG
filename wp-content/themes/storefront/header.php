<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<style>
/* Стил за аналоговия часовник */
.clock {
    position: absolute;
    top: 10px; /* Разстояние от горната част на хедъра */
    right: 10px; /* Разстояние от дясната част */
    width: 100px;
    height: 100px;
    background: white; /* Бял фон */
    border: 7px solid #4A2C2A; /* Тъмно кафява рамка, по-дебела */
    border-radius: 50%;
    z-index: 1000; /* За да е над менюто */
}

.clock-face {
    position: relative;
    width: 100%;
    height: 100%;
}

.hand {
    width: 50%;
    background: black;
    position: absolute;
    top: 50%;
    transform-origin: 100%;
    transform: rotate(90deg);
    transition: all 0.05s;
    transition-timing-function: cubic-bezier(0.1, 2.7, 0.58, 1);
}

.hour-hand {
    height: 4px;
}

.minute-hand {
    height: 3px;
}

.second-hand {
    height: 1px;
    background: red;
}

.clock-number {
    position: absolute;
    font-size: 14px;
    color: #000;
    text-align: center;
    transform: translate(-50%, -50%);
}

.number12 { top: 10%; left: 50%; }
.number3 { top: 50%; left: 90%; }
.number6 { top: 90%; left: 50%; }
.number9 { top: 50%; left: 10%; }

/* Стил за чертите */
.clock-mark {
    position: absolute;
    width: 2px;
    height: 8px;
    background: #000;
    transform: translate(-50%, -50%);
}

/* Позиции на чертите */
.mark1 { top: 20%; left: 85%; transform: translate(-50%, -50%) rotate(30deg); }
.mark2 { top: 35%; left: 75%; transform: translate(-50%, -50%) rotate(60deg); }
.mark4 { top: 65%; left: 75%; transform: translate(-50%, -50%) rotate(120deg); }
.mark5 { top: 80%; left: 65%; transform: translate(-50%, -50%) rotate(150deg); }
.mark7 { top: 80%; left: 35%; transform: translate(-50%, -50%) rotate(210deg); }
.mark8 { top: 65%; left: 25%; transform: translate(-50%, -50%) rotate(240deg); }
.mark10 { top: 35%; left: 25%; transform: translate(-50%, -50%) rotate(300deg); }
.mark11 { top: 20%; left: 35%; transform: translate(-50%, -50%) rotate(330deg); }
</style>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
    <?php do_action( 'storefront_before_header' ); ?>

    <header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
        <!-- Добавяне на аналогов часовник -->
        <div class="clock">
            <div class="clock-face">
                <div class="clock-number number12">12</div>
                <div class="clock-number number3">3</div>
                <div class="clock-number number6">6</div>
                <div class="clock-number number9">9</div>
                <!-- Добавяне на черти -->
                <div class="clock-mark mark1"></div>
                <div class="clock-mark mark2"></div>
                <div class="clock-mark mark4"></div>
                <div class="clock-mark mark5"></div>
                <div class="clock-mark mark7"></div>
                <div class="clock-mark mark8"></div>
                <div class="clock-mark mark10"></div>
                <div class="clock-mark mark11"></div>
                <div class="hand hour-hand" id="hour-hand"></div>
                <div class="hand minute-hand" id="minute-hand"></div>
                <div class="hand second-hand" id="second-hand"></div>
            </div>
        </div>

        <?php
        /**
         * Functions hooked into storefront_header action
         */
        do_action( 'storefront_header' );
        ?>

    </header><!-- #masthead -->

    <?php do_action( 'storefront_before_content' ); ?>

    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">

        <?php do_action( 'storefront_content_top' ); ?>

<script>
// JavaScript за управление на часовника
function setClock() {
    const now = new Date();
    const seconds = now.getSeconds();
    const minutes = now.getMinutes();
    const hours = now.getHours();
    const secondDeg = ((seconds / 60) * 360) + 90;
    const minuteDeg = ((minutes / 60) * 360) + 90;
    const hourDeg = ((hours / 12) * 360) + ((minutes / 60) * 30) + 90;

    document.getElementById("second-hand").style.transform = `rotate(${secondDeg}deg)`;
    document.getElementById("minute-hand").style.transform = `rotate(${minuteDeg}deg)`;
    document.getElementById("hour-hand").style.transform = `rotate(${hourDeg}deg)`;
}

setInterval(setClock, 1000);
setClock();
</script>