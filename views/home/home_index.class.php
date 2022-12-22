<?php
/**
 * Author: Steven Casada
 * Date: 11/30/2022
 * File: home_index.class.php
 * Description:
 */

class HomeIndex extends IndexView
{

    public function display()
    {
        //display page header
        parent::displayHeader("Car Rentals from $45/day - Search for Rental Cars on Odyssey Rentals");
        ?>

        <div>
            <div id='wrapper'>
                <h1 style=' font-size: 45px; vertical-align: top ; padding-top: 20px; text-align: center; font-weight: 100;'>
                    Take an adventure with Odyssey Rentals.</h1>
                <p style='font-size: 14pt; text-align: center; font-weight: 400;'> Rent a car today.</p>

                <!-- Reservations-->
                <section>
                    <form class="hotel-reservation-form" method="post" action="">
                        <div class="fields">
                            <!-- Input Elements -->
                            <div>
                                <div>
                                    <label for="pickup">Pick-up *</label>
                                    <div class="field">
                                        <input id="pickup" type="datetime-local" name="pickup" required>
                                    </div>
                                </div>
                                <div class="gap"></div>
                                <div>
                                    <label for="return">Return *</label>
                                    <div class="field">
                                        <input id="return" type="datetime-local" name="return" required>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <label for="first_name">First Name *</label>
                                    <div class="field">
                                        <i class="fas fa-user"></i>
                                        <input id="first_name" type="text" name="first_name" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="gap"></div>
                                <div>
                                    <label for="last_name">Last Name *</label>
                                    <div class="field">
                                        <i class="fas fa-user"></i>
                                        <input id="last_name" type="text" name="last_name" placeholder="Last Name" required>
                                    </div>
                                </div>
                            </div>
                            <label for="email">Email *</label>
                            <div class="field">
                                <i class="fas fa-envelope"></i>
                                <input id="email" type="email" name="email" placeholder="Your Email" required>
                            </div>
                            <label for="phone">Phone *</label>
                            <div class="field">
                                <i class="fas fa-phone"></i>
                                <input id="phone" type="tel" name="phone" placeholder="Your Phone Number" required>
                            </div>
                            <div>
                                <div>
                                    <label for="age">Age *</label>
                                    <div class="field">
                                        <select id="age" name="age" required>
                                            <option disabled selected value="">--</option>
                                            <option value="1">18</option>
                                            <option value="2">19</option>
                                            <option value="3">20</option>
                                            <option value="4">21</option>
                                            <option value="5">22</option>
                                            <option value="6">23</option>
                                            <option value="7">24</option>
                                            <option value="8">25+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="gap"></div>

                                <input type="submit" value="Reserve">
                            </div>
                        </div>
                    </form>
                </section>

            </div>

        </div>

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
                    <p class="category__description">Sometimes known as a saloon in British English.</p>
                </div>
                <div class="category__data">
                    <img src="<?= BASE_URL ?>/www/img/cars/compact.png" alt="" class="category__img">
                    <h3 class="category__title">Compact</h3>
                    <p class="category__description">If you don't need too much space, this is the right car for you.</p>
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
                    <img src="<?= BASE_URL ?>/www/img/cars/pickup.png" alt="" class="category__img">
                    <h3 class="category__title">Pickup</h3>
                    <p class="category__description">Pick the most stylish witch hats out there.</p>
                </div>
            </div>
        </section>


        <!-- ABOUT -->
        <section class="section about" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title about__title">About Odyssey <br> Rentals </h2>
                    <p class="about__description">
                        Odyssey Rentals is an ongoing success story.
                        Our guiding principles, and humble beginning, revolve around personal honesty and integrity.
                        We believe in strengthening our communities one neighborhood at a time, serving our customers as if they were our family, and rewarding hard work.
                        These things are as true today as they were when we were founded in 2022.
                        Today, our massive network means Enterprise is the largest transportation solutions provider.
                        We offer car and truck rentals, as well as car sharing and car sales. We're there when you need us with over 8,000 locations worldwide.
                        We take an active role in sustainability, not only because it’s smart for our business, but because we believe in making the world a better place for future generations.
                        Because of our size, we are in a unique position to foster innovation, advance research and test market-driven solutions. </p>
                    <a href="#" class="book--now">
                        <img src="https://assets.codepen.io/7773162/svgviewer-output+%281%29_3.svg" alt=""/>
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