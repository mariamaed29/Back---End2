<?php
// Crie uma classe (molde de objetos) chamada 'Cachorro' com os seguintes atributos: Nome, idade, raça, castrado e sexo.

class Cachorro {

    public $nome;
    public $idade;
    public $raça;    
    public $castrado;
    public $sexo;
   public $latir;
   public $marcando_territorio;

public function __construct($nome, $idade, $raça, $castrado, $sexo, $latir, $marcando_territorio) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raça = $raça;
        $this->castrado = $castrado;
        $this->sexo = $sexo;
        $this->latir = $latir;
        $this->marcando_territorio = $marcando_territorio; 

    }
public function latir() {
    if ($this->latir) {
        echo "$this->nome está latindo!\n";
    } 
}

public function marcando_territorio() {
    if ($this->marcando_territorio) {
        echo "$this->nome está marcando territorio!\n";
    } 
}
}


// Instanciando objetos Cachorro fora da classe
$Cachorro1 = new Cachorro("Rex", 5, "Labrador", true, "Macho",false, true);
$Cachorro2 = new Cachorro( "Bella", 3, "Poodle", false, "Fêmea",true, true);
$cachorro3 = new Cachorro( "Max", 4, "Bulldog", true, "Macho", true, true);
$Cachorro4 = new Cachorro( "Lucy", 2, "Beagle", false, "Fêmea", true, true);
$Cachorro5 = new Cachorro( "Duke", 6, "Boxer", true, "Macho", false, true);
$Cachorro6 = new Cachorro( "Molly", 1, "Dachshund", false, "Fêmea", true, true);
$Cachorro7 = new Cachorro( "Charlie", 7, "Golden Retriever", true, "Macho", true, true);
$Cachorro8 = new Cachorro( "Luna", 2, "Shih Tzu", false, "Fêmea", true, true);
$Cachorro9 = new Cachorro( "Rocky", 4, "Pitbull", true, "Macho", true, true);
$Cachorro10 = new Cachorro( "Zoe", 3, "Cocker Spaniel", false, "Fêmea", true, true);
$Cachorro11 = new Cachorro( "Buddy", 5, "Rottweiler", true, "Macho", false, true);

$Cachorro2->latir();
$cachorro3->latir();
$Cachorro4->marcando_territorio();
$Cachorro6->marcando_territorio();
?>



