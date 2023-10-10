<?php


class Invoice{


    private TaxCalculator $taxcalculator;
    public function getOrderTotal($order,array $items): float{

        $total = 0;

        foreach($itams as $item){
            $total = $total +  ($item->price * $item->quantity);
        }

        $total += ($total * $this->getTaxRate($order->country));
        

        return $total;
    }

    public function getTaxRate($country){

       
    }
}

class TaxCalculator {

    public function getTaxRate($order,$country){

        if($country === 'US'){
            return $this->getUSTax($order);
        }else if($country === 'EU'){
            return $this->getEUTax($order);
        }
    }

    public function getUSTax($order){

        if($order->state === 'California'){
            return 0.01;
        }else if($order->state === 'Ohaio'){
            return 0.15;
        }
    }

    public function getEUTax($order){

    }
}