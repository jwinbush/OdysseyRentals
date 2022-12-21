<?php
/**
 * Author: Matt Cool, Steven Casada, Jawon Winbush
 * Date: 11/17/2022
 * File: index_view.class.php
 * Description: define a header and footer for use in the rest of the web pages
 */

class IndexView
{

    //this method displays the page header
    static public function displayHeader($page_title)
    {

        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title> <?php echo $page_title ?> </title>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
            <link rel="icon" href='<?= BASE_URL ?>/www/img/cars/odyssey.ico' type="image/png">
            <link type='text/css' rel='stylesheet' href='<?= BASE_URL ?>/www/css/styles.css'/>
            <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
            <script>
                //create the JavaScript variable for the base url
                var base_url = "<?= BASE_URL ?>";

                document.addEventListener('click', function handleClickOutsideBox(event) {
                    const nav = document.getElementById('search-field');
                    const box = document.getElementById('suggestionDiv');
                    if (!nav.contains(event.target)) {
                        box.style.border = 'none';
                    }
                });
            </script>
        </head>

        <body>
        <header>
            <div class="cm-navigation-area">
                <div class="cm-navigation px-5-percent">

                    <div class="cm-logo">
                        <a class="cm-logo-link" href="<?= BASE_URL ?>" >
                            <img src='<?= BASE_URL ?>/www/img/odysseyrental.png' alt="codesign">
                        </a>
                    </div>

                    <div class="cm-nav-searchbar">
                        <form method="get" action="<?= BASE_URL ?>/car/search"  class="field-container">
                            <input type="text" name="query-terms" placeholder="Search makes, models, keywords" class="search-field" autocomplete="off" onkeyup="handleKeyUp(event) "/>
                            <div class="icons-container">
                                <div class="icon-search">

                                </div>
                            </div>
                        </form>
                        <div id="suggestionDiv"></div>
                    </div>

                    <div class="cm-nav mr-md-2">
                        <nav>
                            <ul>
                                <li class="cm-currency">
                                    <a class="cm-currency-link" href="<?= BASE_URL ?>/car/index">
                                        Vehicles
                                    </a>
                                </li>

                                <li class="cm-cart">
                                    <a id="cm-cart-link" href="">
                                        <span class="cm-cart-badge has-badge" data-count="0"></span>
                                        <span><img class="cart-img" src="https://i.imgur.com/XMiXKD4.png" alt=""></span>
                                    </a>
                                </li>

                                <li class="cm-join-button d-none d-md-flex">

                                    <?php
                if (!isset($_COOKIE['id'])){
                    echo '<a class="cm-join-button-link" href="'. BASE_URL . '/user/login">Login</a>';
                }
                else{
                    echo '<div id="userName"><h3>Hello, ' . $_COOKIE['fname'] . '</h3></div>';

                }

            ?>
                                </li>


                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </header>
        <?php
    }//end of displayHeader function

    //this method displays the page footer
    public static function displayFooter()
    {
        ?>
        <div id="push"></div>
        <div id="footer">&copy 2022 Car Website. All Rights Reserved.<br>This website is used for educational
            purposes only.
        </div>
        <script type="text/javascript" src="<?= BASE_URL ?>/www/js/ajax_autosuggestion.js"></script>
        </body>
        </html>
        <?php
    } //end of displayFooter function
}
