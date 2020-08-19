<?php

namespace App;


class FreeShippingMethod extends ShippingMethod
{


    static function getRate()
    {
        return 0;
    }

    static function getLabel()
    {
        return 'Envoi gratuit';
    }

    static function getDeliveryTime ()
    {
        return '1-2 semaines';
    }
}
