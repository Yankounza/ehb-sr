<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 15-03-16
 * Time: 15:19
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class Topic extends Model
{
    protected $fillable = ['ID','Jaar','Naam','BeginDatum','EindDatum'];
    protected $table = 'topic';
    public $timestamps = false;
}