<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 05/03/2018
 * Time: 14:03
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class prueba extends Model
{
    public function saludar($nombre){
        return "Hola $nombre";
    }
}