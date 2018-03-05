<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 05/03/2018
 * Time: 14:01
 */

namespace App\Http\Controllers;
use App\Prueba;

class MyController extends Controller
{
    public function index(){
        $modelo = new Prueba();
        $saludo = $modelo->saludar("Luis");

        return view('prueba.index',['saludo' => $saludo]);

    }
}