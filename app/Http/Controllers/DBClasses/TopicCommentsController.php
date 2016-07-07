<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-03-16
 * Time: 17:50
 */

namespace App\Http\Controllers\DBClasses;


use App\Http\Controllers\Controller;
use App\TopicComments;

class TopicCommentsController extends Controller
{
    public function getAll(){
        $comments = TopicComments::all();

        return $comments;
    }

    public function getByTopic($ID){
        $comments = TopicComments::where('IDTopic', $ID);

        return $comments;
    }
}