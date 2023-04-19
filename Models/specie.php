<?php

require_once __DIR__ . '/prodotti.php';
/* require_once __DIR__ .'/traits/name.php';
 */

class Specie extends Prodotti
{
    private $name;
    private $icon;

    public function __construct($_name, $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }

/*     //name
    public function get_name()
    {
        return $this->name;
    }
    public function set_name($_name) 
    {
        $this->name = $_name;
    } */
//icon
    public function get_icon()
    {
        return $this->icon;
    }
    public function set_icon($_icon)
    {
        $this->icon = $_icon;
    }
    public function get_category_info()
    {
        return "{$this->icon} {$this->name}";
    }
}
