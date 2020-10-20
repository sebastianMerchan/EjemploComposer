<?php


class Carro // UpperCamelCase, { }
{
    public string $marca; //Visibilidad (public, protected, private)
    public string $color; // Tipos (bool, int, float, null, array, object)
    public bool $cajaAutomatica; // LowerCamelCase
    public float $cantidadGasolina;



    //Metodo Costructor
    public function __construct($marca = "Generica", $color = "Rojo", $cajaAutomatica = false)
    {
        $this->marca = $marca; //Propiedad recibida y asigna a una propiedad de la clase
        $this->color =$color;
        $this->cajaAutomatica = $cajaAutomatica;
        $this->cantidadGasolina = 10;
    }

    //Metodo
    public function saludar(?string $nombre = "Usuario") : string{
        return "Hola ".$nombre.", Soy ".$this->marca." de color ".$this->color." como estas?</br>";
    }

    public function tanquear (float $litros) : Carro{
        $this->cantidadGasolina += $litros;
        return $this;
    }

    public function viajar (int $kilometros){
        $consumo = $kilometros / 50;
        $this->cantidadGasolina -= $consumo;
        return $this;
    }

}

$bmw = new Carro('BMW', 'Azul'); // Crear el objeto bmw de la clase Carro; A esto se le llama instanciacion.
$mercedes = new Carro(); // Segundo objeto de la clase objeto
$audi = new Carro("Audi", "Naranja", true);

echo $bmw->saludar('Diego');
echo $mercedes->saludar('Juan');
echo  $audi->saludar('Pedro');

$audi->tanquear(20) //30 Litros
    ->viajar(100) //28 Litros
    ->viajar(200) //24 Litros
    ->tanquear(50) //74 Litros
    ->viajar(300) //68 Litros
    ->tanquear(20); //88 Litros
echo "Soy ".$audi->marca." y tengo ".$audi->cantidadGasolina." Litros de Gasolina</br>";
echo "Soy ".$bmw->marca." y tengo ".$bmw->cantidadGasolina." Litros de Gasolina";

//Obtener una propiedad
//echo $bmw->color."<br/>";   //Para obtener la propiedad de un objeto se usa el conecto ->
//echo $mercedes->color."<br/>";

//Establecer una propiedad
$bmw->color = "Azul";   //Para establecer una propiedad se le asigna de la misma manera que una variable
$bmw->marca = "BMW";
//echo "Soy un ".$bmw->marca." ".$bmw->color."<br/>";   //Imprimimos los valores

$mercedes->color = "Negro";
$mercedes->marca = "Mercedes Benz";
//echo "Soy un ".$mercedes->marca." ".$mercedes->color."<br/>";   //Imprimimos los valores

//Llamar a un metodo
//echo $bmw->saludar('Diego')."<br/>"; //Llamar a un metodo
//echo "Saludo: ".$bmw->marca." ".$bmw->saludar('Juan')."<br/>"; //Concatenar salida