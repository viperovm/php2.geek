<?php
require_once 'BaseProduct.php';

class ChildProduct2 extends BaseProduct
{
    private $volume;
    private $material;

    /**
     * ChildProduct2 constructor.
     * @param $volume
     * @param $material
     */
    public function __construct($name, $price, $volume, $material)
    {
        parent::__construct($name, $price);
        $this->volume = $volume;
        $this->material = $material;
        $this->showChildProduct();
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param mixed $volume
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * @return mixed
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @param mixed $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }



    public function showChildProduct(){
        echo 'объем: ' . $this->getVolume() . 'мл, материал: ' . $this->getMaterial() . ';<br>';
    }
}