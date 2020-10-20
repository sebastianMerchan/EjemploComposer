<?php


class Carro // UpperCamelCase, { }
{
    public string $marca; //Visibilidad (public, protected, private)
    public string $color = "Rojo"; // Tipos (bool, int, float, null, array, object)
    public bool $cajaAutomatica = true; // LowerCamelCase


    //Metodo
    public function saludar(?string $nombre = "Usuario") : string{
        return "Hola ".$nombre." como estas?";
    }

}

$bmw = new Carro(); // Crear el objeto bmw de la clase Carro:
$mercedes = new Carro(); // Segundo objeto de la clase Carro

//obtener una propiedad
echo $bmw->color."<br/>";   //Para obtener la propiedad de un objeto se usa el conecto ->
echo $mercedes->color."<br/>";

//Establecer una propiedad
$bmw->color = "Azul";   //Para establecer una propiedad se le asigna de la misma manera que una variable
$bmw->marca = "BMW";
echo "Soy un ".$bmw->marca." ".$bmw->color."<br/>";   //Imprimimos los valores

$mercedes->color = "Negro";
$mercedes->marca = "Mercedes Benz";
echo "Soy un ".$mercedes->marca." ".$mercedes->color."<br/>";   //Imprimimos los valores

//Llamar a un metodo
echo $bmw->saludar('Diego')."<br/>"; //Llamar a un metodo
echo "Saludo: ".$bmw->marca." ".$bmw->saludar('Juan')."<br/>"; //Concatenar salida