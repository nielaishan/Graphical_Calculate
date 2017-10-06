<?php
     /**
        project: 面向对象版图形计算器
        file:rect.class.php
        声明一个矩形子类，根据矩形的特点实现了形状抽象类的周长和面积方法
        package：shape
    */
    class Rect extends Shape {
        private $width = 0;
        private $height = 0;

        function __construct() {
            $this->shapeName = "矩形";
            if ($this->validate($_POST["width"], "宽度") & $this->validate($_POST["height"], "高度")) {
                $this->width = $_POST["width"];
                $this->height = $_POST["height"];
            }
        }

        function area() {
            return $this->width * $this->height;
        }
        function perimeter() {
            return 2 * ($this->width + $this->height);
        }
    }
?>
