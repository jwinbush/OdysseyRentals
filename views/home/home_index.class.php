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

        <h1 style=' font-size: 38px; vertical-align: top ; top: -5%; text-align: center; font-weight: 800;'> Take an adventure with Odyssey Rentals.</h1>
        <p style='font-size: 14pt; text-align: center; font-weight: 400;'> Rent a car today.</p>

    </div>

</div>

        <div class="home-btn">
            <a href="<?= BASE_URL ?>/car/index">View Inventory</a>

        </div>

        <!-- CATEGORY -->
        <section class="section category">
            <h2 class="section__title">Favorite Scare <br> Category </h2>
            <div class="category__container container grid">
                <div class="category__data">
                    <img src="https://assets.codepen.io/7773162/category1-img.png" alt="" class="category__img">
                    <h3 class="category__title">Ghosts</h3>
                    <p class="category__description">Choose the ghosts, the scariest there are.</p>
                </div>
                <div class="category__data">
                    <img src="https://assets.codepen.io/7773162/category2-img.png" alt="" class="category__img">
                    <h3 class="category__title">Pumpkins</h3>
                    <p class="category__description">You look at the scariest pumpkins there is.</p>
                </div>
                <div class="category__data">
                    <img src="https://assets.codepen.io/7773162/category3-img.png" alt="" class="category__img">
                    <h3 class="category__title">Witch Hat</h3>
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