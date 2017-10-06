<?php
    /**
        Project: 面向对象版图形计算器
        file: shape.class.php
        声明一个形状的抽象类，作为所有形状的父类，里面有两个抽象方法，根据子类的形状区实现
        package：shape
    */
    abstract class Shape {
        public $shapeName;
        abstract function area();
        abstract function perimeter();
        /*
        *   该方法是一个普通方法用来对所有形状表单输入的值进行验证
        *   @param mixed $value 接收表单输入的值，对该值进行验证
        *   @param string $message 消息提示的前缀
        *   @return boolean 验证通过返回true 失败返回false；
        */
        protected function validate($value, $message='输入的值') {
            if ( $value=="" || !is_numeric($value) || $value < 0 ) {
                $message = $this->shapeName.$message;
                echo '<font color="red">'.$message.'必须为非负值的数字，并且不能为空</font><br>';
                return false;
            }
            else {
                return true;
            }
        }
    }
?>
