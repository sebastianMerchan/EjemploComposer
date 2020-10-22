<?php


class CarroDeportivo extends Carro
{
    private int $cilindraje;

    /**
     * CarroDeportivo constructor.
     */
    public function __construct($marca = "Premium", $color = "Amarillo", $anno = 2000, $cajaAutomatica = "Si", $cilindraje = 2000)
    {
        parent::__construct($marca, $color, $anno, $cajaAutomatica);
        $this->setCilindraje($cilindraje);
        $this->setCantidadGasolina(50); //Por defecto de fabrica salen con 10 litros de gasolina
    }

    public function __destruct()
    {
        parent::__destruct();
    }

    /**
     * @return int
     */
    public function getCilindraje(): int
    {
        return $this->cilindraje;
    }

    /**
     * @param int $cilindraje
     */
    public function setCilindraje(int $cilindraje): void
    {
        $this->cilindraje = $cilindraje;
    }

    public function saludar(?string $nombre = "Usuario"): string
    {
        return "Hola soy un deportivo muy veloz, Soy un ".$this->marca." tengo ".$this->getCilindraje()." cc<br/>";
    }
}