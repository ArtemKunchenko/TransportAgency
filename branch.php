<?php
class Branch {
    public $city;
    public $income = 0;
    public $orders = [];

    public function __construct(City $city) {
        $this->city = $city;
    }

    public function addOrder(Order $order) {
        $this->orders[] = $order;
    }

    public function addIncome($amount) {
        $this->income += $amount;
    }
}

?>