<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 15-03-16
 * Time: 13:34
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class LidSR extends Model
{
    protected $fillable = ['Foto','Voornaam','Familienaam','Jaar','Campus','Statuut','Quote','Email'];
    protected $table = 'ledenSR';
    public $timestamps = false;
}