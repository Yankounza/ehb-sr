<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 15-03-16
 * Time: 13:37
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class LidOC extends Model
{
    protected  $fillable = ['Foto','Voornaam','Familienaam','Campus','Opleiding','OpleidingJaar','Jaar','Email'];
    protected $table = 'ledenOC';
    public $timestamps = false;
}