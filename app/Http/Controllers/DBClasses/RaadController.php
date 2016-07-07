<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 26-03-16
 * Time: 15:20
 */

namespace App\Http\Controllers\DBClasses;


use App\Http\Controllers\Controller;
use App\Raad;

class RaadController extends Controller
{
    public static function getAll()
    {
        $leden = Raad::all();

        return $leden;
    }

    public static function getByYear($year)
    {
        $leden = Raad::where('Jaar', $year)->get();

        return $leden;
    }
}