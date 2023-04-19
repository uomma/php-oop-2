<?php

trait Nome
{
    private $nome;


    //name
    public function get_name()
    {
        return $this->name;
    }
    public function set_name($_name)
    {
        $this->name = $_name;
    }
}
