<?php
/**
 * Author: Matt Cool, Steven Casada, Jawon Winbush
 * Date: 11/17/2022
 * File: car_index_view.class.php
 * Description: parent file for car views
 */

class CarIndexView extends IndexView {

    public static function displayHeader($title) {
        parent::displayHeader($title)


        ?>

        <script>
        //the media type
        var media = "car";
        </script>

        <?php
    }

    public static function displayFooter() {
        parent::displayFooter();
    }

}