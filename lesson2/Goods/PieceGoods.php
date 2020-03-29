<?php


class PieceGoods extends DigitalGoods
{
    private $amount;

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    public function getPrice()
    {
        $price = self::PRICE * 2;
        if ($this->amount > 0 && $this->amount < 10){
            return $price;
        } elseif ($this->amount >= 10 && $this->amount < 20){
            return $price * 0.9;
        } elseif ($this->amount >= 20 && $this->amount < 30){
            return $price * 0.8;
        } elseif ($this->amount >= 30){
            return $price * 0.7;
        }
    }

    public function getTotalPrice()
    {
        return $this->getPrice() * $this->amount;
    }

    public function getProfit()
    {
        return ($this->getTotalPrice() / 100) * self::MARCUP;
    }

}
