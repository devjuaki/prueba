<?php

//Arrays

    //1.Crear variable de nombre arrayVacio cuyo valor sea un array vacío.
    $arrayVacio = [];

    //2.Crear variable de nombre arrayNumeros declarada con un array de números del 0 al 9 (0, 1, 2...).
    for ($i=0;$i<10; $i++) { 
        $arrayNumeros[$i] = $i;
    }
    //var_dump($arrayNumeros);

    //3.Crear variable de nombre arrayNumerosPares declarada con un array con los números pares del 0 al 9 (considerando al 0 par).
    for ($i=0;$i<10; $i++) { 
        if($i%2==0){
            $arrayNumerosPares[$i] = $i;
        }
    }
    //var_dump($arrayNumerosPares);

    //4.Crear variable de nombre arrayBidimensional declarada con
    // valor array [[0, 1, 2], ['a', 'b', 'c']].

    $arrayBidimensional=[[0,1,2],['a', 'b', 'c']];
    //var_dump($arrayBidimensional);

    //5.Crear variable de nombre arrayNumerosNeg declarada con un array de números del 0 al -9 (0, -1, -2...).
    for ($i=0;$i>-10; $i--) { 
        $arrayNumerosNeg[$i] = $i;
    }
    //var_dump($arrayNumerosNeg);


    //6.Crear variable cuyo valor sea un array asociativo con las clases-valores: 
    //nombre-tu nombre, apellido- tu apellido y edad- tu edad.

    $arrayAsociativo = array (
        'nombre' => "joaquin",
        'apellido' => "heredia",
        'edad' => 26
    );
    //var_dump($arrayAsociativo);

    //7.Crear variable de nombre loGuardoTodo declarada con valor array con 
    //valores 'hola', 'que', 23, 42.33 y 'tal'.
    $loCuardaTodo = array ('hola','que',23,42.33,'tal');
    //var_dump($loCuardaTodo);

    //8.Crear variable de nombre arrayDeArrays declarada con valor array: 
    //[[756, 'nombre'], [225, 'apellido'], [298, 'direccion']].
    $arrayDeArrays = [[756, 'nombre'], [225, 'apellido'], [298, 'direccion']];
    //var_dump($arrayDeArrays);

//Funciones

    //9.Crea la función suma que acepte como argumento dos números y devuelva el resultado de su suma.
    function suma ($num1,$num2){
        return $num1 + $num2;
    }
    //echo suma(9,10);

    //10.Crea la función potenciacion que acepte como argumento dos números y devuelva el resultado de elevar
    //el primero(a) al segundo(b) (a^b).
    function potenciacion($num1,$num2){
        return pow($num1,$num2);
    }
    //echo potenciacion(5,5);

    //11.Crea la función separarPalabras que acepte como argumento un string y devuelva un array
    //de palabras 'hola mundo' => [hola, mundo].

    function separarPalabras($texto){
        return $arrayPalabras = explode(" ",$texto);
    }
    //var_dump(separarPalabras("hola mundo"));

    //12.Crea la función repetirString que acepte como argumento un string y 
    //un número y devuelva un string que sea el resultado de concatenar el primer string el número dado de veces.

    function repetirString($texto,$numero){
        return str_repeat($texto,$numero);
    }
    //echo repetirString('a',10);

    //13.Crea la función esPrimo que acepte como argumento un número y devuelva true si es primo y false si no lo es.

    function esPrimo($numero){


    }

    //14.Crea la función multiplicacion que acepte como argumento dos números y devuelva el resultado de su multiplicación.

    function multiplicacion($num1,$num2){
        return $num1 *$num2;
    }
    //echo multiplicacion(10,10);
    
    //15.Crea la función división que acepte como argumento dos números y devuelva el resultado de su división.

    function division($num1,$num2){
        return $num1 / $num2;
    }
    //echo multiplicacion(10,10);

    //16.Crea la función esPar que acepte como argumento un número y devuelva true si es par y false si es impar.
    function esPar($num){
        if($num % 2 == 0){
            return true;
        }else{
            return false;
        }
    }
    //var_dump(esPar(10));

    //17.Crea el array arrayFunciones que tenga como valor las funciones: suma, resta y multiplicación 
    //(todas aceptan 2 números como argumento y devuelve el resultado de su operación).

    function calculo($num1,$num2,$operador){
        $resultado = 0;
        if($operador == "+"){
            $resultado = $num1+$num2;
        }elseif($operador == "-"){
            $resultado =$num1 - $num2;
        }elseif($operador == "*"){
            $resultado =$num1 * $num2;
        }else{
            return "Operador No Valido";
        }
        
    return $arrayFunciones = array ($resultado);

    } 
    var_dump(calculo(10,10,"+"));
?>