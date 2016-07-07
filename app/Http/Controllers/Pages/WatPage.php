<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 21-03-16
 * Time: 19:46
 */

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DBClasses\CitaatController;

class WatPage extends Controller
{
    public function setPage()
    {
        $citaten = CitaatController::getAll();

        return view('wat')->with("citaten", $citaten);
    }
}