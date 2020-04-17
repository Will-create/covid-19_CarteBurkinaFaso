<?php
//ce code permet de charger automatiquement une class lorsqu'il est extencier
function autoIn($class){
     require $class.'.Class.php'; 
}
spl_autoload_register('autoIn');
?>