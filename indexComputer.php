<?php

abstract class Componente{
    public abstract function caratteristiche();
}

class RAM extends Componente{
    public function caratteristiche(){
        return "RAM: 16GB DDR4 \n";
    }
}

class ROM extends Componente{
    public function caratteristiche(){
        return "ROM: 1TB SSD \n";
    }
}

class SchedaVideo extends Componente{
    public function caratteristiche(){
        return "Scheda Video: NVIDIA GeForce RTX 3080 \n";
    }
}

class Altro extends Componente{
    public function caratteristiche(){
        return "Altro: Intel Core i7, WiFi, Bluetooth \n";
    }
}

class Computer{
    public $ram;
    public $rom;
    public $schedaVideo;
    public $altro;

    public function __construct(Componente $ram, Componente $rom, Componente $schedaVideo, Componente $altro)
    {
        $this->ram = $ram;
        $this->rom = $rom;
        $this->schedaVideo = $schedaVideo;
        $this->altro = $altro;
    }

    public function elencoCaratteristiche(){
        return $this->ram->caratteristiche() . $this->rom->caratteristiche() . $this->schedaVideo->caratteristiche() . $this->altro->caratteristiche();
    }
}

$computer = new Computer(new RAM(), new ROM(), new SchedaVideo(), new Altro());
echo $computer->elencoCaratteristiche();
?>