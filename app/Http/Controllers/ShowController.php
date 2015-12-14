<?php
/**
 * Created by PhpStorm.
 * User: DNOJ
 * Date: 12/15/2015
 * Time: 1:26 AM
 */

namespace App\Http\Controllers;
use App\Datapatients;
use App\Services\FactoryDesignPattern\Color;
use App\Services\FactoryDesignPattern\ColorFactory;
use App\Services\Calculate;

class ShowController extends Controller
{
    public function showPatients($id)
    {

        $DataPatients = \App\User::find($id);
        $Joins = \App\Datapatients::all()->where('iduser', $DataPatients->id);

        $getColor = new Calculate();
        $color = new ColorFactory();
        $color = $color->getColor( $getColor->cal($Joins[0]['bp'],$Joins[0]['complication']));

        return view('showStatus')->with('id',$Joins)
            ->with('name',$DataPatients)
            ->with('test',$Joins)
            ->with('fill',$color->fill());


    }

}