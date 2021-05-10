<?php

    $lista = (array) [(string) 'Miguel',(string) 'Juan',(string) 'Jose',(string) 'Diana',  (array) ['Jaime', 'Lopez']];
    // $devuelta = array_pop($lista);
    print_r($lista);
    echo "<br>";
    // print_r($devuelta);




    // Metodo unshift para insertar datos de forma acendente
    // echo '<a href="https://www.php.net/manual/es/function.array-unshift.php" target="_black">Visitar Manual</a><br>';
    // $lista = (array) [];
    // $arg = (array) [(string) 'Miguel'];
    // $arg2 = (array) [(string) 'Juan'];
    // $devuelta = (int) array_unshift($lista, ...$arg);
    // $devuelta = (int) array_unshift($lista, ...$arg2);
    // print_r($lista);
    // echo "<br>";
    // print_r($devuelta);


    // Metodo push para insertar datos de forma decedente
    // echo '<a href="https://www.php.net/manual/es/function.array-push.php" target="_black">Visitar Manual</a><br>';
    // $lista = (array) [];
    // $arg = (array) [(string) 'Miguel',(string) 'Juan',(string) 'Jose',(string) 'Diana',(string) 'Jaime'];
    // $devuelta = (int) array_push($lista, ...$arg);
    // // $devuelta = (int) array_push($lista, (string) 'Miguel',(string) 'Juan'); 
    // print_r($lista);
    // echo "<br>";
    // print_r($devuelta);




    // $lista = (array) [];
    // $lista['a'] = (string) 'Dato numero # 1';
    // $lista[1] = (string) 'Dato numero # 2';
    // $lista['DATOS_POSISION_3'] = (string) 'Dato numero # 3';
    // $lista[3] = (string) 'Dato numero # 4';
    // $lista[4] = (string) 'Dato numero # 5';
    // $lista['SALUDAR'] = (object) function () {
    //     return "Hola Como estas";
    // };
    // $lista[5] = ["a","b","c"];
    // // unset($lista[2]);
    // foreach ($lista as $indicises => $dato) {
    //     echo <<<DATOS
    //         ${!${''} = $indicises} : 
    //             ${!${''} = 
    //                 (gettype($dato) == "object") 
    //                 ? $dato() 
    //                     :((gettype($dato) == "array") 
    //                         ? join(' ', $dato) 
    //                 : $dato) 
    //             } <br>
    //     DATOS;        
    // }





    // $lista = (array) [
    //     (string) "Miguel",
    //     (string) "Juan",
    //     (string) "Pepito"
    // ];
    // print_r($lista);
    // echo "<br>";
    // $pocision = (int) count($lista)-2;
    // echo $lista[$pocision];
    




    // $array = [];
    // $array = array();
    // $array = (array) [];
    // $array = new ArrayIterator();

?>