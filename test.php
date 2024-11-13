<?php

echo "hello " . $_GET['name'] . '!!';

// singleton
include_once './lib/singleton/singleton.php';

$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

if ($singleton1 === $singleton2) {
    echo "同じ";
} else {
    echo "違う";
}


// null object
include_once './lib/NullObject/service.php';
include_once './lib/NullObject/nulllogger.php';

$service = new Service(new NullLogger());
$service->doSomething();