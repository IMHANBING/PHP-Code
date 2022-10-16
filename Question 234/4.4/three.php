<?php
function autoload($classmate){
    include $classmate.".php";

}

spl_autoload_register("autoload");
new one();
new two();