<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-03-16
 * Time: 17:19
 */

namespace App\Http\Controllers\DBClasses;


use App\Http\Controllers\Controller;
use App\GaleryReeks;

class GaleryReeksController extends Controller
{
    public function getReeksByID($ID)
    {
        $GaleryReeks = GaleryReeks::where('IDMap' , $ID);

        return $GaleryReeks;
    }
}