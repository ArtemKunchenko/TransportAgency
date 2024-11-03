<?php
abstract class Transport {
    public $costPerWeight;
    public $speed;
    public $accidentProbability;

    public function __construct($costPerWeight, $speed, $accidentProbability) {
        $this->costPerWeight = $costPerWeight;
        $this->speed = $speed;
        $this->accidentProbability = $accidentProbability;
    }

    abstract public function canTransportBetween(City $from, City $to);
}

class AirTransport extends Transport {
    public function __construct() {
        Transport::__construct(10, 500, 0.01);
    }

    public function canTransportBetween(City $from, City $to) {
        return $from->size === 'large' && $to->size === 'large';
    }
}

class RailTransport extends Transport {
    public function __construct() {
        Transport::__construct(2, 80, 0.03);
    }

    public function canTransportBetween(City $from, City $to) {
        return in_array($from->size, ['large', 'medium']) && in_array($to->size, ['large', 'medium']);
    }
}

class RoadTransport extends Transport {
    public function __construct() {
        Transport::__construct(5, 60, 0.05);
    }

    public function canTransportBetween(City $from, City $to) {
        return true;
    }
}
?>