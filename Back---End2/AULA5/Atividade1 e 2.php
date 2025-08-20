<?php
// Crie uma classe (molde de objetos) chamada 'Cachorro' com os seguintes atributos: Nome, idade, raça, castrado e sexo.

class Cachorro {

    public $nome;
    public $idade;
    public $raça;    
    public $castrado;
    public $sexo;
public function __construct($nome, $idade, $raça, $castrado, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raça = $raça;
        $this->castrado = $castrado;
        $this->sexo = $sexo;
    }
}
$Cachorro1 = new Cachorro("Rex", 5, "Labrador", true, "Macho");
$Cachorro2 = new Cachorro( "Bella", 3, "Poodle", false, "Fêmea");
$cachorro3 = new Cachorro( "Max", 4, "Bulldog", true, "Macho");
$Cachorro4 = new Cachorro( "Lucy", 2, "Beagle", false, "Fêmea");
$Cachorro5 = new Cachorro( "Duke", 6, "Boxer", true, "Macho");
$Cachorro5 = new Cachorro( "Molly", 1, "Dachshund", false, "Fêmea");
$Cachorro6 = new Cachorro( nome: "Charlie", idade: 7, raça: "Golden Retriever", castrado: true, sexo: "Macho");
$Cachorro7 = new Cachorro( nome: "Luna", idade: 2, raça: "Shih Tzu", castrado: false, sexo: "Fêmea");
$Cachorro8 = new Cachorro( nome: "Rocky", idade: 4, raça: "Pitbull", castrado: true, sexo: "Macho");
$Cachorro9 = new Cachorro( nome: "Zoe", idade: 3, raça: "Cocker Spaniel", castrado: false, sexo: "Fêmea");
$Cachorro10 = new Cachorro( nome: "Buddy", idade: 5, raça: "Rottweiler", castrado: true, sexo: "Macho");



?>
