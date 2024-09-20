<?php

$tasks = [
    1 => ['instances mainīgais 1'],
    2 => ['instances mainīgais 2'],
    3 => ['instances mainīgais 3'],
];

class Task {
    // Properties
    public $name;
    public $priority;

    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function set_priority($priority) {
        $this->priority = $priority;
    }
    function get_priority() {
        return $this->priority;
    }
}