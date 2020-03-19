<?php


class WeightGoods extends DigitalGoods
{
    private $weight;

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    public function getPrice()
    {
        if ($this->weight > 0 && $this->weight < 3){
            return self::PRICE;
        } elseif ($this->weight >= 5 && $this->weight < 10){
            return self::PRICE * 0.9;
        } elseif ($this->weight >= 10 && $this->weight < 15){
            return self::PRICE * 0.8;
        } elseif ($this->weight >= 15){
            return self::PRICE * 0.7;
        }
    }

    public function getTotalPrice()
    {
        return $this->getPrice() * $this->weight;
    }

    public function getProfit()
    {
        return ($this->getTotalPrice() / 100) * self::MARCUP;
    }

}