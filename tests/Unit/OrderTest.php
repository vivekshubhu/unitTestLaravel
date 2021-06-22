<?php

use App\Product;
use App\Order;

use PHPUnit\Framework\TestCase;


class OrderTest extends TestCase {
    public function testOrderHasProduct() {
       $order = $this->createOrderWithProducts();
        $this->assertCount(2, $order->products());
    }

    public function testOrderTotalCostFromAllOFItsProducts() {
        $order = $this->createOrderWithProducts();
        $this->assertEquals(1100, $order->total());
    }

    protected function createOrderWithProducts() {
        $order = new Order();

        $product1 = new Product('Laptop', 1000);
        $product2 = new Product('Earphone', 100);

        $order->add($product1);
        $order->add($product2);
        return $order;
    }
}