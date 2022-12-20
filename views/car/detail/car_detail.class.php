<?php
/**
 * Author: Jawon Winbush
 * Date: 11/17/22
 * File: car_detail.class.php
 * Description:
 */

class CarDetail extends CarIndexView
{

    public function display($car, $confirm = "")
    {
        //display page header
        parent::displayHeader("Display Car Details");

        //retrieve car details by calling get methods
        $id = $car->getId();
        $category = $car->getCategory();
        $make = $car->getMake();
        $model = $car->getModel();
        $year = $car->getYear();
        $image = $car->getImage();
        $price = $car->getPrice();
        $description = $car->getDescription();


        if (strpos($image, "http://") === false and strpos($image, "https://") === false) {
            $image = BASE_URL . '/' . CAR_IMG . $image;
        }
        ?>

        <div id="main-header">Car Details</div>
        <hr>
        <div class="row">

        <!-- display car details in a table -->
        <div class="column">
        <div id="carImg">
            <img style="max-width: 600px; height: auto; margin-left: 30%" src="<?= $image ?>" alt="<?= $model ?>"/>
        </div>
        </div>
        <br>
        <div class="column">
        <div class="table_container">
        <table class="carDetailTable">
            <tr>
                <td style="text-align: right;">
                    <p>Category:</p>
                </td>
                <td>
                    <?= $category ?>
                </td>
                <td style="text-align: right;">
                    <p>Make:</p>
                </td>
                <td>
                    <?= $make ?>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    <p>Model:</p>
                </td>
                <td>
                    <?= $model ?>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    <p>Price:</p>
                </td>
                <td>
                    <p>$<?= $price ?> per day.</p>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    <p>Year:</p>
                </td>
                <td>
                    <?= $year ?>
                </td>
            </tr>
            <tr>
                <td style="vertical-align: text-top">
                    Description:
                </td>
                <td>
                    <?= $description ?>
                </td>
            </tr>
        </table>
        </div>
        </div>
        </div>
        <br>
        <input type="button" id="edit-button" value="   Edit   "
               onclick="window.location.href = '<?= BASE_URL ?>/car/edit/<?= $id ?>'">&nbsp;
        <br>
        <a href="<?= BASE_URL ?>/car/index">Go to car list</a>

        <?php
        //display page footer
        parent::displayFooter();

    }

//end of display method
}
