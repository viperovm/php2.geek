<?php


abstract class BaseGoods
{
    const MARCUP = 37;

    abstract public function getPrice();
    abstract public function getTotalPrice();
    abstract public function getProfit();
}