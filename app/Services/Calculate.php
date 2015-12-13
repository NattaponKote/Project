<?php
/**
 * Created by PhpStorm.
 * User: NattaponKoteputorn
 * Date: 14/12/2558
 * Time: 3:26
 */

namespace App\Services;


class Calculate
{
    public function cal($bp,$complication){
      if($bp <= 120 ){
          return "white";
      }elseif($bp > 120 && $bp < 139){
          return "lightgreen";
      }elseif($bp == 139){
          return "green";
      }elseif($bp >= 140 && $bp <= 159){
          return "yellow";
      }elseif($bp >= 160 && $bp <= 179 ){
          return "orange";
      }elseif($bp >= 180 && $complication == 0){
          return "red";
      }elseif($bp >= 180 && $complication == 1){
          return "black";
      }

    }
}