<?php
/**
 * Author: Steven Casada
 * Date: 12/8/2022
 * File: register.class.php
 * Description: Log in form
 */

class RegisterIndex extends IndexView
{


    public function display()
    {
        //display page header
        parent::displayHeader("Sign Up | Odyssey Rentals");
        ?>
        <body>
        <!-- component -->
        <div class="h-screen md:flex">
            <div
                    class="overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 i justify-around items-center hidden">
                <div>
                    <h1 class="text-white font-bold text-4xl font-sans">GoFinance</h1>
                    <p class="text-white mt-1">The most popular peer to peer lending at SEA</p>
                    <button type="submit"
                            class="block w-28 bg-white text-indigo-800 mt-4 py-2 rounded-2xl font-bold mb-2">Read More
                    </button>
                </div>

            </div>
            <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
                <form class="bg-white">
                    <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
                    <p class="text-sm font-normal text-gray-600 mb-7">Welcome Back</p>
                    <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Full name"/>
                    </div>
                    <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"/>
                        </svg>
                        <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Username"/>
                    </div>
                    <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                        </svg>
                        <input class="pl-2 outline-none border-none" type="text" name="" id=""
                               placeholder="Email Address"/>
                    </div>
                    <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Password"/>
                    </div>
                    <button type="submit"
                            class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Sign Up
                    </button>
                    <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer">Forgot Password ?</span>

                    <!--Sign up checkbox confirmation-->
                    <fieldset class="pt-10">
                        <legend class="sr-only">Checkbox variants</legend>

                        <div class="flex items-center mb-4">
                            <input checked id="checkbox-1" type="checkbox" value=""
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I
                                agree to the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms
                                    and conditions</a>.</label>
                        </div>

                        <div class="flex items-center mb-4">
                            <input id="checkbox-2" type="checkbox" value=""
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I
                                want to get promotional offers</label>
                        </div>

                        <div class="flex items-center mb-4">
                            <input id="checkbox-3" type="checkbox" value=""
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I
                                am 18 years or older</label>
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


        <?php
        //display page footer
        parent::displayFooter();
    }

}