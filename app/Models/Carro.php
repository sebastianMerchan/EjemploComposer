<?php


class Carro // UpperCamelCase, { }
{
    //Propiedades
    private string $marca; //Visibilidad (public, protected, private)
    private string $color; // Tipos (bool, int, float, null, array, object)
    private bool $cajaAutomatica; // LowerCamelCase
    private float $cantidadGasolina;

    //Variable
    private array  $marcasExcluidas = array('lenux', 'opel', 'porche');


    //Metodo Costructor
    public function __construct($marca = "Generica", $color = "Rojo", $cajaAutomatica = "No")
    {
        $this->setMarca($marca); //Propiedad recibida y asigna a una propiedad de la clase
        $this->setColor($color);
        $this->setCajaAutomatica($cajaAutomatica);
        $this->setCantidadGasolina(10);
    }

    public function __destruct() // Cierro Conexiones
    {
        echo "<span style='color: darkred'>";
        echo $this->getMarca()." se ha destruido<br/>";
        echo "</span>";
    }

    /**
     * @return mixed|string
     */
    public function getMarca() : string
    {
        return $this->marca;
    }

    /**
     * @param mixed|string $marca
     */
    public function setMarca(string $marca): void
    {
        if ( in_array(strtolower($marca), $this->marcasExcluidas) ) {
            echo "La marca del coche no esta aceptada";
        }else{
            $this->marca = $marca;
        }
    }

    /**
     * @return mixed|string
     */
    public function getColor() : string
    {
        return $this->color;
    }

    /**
     * @param mixed|string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed|bool
     */
    public function getCajaAutomatica() : string
    {
        return ($this->cajaAutomatica) ? "si" : "No";
    }

    /**
     * @param mixed|bool $cajaAutomatica
     */
    public function setCajaAutomatica(string $cajaAutomatica): void
    {
        $this->cajaAutomatica = strtolower(trim('Hola')) == "si";
    }

    /**
     * @return float|int
     */
    public function getCantidadGasolina() : float
    {
        return $this->cantidadGasolina;
    }

    /**
     * @param float|int $cantidadGasolina
     */
    public function setCantidadGasolina(float $cantidadGasolina): void
    {
        $this->cantidadGasolina = $cantidadGasolina;
    }


    //Metodo
    public function saludar(?string $nombre = "Usuario") : string{
        return "Hola ".$nombre.", Soy ".$this->marca." de color ".$this->color." como estas?<br/>";
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

    public function __toString() : string
    {
        return "<strong>Marca:</strong>".$this->getMarca()."</br>".
                "<strong>Color:</strong>".$this->getColor()."</br>".
                "<strong>Caja Automatica:</strong>".$this->getCajaAutomatica()."</br>".
                "<strong>Cantidad de Gasolina:</strong>".$this->getCantidadGasolina()."</br>";
    }

}

$bmw = new Carro('BMW', 'Gris', "No"); // Crear el objeto bmw de la clase Carro; A esto se le llama instanciacion.
$mercedes = new Carro(); // Segundo objeto de la clase objeto
$audi = new Carro("Audi", "Naranja", "si");

echo $bmw->saludar('Diego');
echo $mercedes->saludar('Juan');
echo  $audi->saludar('Pedro');
echo $audi->getMarca()." es de caja automatica: ".$audi->getCajaAutomatica()."</br>";

$audi->tanquear(20) //30 Litros
    ->viajar(100) //28 Litros
    ->viajar(200) //24 Litros
    ->tanquear(50) //74 Litros
    ->viajar(300) //68 Litros
    ->tanquear(20); //88 Litros

echo $bmw;

echo "Soy ".$audi->getMarca()." y tengo ".$audi->getCantidadGasolina()." Litros de Gasolina</br>";
echo "Soy ".$bmw->getMarca()." y tengo ".$bmw->getCantidadGasolina()." Litros de Gasolina</br>";

//Obtener una propiedad
//echo $bmw->color."<br/>";   //Para obtener la propiedad de un objeto se usa el conecto ->
//echo $mercedes->color."<br/>";

//Establecer una propiedad
$bmw->setColor("Azul");   //Para establecer una propiedad se le asigna de la misma manera que una variable
$bmw->setMarca("BMW");
//echo "Soy un ".$bmw->marca." ".$bmw->color."<br/>";   //Imprimimos los valores

$mercedes->setColor("Negro");
$mercedes->setMarca("Mercedes Benz");
//echo "Soy un ".$mercedes->marca." ".$mercedes->color."<br/>";   //Imprimimos los valores

//Llamar a un metodo
//echo $bmw->saludar('Diego')."<br/>"; //Llamar a un metodo
//echo "Saludo: ".$bmw->marca." ".$bmw->saludar('Juan')."<br/>"; //Concatenar salida

unset($mercedes);