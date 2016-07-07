<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 15-03-16
 * Time: 15:18
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class GaleryReeks extends Model
{

    protected $fillable = ['IDMap','Foto'];
    protected $table = 'galeryReeks';
    public $timestamps = false;
}