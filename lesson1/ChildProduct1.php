<?php

require_once 'BaseProduct.php';


class ChildProduct1 extends BaseProduct
{
    private $color;
    private $size;

    /**
     * childProduct constructor.
     * @param $color
     * @param $size
     */
    public function __construct($name, $price, $color, $size)
    {
        parent::__construct($name, $price);
        $this->color = $color;
        $this->size = $size;
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
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    public function showChildProduct(){
        echo 'цвет продукта: ' . $this->getColor() . ', размер продукта: ' . $this->getSize() . ';<br>';
    }

}