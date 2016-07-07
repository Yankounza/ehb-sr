<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 24-03-16
 * Time: 19:47
 */

namespace App\Http\Controllers\Pages;


use App\Http\Controllers\Controller;
use App\Http\Controllers\DBClasses\lidSRController;

class StuverPage extends Controller
{
    public function getLedenSR()
    {
        $leden = lidSRController::getByYear(1516);

        return view ('stuvers')->with('leden', $leden);
    }
}
