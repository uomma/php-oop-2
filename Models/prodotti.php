<?php
require_once __DIR__ . '/../traits/name.php';
/** @author marcello 
 */
class Prodotti
{

    use Nome {
        get_name as get_trait_name;
    }

    private $id;
    private $name;
    private $categoria;
    private $prezzo;
    private $description;
    private $image;

    /**
     * __construct
     *
     * @param  int $_id
     * @param  string $_name
     * @param  Specie $_categoria
     * @param  float $_prezzo
     * @param  string $_description
     * @param  string $_image
     * @return void
     */
    public function __construct(int $_id, string $_name, Specie $_categoria, float $_prezzo, string $_description, string $_image)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->categoria = $_categoria;
        $this->prezzo = $_prezzo;
        $this->description = $_description;
        $this->image = $_image;
    }

    //id
    public function get_id()
    {
        return $this->id;
    }
    public function set_id($_id)
    {
        $this->id = $_id;
    }

    //name
    public function get_name()
    {
        return $this->get_trait_name();
    }
    /*   public function set_name($_name)
    {
        $this->name = $_name;
    }   */
    //categoria
    public function get_categoria()
    {
        return $this->categoria;
    }
    public function set_categoria($_categoria)
    {
        $this->categoria = $_categoria;
    }

    //prezzo
    public function get_prezzo()
    {
        return $this->prezzo;
    }
    public function set_prezzo($_prezzo)
    {
        if ($_prezzo <= 0) {
            throw new Exception('non puoi fare beneficenza');
            $this->prezzo = $_prezzo;
        }
    }

    //description
    public function get_description()
    {
        return $this->description;
    }
    public function set_description($_description)
    {
        $this->description = $_description;
    }

    //image
    public function get_image()
    {
        return $this->image;
    }
    public function set_image($_image)
    {
        $this->image = $_image;
    }
}
