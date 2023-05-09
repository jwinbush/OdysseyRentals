<?php

class UserError {
    public function display($message) {
        parent::displayHeader("Error", "black");

        ?>

        <div class="pt-20">
            <h1><?php $message ?></h1>
        </div>

        <?php
        parent::displayFooter();
    }
}