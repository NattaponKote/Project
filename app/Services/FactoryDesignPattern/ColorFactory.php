<?php
namespace App\Services\FactoryDesignPattern;

/**
 * Created by PhpStorm.
 * User: NattaponKoteputorn
 * Date: 14/12/2558
 * Time: 2:32
 */
class ColorFactory
{
    /**
     * @param $status
     * @return BlackColor|GreenColor|LightGreenColor|OrangeColor|RedColor|WhiteColor|YellowColor|null
     */
    public function getColor($status){
        if($status=='white'){
            return new WhiteColor();
        }
        elseif($status=='lightgreen'){
            return new LightGreenColor();
        }
        elseif($status=='green'){
            return new GreenColor();
        }
        elseif($status=='yellow'){
            return new YellowColor();
        }
        elseif($status=='orange'){
            return new OrangeColor();
        }
        elseif($status=='red'){
            return new RedColor();
        }
        elseif($status=='black'){
            return new BlackColor();
        }
        return null;
    }
}