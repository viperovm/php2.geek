<?php
require 'BaseGoods.php';
require 'DigitalGoods.php';
require 'PieceGoods.php';
require 'WeightGoods.php';

$digital_goods = new DigitalGoods();
$digital_goods->setAmount(127);

$piece_goods = new PieceGoods();
$piece_goods->setAmount(27);

$weight_goods = new WeightGoods();
$weight_goods->setWeight(96);

?>

<h1>
    Задание 1
</h1>
<h2>
    Цифровые продукты
</h2>
<h3>
    Всего цифровых продуктов:
</h3>
<p>
    <?= $digital_goods->getAmount() ?>
</p>
<h3>
    Общая стоимость цифровых продуктов:
</h3>
<p>
    <?= $digital_goods->getTotalPrice() ?>
</p>
<h3>
    Общий доход с продажи цифровых продуктов:
</h3>
<p>
    <?= $digital_goods->getProfit() ?>
</p>

<h2>
    Штучные продукты
</h2>
<h3>
    Всего штучных продуктов:
</h3>
<p>
    <?= $piece_goods->getAmount() ?>
</p>
<h3>
    Общая стоимость штучных продуктов:
</h3>
<p>
    <?= $piece_goods->getTotalPrice() ?>
</p>
<h3>
    Общий доход с продажи штучных продуктов:
</h3>
<p>
    <?= $piece_goods->getProfit() ?>
</p>

<h2>
    Весовые продукты
</h2>
<h3>
    Всего весовых продуктов:
</h3>
<p>
    <?= $weight_goods->getWeight() ?>
</p>
<h3>
    Общая стоимость весовых продуктов:
</h3>
<p>
    <?= $weight_goods->getTotalPrice() ?>
</p>
<h3>
    Общий доход с продажи весовых продуктов:
</h3>
<p>
    <?= $weight_goods->getProfit() ?>
</p>
