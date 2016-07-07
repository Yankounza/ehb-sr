<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-03-16
 * Time: 17:48
 */

namespace App\Http\Controllers\DBClasses;


use App\Http\Controllers\Controller;
use App\Topic;

class TopicController extends Controller
{
    public function getAll(){
        $topics = Topic::all();

        return $topics;
    }
}