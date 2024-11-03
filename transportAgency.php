<?php
require_once "city.php";
require_once "branch.php";
require_once "transport.php";
require_once "order.php";
require_once "transportSimulation.php";
class TransportAgency {
    private $cities = [];
    private $branches = [];
    private $transportSimulation;

    public function __construct() {
        $this->transportSimulation = new TransportSimulation();
    }

    public function addCity($name, $size) {
        $city = new City($name, $size);
        $branch = new Branch($city);
        $city->setBranch($branch); 
        $this->branches[] = $branch;
        $this->cities[$name] = $city;
    }

    public function createOrder($weight, $fromCityName, $toCityName, $transportType) {
        $from = $this->cities[$fromCityName];
        $to = $this->cities[$toCityName];

        if ($transportType === 'air') {
            $transport = new AirTransport();
        } elseif ($transportType === 'rail') {
            $transport = new RailTransport();
        } else {
            $transport = new RoadTransport();
        }

        $order = new Order($weight, $from, $to, $transport);
        $this->transportSimulation->addOrder($order);
    }

    public function reportIncome() {
        foreach ($this->branches as $branch) {
            echo "Income in city {$branch->city->name}: {$branch->income} <hr>";
        }
    }

}
?>