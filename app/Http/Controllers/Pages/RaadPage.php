<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 26-03-16
 * Time: 15:24
 */

namespace App\Http\Controllers\Pages;


use App\Http\Controllers\Controller;
use App\Http\Controllers\DBClasses\RaadController;

class RaadPage extends Controller
{
    public function getLedenRaden()
    {
        $leden = RaadController::getByYear(1516);

        return view('raden')->with('raden',$leden);
    }
}