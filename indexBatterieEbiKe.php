

<?php
// In questo codice, ci sono due proprietà classe astratta Batteria: voltaggio e amperaggio.
abstract class Batteria{
    protected $voltaggio;
    protected $amperaggio;

// Un costruttore a Batteria che accetta il voltaggio e l’amperaggio come parametri.
    public function __construct($voltaggio, $amperaggio) {
        $this->voltaggio = $voltaggio;
        $this->amperaggio = $amperaggio;
    }

    public function caratteristiche(){
        $wattaggio = $this->voltaggio * $this->amperaggio;
        return "Batteria: {$this->voltaggio}V, {$this->amperaggio}Ah, {$wattaggio}W \n";
    }
}

// Le classi Batteria24V, Batteria36V, Batteria48V e Batteria60V ora accettano l’amperaggio come parametro nel loro costruttore e passano il voltaggio corretto e l’amperaggio al costruttore della classe padre.
class Batteria24V extends Batteria{
    public function __construct($amperaggio) {
        parent::__construct(24, $amperaggio);
    }
}

class Batteria36V extends Batteria{
    public function __construct($amperaggio) {
        parent::__construct(36, $amperaggio);
    }
}

class Batteria48V extends Batteria{
    public function __construct($amperaggio) {
        parent::__construct(48, $amperaggio);
    }
}

class Batteria60V extends Batteria{
    public function __construct($amperaggio) {
        parent::__construct(60, $amperaggio);
    }
}

class BiciElettrica{
    public $batteria;

    public function __construct(Batteria $batteria)
    {
        $this->batteria = $batteria;
    }

    public function elencoCaratteristiche(){
        return $this->batteria->caratteristiche();
    }
}

// Il metodo caratteristiche calcola il wattaggio moltiplicando il voltaggio per l’amperaggio.

// Infine, la classe BiciElettrica accetta un solo oggetto Batteria come parametro nel suo costruttore. Ho aggiunto alcuni esempi di come creare una BiciElettrica con diverse batterie e stampare le loro caratteristiche. 

$biciElettrica = new BiciElettrica(new Batteria24V(10));
echo $biciElettrica->elencoCaratteristiche();

$biciElettrica = new BiciElettrica(new Batteria36V(15));
echo $biciElettrica->elencoCaratteristiche();

$biciElettrica = new BiciElettrica(new Batteria48V(20));
echo $biciElettrica->elencoCaratteristiche();

$biciElettrica = new BiciElettrica(new Batteria60V(30));
echo $biciElettrica->elencoCaratteristiche();

?>
