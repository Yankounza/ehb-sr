<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-03-16
 * Time: 17:29
 */

namespace App\Http\Controllers\DBClasses;


use App\Http\Controllers\Controller;
use App\lidOC;

class lidOCController extends Controller
{
    public function getAll(){
        $leden = lidOC::all();

        return $leden;
    }

    public function getByYear($year){
        $leden = lidOC::where('Jaar' == $year);

        return $leden;
    }
}