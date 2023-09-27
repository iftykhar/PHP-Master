<?php

require_once 'Paypal/Transaction.php';
require_once 'Stripe/Transaction.php';

class Paymentgateway{

    public function createTransaction($transaction){
        
        if($transaction == 'paypal'){
            $transaction = new PaymentGateway_Paypal_Transaction();
        }else if( $transaction == 'stripe'){
            $transaction = new PaymentGateway_Stripe_Transaction
        }
    }
}