<?php
class City {
    public $name;
    public $size;
    public $weather;
    public $branch;

    public function __construct($name, $size) {
        $this->name = $name;
        $this->size = $size;
        $this->updateWeather();
    }

    public function updateWeather() {
        $this->weather = rand(0, 1) ? 'good' : 'bad'; 
    }
    public function setBranch(Branch $branch) {
        $this->branch = $branch;
    }
}

?>