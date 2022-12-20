<?php
/**
 * Author: Steven Casada
 * Date: 12/8/2022
 * File: login_index.class.php
 * Description: Log in form
 */

class LoginIndex extends IndexView {


    public function display() {
        //display page header
        parent::displayHeader("Log In");
        ?>
        <div id="main-header">Log In</div>

        <body class="container">
        <h1 class="page-title">
            Welcome Again
        </h1>
        <span class="page-desc">
    Welcome back you've been missed!
  </span>
        <div class="error-noti">
            Welcome back you've been missed!
        </div>
        <form action="<?= BASE_URL ?>/user/verify" method="post" class="login-form form">
            <input type="email" name="username" class="input error-input" placeholder="Username">
            <input type="password" name="password" class="input" placeholder="Password">
            <a class="forgot-link" href="#">Forgot password?</a>
            <input type="submit" value="Login" class="send-btn btn">

        </form>
        </body>

        <!-- Buy me a coffe script -->
        <script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="vbattalshn" data-description="Support me on Buy me a coffee!" data-message="" data-color="#5F7FFF" data-position="Right" data-x_margin="18" data-y_margin="18"></script>
        <h1 class="page-title">
            Welcome Again
        </h1>
        <span class="page-desc">
    Welcome back you've been missed!
  </span>


        </body>


        <?php
        //display page footer
        parent::displayFooter();
    }

}