<?php
class TransportSimulation {
    public $orders = [];
    public $branches = [];

    public function addOrder(Order $order) {
        $order->calculateCost();
        $order->calculateTime(rand(100, 1000)); 
        $this->orders[] = $order;
        $order->from->branch->addOrder($order);
    }

}

?>