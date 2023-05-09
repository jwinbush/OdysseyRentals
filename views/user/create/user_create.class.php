<?php
/**
 * Author: Steven Casada
 * Date: 12/8/2022
 * File: register_index.class.php
 * Description: Log in form
 */

class UserCreate extends IndexView
{
    public function display()
    {
        //display page header
        parent::displayHeader("Sign Up | Odyssey Rentals");
        ?>
        <body class="overflow-hidden">
        <!-- component -->
        <div class="h-screen md:flex">
            <div
                    class="overflow-hidden md:flex w-3/4 bg-cover bg-center i justify-around items-center hidden" style="background-image: url('https://cdn.outsideonline.com/wp-content/uploads/2017/02/21/on-road-off-road-cars-trucks-12_h.jpg?width=2400&ratio=16/9')">
                <div class="p-8 backdrop-blur-md">
                    <h1 class="text-black font-bold text-2xl">Odyssey Rentals</h1>
                    <p class="text-black mt-1">Sign in for a better experience</p>
                    <a  href="<?= BASE_URL ?>/user/login">
                        <button type="submit"
                                class="block w-28 bg-gradient-to-r from-blue-500 to-cyan-400 text-white mt-4 py-2 rounded-lg font-bold mb-2">Sign in
                        </button>
                    </a>
                </div>

            </div>
            <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
                <form class="bg-white" action='<?= BASE_URL ?>/user/add' method="post">
                    <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
                    <p class="text-sm font-normal text-gray-600 mb-7">Welcome Back</p>
                    <div class="flex items-center border-2 py-2 px-3 rounded-lg mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <input class="pl-2 outline-none border-none" type="text" name="firstname" placeholder="First name"/>
                    </div>
                    <div class="flex items-center border-2 py-2 px-3 rounded-lg mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <input class="pl-2 outline-none border-none" type="text" name="lastname" placeholder="Last name"/>
                    </div>

                    <div class="flex items-center border-2 py-2 px-3 rounded-lg mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                        </svg>
                        <input class="pl-2 outline-none border-none" type="text" name="email"
                               placeholder="Email Address"/>
                    </div>
                    <div class="flex items-center border-2 py-2 px-3 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <input class="pl-2 outline-none border-none" type="password" name="password"  placeholder="Password"/>
                    </div>
                    <button
                            class="block w-full bg-gradient-to-r from-blue-500 to-cyan-400 text-white mt-4 py-2 rounded-lg text-white font-semibold mb-2">Sign Up
                    </button>

                    <!--Sign Up checkbox confirmation-->
                    <fieldset class="pt-10">
                        <legend class="sr-only">Checkbox variants</legend>

                        <div class="flex items-center mb-4">
                            <input id="checkbox-1" type="checkbox" value=""
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I
                                agree to the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500" data-modal-target="defaultModal" data-modal-toggle="defaultModal" id="terms">terms
                                    and conditions</a>.</label>
                        </div>

                        <!-- Main modal -->
                        <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                            <div class="relative w-full h-full max-w-2xl md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Terms of Service
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-6 space-y-6">
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                                        </p>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button data-modal-hide="defaultModal" type="button" id="accept" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                                        <button data-modal-hide="defaultModal" type="button" id="decline" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center mb-4">
                            <input id="checkbox-2" type="checkbox" value=""
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I
                                want to get promotional offers</label>
                        </div>

                        <div class="flex items-center mb-4">
                            <input id="checkbox-3" type="checkbox" value=""
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            <label for="checkbox-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I
                                am 21 years or older</label>
                        </div>
                    </fieldset>

                </form>

            </div>
        </div>
        <!--        <div id="main-header">Log In</div>-->
        <!---->
        <!--        <body class="container">-->
        <!--        <h1 class="page-title">-->
        <!--            Welcome Again-->
        <!--        </h1>-->
        <!--        <span class="page-desc">-->
        <!--    Welcome back you've been missed!-->
        <!--  </span>-->
        <!--        <div class="error-noti">-->
        <!--            Welcome back you've been missed!-->
        <!--        </div>-->
        <!--        <form action="--><?//= BASE_URL ?><!--/user/verify" method="post" class="login-form form">-->
        <!--            <input type="email" name="username" class="input error-input" placeholder="Username">-->
        <!--            <input type="password" name="password" class="input" placeholder="Password">-->
        <!--            <a class="forgot-link" href="#">Forgot password?</a>-->
        <!--            <input type="submit" value="Login" class="send-btn btn">-->
        <!---->
        <!--        </form>-->
        <!--        </body>-->
        <!---->
        <!-- Buy me a coffe script -->
        <!--        <script data-name="BMC-Widget" data-cfasync="false"-->
        <!--                src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="vbattalshn"-->
        <!--                data-description="Support me on Buy me a coffee!" data-message="" data-color="#5F7FFF"-->
        <!--                data-position="Right" data-x_margin="18" data-y_margin="18"></script>-->
        <!--        <h1 class="page-title">-->
        <!--            Welcome Again-->
        <!--        </h1>-->
        <!--        <span class="page-desc">-->
        <!--    Welcome back you've been missed!-->
        <!--  </span>-->
        <!---->
        <!---->
        </body>

        <script >   // Grabs all the Elements by their IDs which we had given them
            let modal = document.getElementById("defaultModal");

            let btn = document.getElementById("terms");

            let button = document.getElementById("accept");
            btn.onclick = function() {
                modal.style.display = "block";
            }
            // We want the modal to close when the OK button is clicked
            button.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

        </script>
        <?php
        //display page footer
        parent::displayFooter();
    }

}