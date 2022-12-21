<?php
/**
 * Author: Steven Casada
 * Date: 11/30/2022
 * File: home_index.class.php
 * Description:
 */

class HomeIndex extends IndexView {

    public function display() {
        //display page header
        parent::displayHeader("Odyssey Rentals | Home");
        ?>

<div>
    <div id='wrapper'>

        <h1 style=' font-size: 44px; vertical-align: top ; padding-top: 20px; text-align: center; font-weight: 100;'> Take an adventure with Odyssey Rentals.</h1>
        <p style='font-size: 14pt; text-align: center; font-weight: 400;'> Rent a car today.</p>

    </div>

</div>
        <a href="<?= BASE_URL ?>/car/index">
            <div class="home-btn">
                Look Around
            </div>
        </a>


        <!-- CATEGORY -->
        <section class="section category ">
            <h2 class="section__title">Categories for you</h2>
            <div class="category__container container grid">
                <div class="category__data">
                    <a href="<?= BASE_URL ?>/car/search?query-terms=car">
                        <img src="<?= BASE_URL ?>/www/img/cars/coupe.png" alt="" class="category__img">
                    </a>
                    <h3 class="category__title">Coupe</h3>
                    <p class="category__description">Boasting a sizable dose of luxury.</p>
                </div>
                <div class="category__data">
                    <img src="<?= BASE_URL ?>/www/img/cars/sedan.png" alt="" class="category__img">
                    <h3 class="category__title ">Sedan</h3>
                    <p class="category__description">You look at the scariest pumpkins there is.</p>
                </div>
                <div class="category__data">
                    <img src="<?= BASE_URL ?>/www/img/cars/pickup.png" alt="" class="category__img">
                    <h3 class="category__title">Pickup</h3>
                    <p class="category__description">Pick the most stylish witch hats out there.</p>
                </div>
                <div class="category__data">
                    <a href="<?= BASE_URL ?>/car/search?query-terms=car">
                        <img src="<?= BASE_URL ?>/www/img/cars/suv.png" alt="" class="category__img">
                    </a>
                    <h3 class="category__title">SUV</h3>
                    <p class="category__description">Boasting a sizable dose of luxury.</p>
                </div>
                <div class="category__data">
                    <img src="<?= BASE_URL ?>/www/img/cars/Van.png" alt="" class="category__img">
                    <h3 class="category__title ">Van</h3>
                    <p class="category__description">You look at the scariest pumpkins there is.</p>
                </div>
                <div class="category__data">
                    <img src="<?= BASE_URL ?>/www/img/cars/minivan.png" alt="" class="category__img">
                    <h3 class="category__title">Minivan</h3>
                    <p class="category__description">Pick the most stylish witch hats out there.</p>
                </div>
            </div>
        </section>
        <!-- ABOUT -->
        <section class="section about" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title about__title">About Halloween <br> Night </h2>
                    <p class="about__description">Night of all the saints, or all the dead, is celebrated on October 31 and it is a very fun international celebration, this celebration comes from ancient origins, and is already celebrated by everyone. </p>
                    <a href="#" class="book--now">
                        <img src="https://assets.codepen.io/7773162/svgviewer-output+%281%29_3.svg" alt="" />
                    </a>
                </div>
                <img src="https://assets.codepen.io/7773162/about-img.png" alt="" class="about__img">
            </div>
        </section>


        <?php
        //display page footer
        parent::displayFooter();
    }

}