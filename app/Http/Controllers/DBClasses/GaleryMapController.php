<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-03-16
 * Time: 17:13
 */

namespace App\Http\Controllers\DBClasses;


use App\Http\Controllers\Controller;
use App\GaleryMap;

class GaleryMapController extends Controller
{
    public function getAll(){
        $GaleryMappen = GaleryMap::all();

        return $GaleryMappen;
    }

}