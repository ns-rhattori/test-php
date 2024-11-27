<?php

// query param validation
$name = $_GET['name'];
$isValid = false;
if (!empty($name) && preg_match('/[a-z0-9\-\.\@]/', $name) && mb_strlen($name) < 100) {
    $isValid = true;
}

if (!$isValid) {
    echo 'error name !!';
    exit();
}

echo "hello " . htmlspecialchars($name) . '!!';

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

// factory
include_once './lib/Factory/SimpleFactory.php';
include_once './lib/Factory/Bicycle.php'
$factory = new SimpleFactory();
$bicycle = $factory->createBicycle();
$bicycle->driveTo('熱海');

// PHP7以降では使用できない関数・文法たち
include_once './lib/DepricateFunctions/DepricateFunctions.php';

$depricatedClass = new DepricateFunctions();
$depricatedClass->isMatch('1234abc');
DepricateFunctions::nonStaticMethod();