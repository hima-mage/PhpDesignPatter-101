<?php

namespace Test\Creational;


use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends  TestCase
{

    public function testCanCreateBMWCar() {
        $carAbstractFactory = new CarAbstractFactory(200);
        $myCar = $carAbstractFactory->createBMWCar();

        $this->assertInstanceOf(BMWCar::class,$myCar);
    }

    public function testCanCreateBenzCar() {
        $carAbstractFactory = new CarAbstractFactory(200);
        $myCar = $carAbstractFactory->createBenz();

        $this->assertInstanceOf(BenzCar::class,$myCar);
    }

}