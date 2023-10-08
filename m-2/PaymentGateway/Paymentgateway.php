<?php

require_once 'Paypal/Transaction.php';
require_once 'Stripe/Transaction.php';


use PaymentGateway\Paypal;
use PaymentGateway\Stripe;

class Paymentgateway{

    public function createTransaction($transaction){
        
        if($transaction == 'paypal'){
            $transaction = new Transaction();
        }else if( $transaction == 'stripe'){
            $transaction = new Transaction();
        }
    }
}