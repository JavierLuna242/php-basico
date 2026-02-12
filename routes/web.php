<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-Javier', function () {
    return "Javier Luna Diaz";
});

Route::get('php-basico', function () {
    
    $name = "Javier Luna Diaz";
    $height = 1.72;
    $isLogin = true;
    $age = 22;

    echo "<h1 style = 'color: red;'> Aprendiendo PHP </h1>";
    echo "<h2>" . $name . "</h2>";
    echo "<p>  Javier luna </p>";

    echo "<br><br><br> ********************** Estrutura de control ********************** <br><br><br>";

    $message = "Soy $name, tengo $age años". valadateAge($age);

    $message .= $isLogin ? "Estoy logueado": " No estoy logueado";
    echo $message;

    echo "<br><br><br> ********************** Estrutura de datos ********************** <br><br><br>";

    $pc = [
        "name" => "pc gamer core9",
        "price" => 6000,
        "marca" => "lenovo"
    ];

    $teclado = [
         "name" => "Teclado",
        "price" => 200,
        "marca" => "Asus"
    ];

    $listadoProductos = [$pc, $teclado];

    foreach ($listadoProductos as $item){
        echo $item['name'] . "<br>";
    }

});


function valadateAge($age){
     if ($age >= 18) {
        return ", soy mayor de edad";
    } else {
        return ", soy menor de edad";
    }
}