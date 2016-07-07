<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-03-16
 * Time: 17:41
 */

namespace App\Http\Controllers\DBClasses;

use App\Http\Controllers\Controller;
use App\LidSR;

class lidSRController extends Controller
{
    public static function getAll(){
        $leden = LidSR::all();

        return $leden;
    }

    public static function getByYear($year){
        $leden = LidSR::where('Jaar', $year)->get();

        return $leden;
    }

    public static function getStuOfTheDay($year){
        $lid = LidSR::all()->random(1);

        return $lid;
    }
}
