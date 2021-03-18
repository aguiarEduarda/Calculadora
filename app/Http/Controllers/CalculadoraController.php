<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function soma()
    {
        return view ('soma');
    }
    
    public  function  calcularSoma (Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $resultado = $valor1 + $valor2;

        return  view ('resultado' , compact ('resultado'));

    }
    
    //subtração
    public function subtracao()
    {
        return view ('subtracao');
    }
    
    public  function  calcularSubtracao (Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $resultado = $valor1 - $valor2;

        return  view ('resultado' , compact ('resultado'));

    }
     //multiplicação
     public function multiplicacao()
     {
         return view ('multiplicacao');
     }
     
     public  function  calcularMultiplicacao (Request $request)
     {
         $valor1 = $request->valor1;
         $valor2 = $request->valor2;
         $resultado = $valor1 * $valor2;
 
         return  view ('resultado' , compact ('resultado'));
 
     }
      //divisão
    public function divisao()
    {
        return view ('divisao');
    }
    
    public  function  calcularDivisao (Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $resultado = $valor1 / $valor2;

        return  view ('resultado' , compact ('resultado'));

    }
}
