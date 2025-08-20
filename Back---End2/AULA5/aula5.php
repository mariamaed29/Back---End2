<?php
class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $revisao;
    public $N_Donos;


    public function __construct($marca, $modelo, $ano, $revisao, $N_Donos) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->revisao = $revisao;
        $this->N_Donos = $N_Donos;
}
    }

    $carro1 = new Carro("Porche", "911", 2020, false, 3);
    $carro2 = new Carro(marca: "Ferrari", modelo: "F8", ano: 2021, revisao: true, N_Donos: 1);
    $carro3 = new Carro(modelo: "Civic", marca: "Honda", ano: 2019, revisao: false, N_Donos: 2);
    $carro4 = new Carro("Tesla", "Model S", 2022, true, 0);

    
