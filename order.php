<?php
class Order
{
    public $weight;
    public $from;
    public $to;
    public $transport;
    public $status = 'pending';
    public $cost;
    public $time;

    public function __construct($weight, City $from, City $to, Transport $transport)
    {
        $this->weight = $weight;
        $this->from = $from;
        $this->to = $to;
        $this->transport = $transport;
    }

    public function calculateCost()
    {
        $this->cost = $this->weight * $this->transport->costPerWeight;
    }

    public function calculateTime($distance)
    {
        $this->time = $distance / $this->transport->speed;
    }
}
