<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 26-03-16
 * Time: 15:16
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Raad extends Model
{
    protected $fillable = ['Foto','Voornaam','Familienaam','Statuut','Jaar','VVS','BAST','UAB','STUVO','RvT','DR','RSchoolOfArts'];
    public $timestamps = false;
    protected $table = 'Raden';
}