<?php
namespace App\Services\FactoryDesignPattern;
/**
 * Created by PhpStorm.
 * User: NattaponKoteputorn
 * Date: 14/12/2558
 * Time: 2:26
 */
class WhiteColor implements  Color
{

    public function fill()
    {
       return '<svg height="360" width="360">
                <circle cx="180" cy="180" r="175" stroke="black" stroke-width="1" fill="white" />
                </svg>';
    }
}