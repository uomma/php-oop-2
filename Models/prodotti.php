<?php

class Prodotti{

        public $name;
        public $categoria;
        public $prezzo;

        public function __construct($_name, $_categoria)
        {
            $this -> name =$_name;
            $this-> categoria = $_categoria;
            
        }
}


