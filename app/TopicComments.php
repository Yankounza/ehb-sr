<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 15-03-16
 * Time: 15:20
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class TopicComments extends Model
{
    protected $fillable = ['IDTopic','Commentaar'];
    protected $table ='topicComments';
    public $timestamps = false;
}