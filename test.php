<?php

echo "hello";

include_once './lib/singleton.php';

$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

if ($singleton1 === $singleton2) {
    echo "同じ";
} else {
    echo "違う";
}
