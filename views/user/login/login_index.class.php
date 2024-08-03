<?php
/**
 * Author: Steven Casada
 * Date: 12/8/2022
 * File: register_index.class.php
 * Description: Log in form
 */

class UserLogin extends IndexView
{


    public function display()
    {
        //display page header
        parent::displayHeader("Login | Odyssey Rentals");
        $message = "Email or Password incorrect, please try again.";

        ?>
        <body class="overflow-hidden">
        <!-- component -->
        <div class="h-screen md:flex">
            <div
                    class="overflow-hidden md:flex w-3/4 bg-cover bg-center i justify-around items-center hidden" style="background-image: url('https://millionmilesecrets.com/wp-content/uploads/shutterstock_704175295-1.jpg')">
                <div class="p-8 backdrop-blur-md w-[35vw]">
                    <h1 class="text-black font-extrabold text-2xl">Unlock Your Next Adventure</h1>
                    <p class="text-black mt-1">Become a member to access premium vehicles and special offers</p>
                <a  href="<?= BASE_URL ?>/user/create">
                    <button type="submit"
                            class="sign-up-button block w-28 mt-4">Sign up
                    </button>
                </a>
                </div>

            </div>
            <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
                <form class="bg-white" action='<?= BASE_URL ?>/user/verify' method="post">
                    <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
                    <p class="text-sm font-normal text-gray-600 mb-7">Welcome Back</p>
                    <div class="flex items-center border-2 py-2 px-3 rounded-lg mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"/>
                        </svg>
                        <input class="pl-2 outline-none border-none" type="text" name="email"placeholder="email" required/>
                    </div>

                    <div class="flex items-center border-2 py-2 px-3 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <input class="pl-2 outline-none border-none" type="password" name="password" placeholder="Password" required/>
                    </div>
                    <button type="submit" name="submit"
                            class="sign-up-button block w-full mt-4 py-2 rounded-lg text-white mb-2">Sign in
                    </button>
                    <span class="text-sm ml-2 hover:text-orange-600 cursor-pointer">Forgot Password ?</span>
                    <p class="text-xs ml-2 text-red-500 cursor-pointer"><?php   if (trim($_GET['message']) != "") {
                            echo $message;
                        } ?></p>


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