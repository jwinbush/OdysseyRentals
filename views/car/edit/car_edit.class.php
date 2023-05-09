<?php
/**
 * Author: Jawon Winbush
 * Date: 12/7/22
 * File: car_edit.class.php
 * Description:
 */

class CarEdit extends CarIndexView {

    public function display($car) {
        //display page header
        parent::displayHeader("Edit Car");

        $car_id = $car->getId();
        $category = $car->getCategory();
        $make = $car->getMake();
        $model = $car->getModel();
        $year = $car->getYear();
        $image = $car->getImage();
        $price = $car->getPrice();
        $description = $car->getDescription();

        $URL = BASE_URL;

        ?>
<div class="pt-20">
    <div class="flex justify-center items-center h-screen pt-26">
        <form class="w-full max-w-xl bg-white p-8 rounded-lg shadow-md" method='post' action='<?= BASE_URL ?>/car/update/<?=$car_id?>'>
            <h2 class="text-xl font-bold mb-4">Car Information</h2>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="category">
                    Category
                </label>
                <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="category_id"
                        value="<?= $category ?>"
                        type="text"


                >
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="make">
                    Make
                </label>
                <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="make"
                        value="<?= $make ?>"
                        type="text"

                >
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="model">
                    Model
                </label>
                <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="model"
                        value="<?= $model ?>"
                        type="text"

                >
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="year">
                    Year
                </label>
                <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="year"
                        value="<?= $year ?>"
                        type="number"
                >
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="image">
                    Image
                </label>
                <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="image"
                        value="<?= $image ?>"
                        placeholder="Enter Image URL"
                        type="text"
                        required
                >
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="description">
                    Description
                </label>
                <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="description"
                        value="<?= $description ?>"
                        type="text"
                        placeholder="Enter Description"
                        required
                >
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="price">
                    Price
                </label>
                <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="price"
                        value="<?= $price ?>"
                        type="number"
                        placeholder="Enter Price"
                        required
                >
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}