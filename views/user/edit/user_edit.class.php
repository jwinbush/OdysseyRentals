<?php
/*
 * Author: Kylee Dicken
 * Date: Apr 11, 2022
 */

class UserEdit extends IndexView {
    public function display($user) {

        $user_id = $user->getUserId();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $firstname = $user->getFirstName();
        $lastname = $user->getLastName();


        parent::displayHeader("Edit Profile");

        ?>

        <div>
            <div class="flex justify-center items-center h-screen pt-26">
                <form class="w-full max-w-xl bg-white p-8 rounded-lg shadow-md" method='post' action='<?= BASE_URL ?>/user/update/<?= $user_id ?>'>
                    <h2 class="text-xl font-bold mb-4">Account Information</h2>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="email">
                            Email
                        </label>
                        <input
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name="email"
                                value="<?= $email ?>"
                                type="text"
                                placeholder="Enter Email"
                        >
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="password">
                            Password
                        </label>
                        <input
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name="password"
                                value="<?= $password ?>"
                                type="text"
                                placeholder="Enter Password"
                                required
                        >
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="firstname">
                            First Name
                        </label>
                        <input
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name="firstname"
                                value="<?= $firstname ?>"
                                type="text"
                                placeholder="Enter Firstname"
                                required
                        >
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="lastname">
                            Last Name
                        </label>
                        <input
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name="lastname"
                                value="<?= $lastname ?>"
                                type="text"
                                placeholder="Enter Lastname"
                                required
                        >
                    </div>
                    <div class="flex items-center justify-between">
                        <a href="<?= BASE_URL ?>/user/update/<?= $user_id ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Update
                        </a>
                        <a  href="<?= BASE_URL ?>/user/delete/<?= $user_id ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Delete
                        </a>
                        <a href="<?= BASE_URL ?>/user/detail/<?= $user_id ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>


        <?php
        parent::displayFooter();
    }
}