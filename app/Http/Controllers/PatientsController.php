<?php
/**
 * Created by PhpStorm.
 * User: NattaponKoteputorn
 * Date: 13/12/2558
 * Time: 21:03
 */

namespace App\Http\Controllers;

use App\Services\FactoryDesignPattern\Color;
use App\Services\FactoryDesignPattern\ColorFactory;
use App\Services\Calculate;

class PatientsController extends Controller
{
    public function updatePatients($id)
    {
        $DataPatients = \App\User::find($id);
        $Joins = \App\Datapatients::all()->where('iduser', $DataPatients->id);
        $getColor = new Calculate();

        $color = new ColorFactory();
        $color = $color->getColor($getColor->cal($Joins[0]['bp'], $Joins[0]['complication']));

        return view('updatePatients')->with('id', $Joins)
            ->with('name', $DataPatients)
            ->with('test', $Joins)
            ->with('fill', $color->fill());

    }

    public function postPatients($id)
    {
        $DataPatients = \App\User::find($id);
        $Joins = \App\Datapatients::where('iduser', $DataPatients->id)->get();

        $addData = \App\Datapatients::find($Joins[0]['id']);
        $addData->iduser = \Input::get('iduser');
        $addData->fbs = \Input::get('fbs');
        $addData->bp = \Input::get('bp');
        $addData->bp2 = \Input::get('bp2');
        $addData->suggesion = \Input::get('suggesion');
        $addData->complication = \Input::get('complication');
        $addData->save();
        return redirect('/updatePatients/' . $DataPatients->id);
    }

}