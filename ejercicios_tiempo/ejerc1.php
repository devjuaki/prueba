<?php 

/* Un bikram es una combinación de 26 ejercicios de programación para perfeccionar
la conexión entre el programador interior que llevas dentro y el alma del lenguaje de programación.

Estas 26 pruebas cubren un espectro de dificultad incremental, 
dotada de tests que cubrirán la correcta resolución para ayudarte a encontrar posibles errores en tu código.A */

//Variables y constantes

    //1.Crea una variable de nombre "variable sin valor" declarada sin valor.
    $nombre;

    //2.Crea dos variables con nombres booleano1 y booleano2 con valores booleanos.
    $booleano1 = false;
    $booleano2 = true;

    //3.Crea una constante con el número PI.
    const PI = 3.14;

    //4.Crea una variable llamada tau con el valor de PI multiplicado por dos.
    $tau = PI * 2;

    //5.Crea una constante de nombre "mi nombre" con tu nombre.
    const Mi_NOMBRE = "joaquin";

    //6.Crea una constante de nombre "mi num fav" con valor numérico.
    const NUM_FAV = 1;


 //Boleanos

    //7.Crear una variable cuya valor sea la comparación entre booleano1 and booleano2.
    $comparacion = $booleano1 && $booleano2;
    //var_dump($comparacion);

    //8.Crea una variable cuyo valor sea la comparación booleana de no boleano1.
    $comparacion2 = !$booleano1;
    //var_dump($comparacion2);

    /*9.Crea variable cuyo valor sea la comparación 
    booleana de (booleano1 or booleano2) and (booleano1 or (no booleano1 and no booleano2)). */
    $comparacion3 = ($booleano1 || $booleano2) && (!$booleano1 && !$booleano2);
    //var_dump($comparacion3);

    //10.Crear variable cuyo valor sea la comparación booleano1 or booleano2.
    $comparacion4 = $booleano1 || $booleano2;
    //var_dump($comparacion4);

    /*11.Crear una variable cuyo valor sea la comparación booleano
    (booleano1 and (tau/2 sea igual a PO) or (variableNumerica mayor o igual a miNumFav)) */
    $variableNum = 5;
    $comparacion5 = ($booleano1 && ($tau/2 == PI) || ($variableNum >= NUM_FAV));
    //var_dump($comparacion5);

    //12.Crea una variable cuya valor sea la comparación booleana 6 no es estrictamente igual que 9.
    $comparacion6 = 6 !== 9 ;
    //var_dump($comparacion6);

    /*13.Crear una variable cuyo valor sea la comparación booleana variableNumerica es
    positivo o menor que (miNumFav * tau). */
    $comparacion7 = $variableNum > 0 || $variableNum < (NUM_FAV * $tau);
    //var_dump($comparacion7);


//Operadores

    //14.Crea una variable con valor 2, después súmale 5.
    $num = 2;
    $num +=5;
    //var_dump($num);

    //15.Crea una variable cuyo valor sea la resta de miNumFav y una variable de valor numérico.
    $resultado = NUM_FAV - $variableNum;
    //var_dump($resultado);

    //16.Crea una variable cuyo valor sea la suma de miNumFav y una variable de valor numérico.
    $resultado1 = NUM_FAV + $variableNum;
    //var_dump($resultado);

    //17.Crea una variable cuyo valor sea la multiplicación de miNumFav y una variable de valor numérico.
    $resultado2 = NUM_FAV * $variableNum;
    //var_dump($resultado2);

    /*18.Crea una variable cuyo valor sea la
    división de miNumFav y una variable de valor mumérico igual a 3. */
    $resultado3 = NUM_FAV / $variableNum;
    //var_dump($resultado3);

    //19.Crea una variable cuyo valor sea el resto de la división de 143 dividido entre 140.
    $resto = 143 % 140;
    //var_dump($resto);

    //Crea una variable que cuyo valor sea el resto de la división de 25 entre 5.
    $resto1 = 25 % 5;
    //var_dump($resto1);

//Bucles

    /*21.Crear variable contarHasta10_2 con valor 0 e incrementar su valor con un bucle
    for hasta que se verifique que contarHasta10_2 === 10. */

    $contarHasta10_2 = 0;

    for ($i=0; $i<10; $i++) { 
        $contarHasta10_2++;
    }
    //var_dump($contarHasta10_2 === 10);

    /*22.Crear las variables postI y postJ con valor 0 a continuación crea un bucle que 
    itere 11 veces. En cada iteración se deberá sumar al valor de postI el valor de postJ++. */
    $postI = 0;
    $postJ = 0;
    for ($i=0;$i<11; $i++) { 
        $postI += $postJ++;
    }
    //var_dump($postI);

    /*23.Crear la variable sumaPares con valor 0 a continuación crea un bucle que itere 10
    veces (i < 10) si la iteración es par se deberá sumar a sumaPares el número de la
    iteración actual (i). */
    $sumaPares = 0;
    for ($i=0;$i<10; $i++) { 
        if($i%2==0) $sumaPares += $i;
    }
    //var_dump($sumaPares);

    /*24.Crear variable contarHasta10 con valor 0 e incrementar su valor con un bucle
    while hasta que se verifique que contarHasta10 === 10. */
    $contarHasta10 = 0;
    while ($contarHasta10 !== 10) {
        $contarHasta10++;
    }
    //var_dump($contarHasta10);

    /*25Crear las variables preI y preJ con valor 0 a continuación cree
    un bucle que itere 11 veces. En cada iteración se deberá sumar al valor
    de preI el valor de ++preJ. */

    $preI = 0;
    $preJ = 0;
    for ($i=0;$i<11; $i++) { 
        $preI += $preJ++;
    }
    //var_dump($preI);

    /*26.Crear la variable sumaImpares con valor 0 a continuación crea un bucle 
    que itere 10 veces (i < 10) si la iteración es impar se deberá sumar 
    a sumaImpares el número de la iteración actual (i). */
    $sumaImpares = 0;
    for ($i=0;$i<10; $i++) { 
        if($i%2!==0) $sumaImpares += $i;
    }
    var_dump($sumaImpares); 

    




?>