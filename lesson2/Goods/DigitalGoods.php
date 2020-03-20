<?php


class DigitalGoods extends BaseGoods
{
    const PRICE = 100;
    private $amount;

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getPrice()
    {
        return self::PRICE;
    }

    public function getTotalPrice()
    {
        return self::PRICE * $this->amount;
    }

    public function getProfit()
    {
        return ($this->getTotalPrice() / 100) * self::MARCUP;
    }

}
