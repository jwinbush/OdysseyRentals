<?php

/*
* Author: Matt Cool, Steven Casada, Jawon Winbush
* Date: 12/7/22
* Name: logout.class.php
* Description: Give the user notice of logout
*/
class UserLogout extends IndexView {
    public function display(){
        //display header
        parent::displayHeader("Verify");
        ?>

<div class="h-screen pt-80">
            <div class="text-5xl text-center text-black">
                <h1>You have successfully logged out.</h1>
            </div>


        <div class="flex justify-center items-center h-[200px]">
            <a href="<?= BASE_URL ?>/user/login" class="bg-gradient-to-r from-blue-500 to-cyan-400 text-white font-bold py-2 px-4 rounded">
                Return to Login
            </a>
        </div>
</div>
           <?php
        //display footer
        parent::displayFooter();
    }
}

