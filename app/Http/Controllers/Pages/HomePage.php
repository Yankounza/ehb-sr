<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 28-03-16
 * Time: 18:41
 */

namespace App\Http\Controllers\Pages;


use App\Http\Controllers\Controller;
use App\Http\Controllers\DBClasses\lidSRController;

class HomePage extends Controller
{
    public function getContent()
    {
        $lid = lidSRController::getStuOfTheDay(1516);
        return(view('index')-> with('lid', $lid));
    }

}