<?php
/*
 * Author: Kylee Dicken
 * Date: Apr 11, 2022
 */

class UserDetail extends IndexView {

    public function display($user) {

        $user_id = $user->getUserId();
        $email = $user->getEmail();
        $first_name = $user->getFirstName();
        $last_name = $user->getLastName();


        parent::displayHeader($first_name . " " . $last_name);

        if ($user_id != $_SESSION['user_id']) {
            if (isset($_SESSION['user_id'])) {
                header("Location:" . BASE_URL . "/user/detail/" . $_SESSION['user_id']); /* Redirect browser */
                exit();
            } else {
                header("Location:" . BASE_URL . "/user/login"); /* Redirect browser */
                exit();
            }
        }
        ?>

        <!-- component -->
        <div class="flex items-center h-screen justify-center">
            <div>
                <div class="bg-white shadow-xl rounded-lg py-3 min-w-5xl px-10">
                    <div class="photo-wrapper p-2">
                        <img class="w-32 h-32 rounded-full mx-auto" src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png" alt="John Doe">
                    </div>
                    <div class="p-2">
                        <h3 class="text-center text-xl text-gray-900  leading-8"><?= $first_name ?></h3>
                        <div class="text-center text-gray-400 text-xl font-semibold">
                            <p>Web Developer</p>
                        </div>
                        <table class="text-xl my-3">
                            <tbody>

                            <tr>
                                <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                                <td class="px-2 py-2"><?= $email ?></td>
                            </tr>
                            </tbody></table>

                        <div class="text-center my-3">
                            <a class="text-xl text-blue-500 italic hover:text-blue-600 font-medium" href="<?= BASE_URL ?>/user/edit/<?= $user_id ?>">Edit Profile</a>


                        </div>
                        <div class="text-center my-3">

                            <a class="text-xl text-blue-500 italic hover:text-blue-600 font-medium" href="<?= BASE_URL ?>/car/user/<?= $user_id ?>">View Cars</a>



                        </div>
                        <div class="text-center my-3">

                            <a class="text-xl text-blue-500 italic hover:text-blue-600 font-medium"href="<?= BASE_URL ?>/user/logout">Logout</a>


                        </div>

                    </div>
                </div>
            </div>

        </div>


        <?php
        parent::displayFooter();
    }
}