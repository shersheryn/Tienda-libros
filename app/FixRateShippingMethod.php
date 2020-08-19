<?php

namespace App;


class FixRateShippingMethod extends ShippingMethod
{


    static function getRate()
    {
        return 15;
    }

    static function getLabel()
    {
        return 'Frais fixes';
    }

    static function getDeliveryTime ()
    {
        return '5-7 jours';
    }
}
