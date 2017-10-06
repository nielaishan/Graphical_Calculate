<?php
    /**
        Project: 面向对象版图形计算器
        file: circle.class.php
        声明了一个圆形子类，按圆形的特点实现了形状抽象类shape中的周长和面积
        package:shape
    */
    class Circle extends Shape {
        private $radius = 0;

        function __construct() {
            $this->shapeName = "圆形";

            if ( $this->validate($_POST["radius"], "半径") ) {
                $this->radius = $_POST["radius"];
            }
        }
        function area() {
            return pi() * $this->radius * $this->radius;
        }
        function perimeter() {
            return 2 * pi() * $this->radius;
        }
    }
?>
