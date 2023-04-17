
<?php
class CartController {
    //put your code here
    public function index() {
        $view = new CartIndex();
        $view->display();
    }
}
?>