<?php
include_once "Controller.php";

class CheckoutController extends Controller{

    function getCheckout(){
        return $this->loadView('checkout');
    }
}


?>