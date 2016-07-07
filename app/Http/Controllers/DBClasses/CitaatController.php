<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-03-16
 * Time: 17:09
 */

namespace App\Http\Controllers\DBClasses;


use App\Http\Controllers\Controller;
use App\Citaat;

class CitaatController extends Controller
{
    public static function getAll(){
        $citaten = Citaat::all();

        return $citaten;
    }

}