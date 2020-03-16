<?php
require_once 'ChildProduct1.php';
require_once 'ChildProduct2.php';

?>

    <h3>Задания 1-4</h3>

<?php

$product1 = new ChildProduct1('Джинсы', '200', 'деним', 'M');
$product2 = new ChildProduct2('Стакан', '50', '330', 'стекло');

?>

    <h3>Задание 5</h3>

<?php

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();     // 1
$a2->foo();     // 2
$a1->foo();     // 3
$a2->foo();     // 4

?>

    <h3>Задание 6</h3>

<?php

class B {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class C extends B {
}
$a1 = new B();
$b1 = new C();
$a1->foo();     // 1 результат срабатывания метода у объекта класса А (0+1)
$b1->foo();     // 1 результат срабатывания метода у объекта класса В (0+1)
$a1->foo();     // 2 результат срабатывания метода у объекта класса А (1+1)
$b1->foo();     // 2 результат срабатывания метода у объекта класса В (1+1)

?>

    <h3>Задание 7</h3>

<?php


class D {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class E extends D {
}
$a1 = new D;
$b1 = new E;
$a1->foo();     // 1 результат срабатывания метода у объекта класса А (0+1)
$b1->foo();     // 1 результат срабатывания метода у объекта класса В (0+1)
$a1->foo();     // 2 результат срабатывания метода у объекта класса А (1+1)
$b1->foo();     // 2 результат срабатывания метода у объекта класса В (1+1)

?>