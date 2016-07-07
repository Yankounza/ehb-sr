<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 15-03-16
 * Time: 15:15
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class GaleryMap extends Model
{
    protected $fillable = ['ID', 'Naam'];
    protected $table = 'galeryMap';
    public $timestamps = false;
}