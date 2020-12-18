<?php

class Arma {
    //Propiedades de la clase.
    public $name = "Default Name";
    private $categoria;
    private $municion = 100;
    private $color = "Default Color";
    private $peso = 30;

    //Metodos de la clase.
    public function cambiar_name($new_name) {
        $this->name = $new_name;
    }



    
    public function disparar(){
        //Setter, ya que accedemos a una propiedad privada.
        if($this->puedo_disparar()){
            $this->municion-=20;
            return "PRAPRAPRA te quedan ". $this->cuantas_balas_quedan() . "balas!" ;
        }
        else{
            $this->evitar_balas_negativas();
            return "¡No te quedan balas!";
        }
    }

    private function evitar_balas_negativas(){
        $this->municion = 0;
    }

    public function recargar(){
        $this->municion = 100;
        return "Vuelves a tener ".$this->municion." balas!" ;
    }

    private function puedo_disparar(){
        if($this->municion > 0){
            return True;
        }
        return False;
    }

    public function cambiar_color($new_color){
        $this->color = $new_color;
    }

    public function cambiar_peso($new_peso){
        $this->peso = $new_peso;
    }

    public function cuantas_balas_quedan() {
        //Getter, queremos obtener el numero de balas que le quedan a esta instancia.
        return $this->municion;
    }

}


$arma_1 = new Arma();
$arma_1->cambiar_name("Pistola mamonsita");
echo $arma_1->name."<br>";
$arma_1->cambiar_peso(40);
$arma_1->cambiar_color("Rojo");
echo $arma_1->disparar()."<br>";
echo $arma_1->disparar()."<br>";
echo $arma_1->disparar()."<br>";
echo $arma_1->disparar()."<br>";
echo $arma_1->disparar()."<br>";
echo $arma_1->disparar()."<br>";
echo $arma_1->disparar()."<br>";
echo $arma_1->disparar()."<br>";
echo $arma_1->recargar()."<br>";
echo $arma_1->disparar()."<br>";
echo $arma_1->disparar()."<br>";
echo $arma_1->cuantas_balas_quedan()."<br>";

$arma_2 = new Arma();
$arma_2->cambiar_name("Escopeta");
echo $arma_2->name."<br>";
$arma_2->cambiar_peso(15);
$arma_2->cambiar_color("Blanca");
echo $arma_2->disparar()."<br>";
echo $arma_2->disparar()."<br>";
echo $arma_2->disparar()."<br>";
echo $arma_2->disparar()."<br>";
echo $arma_2->disparar()."<br>";
echo $arma_2->disparar()."<br>";
echo $arma_2->cuantas_balas_quedan()."<br>";

$new_collection = array();

array_push($new_collection, $arma_1, $arma_2);


echo "<pre>";

var_dump($new_collection);

echo "<pre>";

?> 