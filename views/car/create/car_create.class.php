<?php
/**
 *Author: your name*
 * Date: 4/13/2022
 * File: flight_create.class.php
 * Description:
 */


class CarCreate extends IndexView
{
    public function display()
    {

        parent::displayHeader("Create Car", "white");

        ?>
        <div class="flex justify-center items-center h-screen pt-26">
            <form class="w-full max-w-xl bg-white p-8 rounded-lg shadow-md" method='post' action='<?= BASE_URL ?>/car/add'>
                <h2 class="text-xl font-bold mb-4">Car Information</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="make">
                        Make
                    </label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="make"
                        type="text"
                        placeholder="Enter Make"
                        required
                    >
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="model">
                        Model
                    </label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="model"
                        type="text"
                        placeholder="Enter Model"
                        required
                    >
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="year">
                        Year
                    </label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="year"
                        type="text"
                        placeholder="Enter Year"
                        required
                    >
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="image">
                        Image
                    </label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="image"
                        type="text"
                        placeholder="Enter Image URL"
                        required
                    >
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="description">
                        Description
                    </label>
                    <textarea
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="description"
                        placeholder="Enter Description"
                        rows="5"
                        required
                    ></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="price">
                        Price
                    </label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="price"
                        type="text"
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


        <?php

        parent::displayFooter();
    }
}