<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 15-03-16
 * Time: 13:28
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class Citaat extends Model
{
    protected $fillable =['Foto','Voornaam', 'Familienaam','Statuut', 'Text'];
    protected $table = 'citaten';
    public $timestamps = false;
}