<?php

// query param validation
$name = $_GET['name'];
$isValid = false;
if (!empty($name) && ereg_match('/[a-z0-9\-\.\@]/', $name) && mb_strlen($name) < 100) {
    $isValid = true;
}

if (!$isValid) {
    echo 'error name !!';
    exit();
}

$date = "04/30/1973";
list($month, $day, $year) = split('[/.-]', $date);
echo "Month: $month; Day: $day; Year: $year<br />\n";

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
$bicycle = $factory->createBicycle('bicycle');
$bicycle->driveTo('熱海');
