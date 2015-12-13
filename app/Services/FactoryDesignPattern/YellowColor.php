<?php
namespace App\Services\FactoryDesignPattern;
/**
 * Created by PhpStorm.
 * User: NattaponKoteputorn
 * Date: 14/12/2558
 * Time: 2:30
 */
class YellowColor implements Color
{

    public function fill()
    {
        return '<svg height="100" width="100">
                <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="yellow" />
                </svg>';
    }
}