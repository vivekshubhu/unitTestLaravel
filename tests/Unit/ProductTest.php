<?php

use App\Product;
use PHPUnit\Framework\TestCase;


class ProductTest extends TestCase {
    public function setup():void {
        $this->product = new Product('Laptop', 59);
    }

    public function testAProductHasName() {
        $this->assertEquals('Laptop', $this->product->name());
    }

    public function testAProductHasCost() {
        $this->assertEquals('59', $this->product->cost());
    } 

}