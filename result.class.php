<?php
    /**
        Project: 面向对象版图形计算器
        file:result.class.php
        声明一个Result结果类，通过多态的应用获取用户所选择形状的计算结果
        package:shape
    */
    class Result {
        private $shape=null;
        function __construct() {
            $this->shape = new $_GET["action"]();
        }
        function __toString() {
            $result = $this->shape->shapeName.'的周长：'.round($this->shape->perimeter(), 2).'<br>';
            $result .= $this->shape->shapeName.'的面积：'.round($this->shape->area(), 2).'<br>';
            return $result;
        }
    }
?>
