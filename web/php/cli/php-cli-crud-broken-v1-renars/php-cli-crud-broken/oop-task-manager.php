<?php

$tasks = [
    1 => ['status' => 'done', 'priority' => 2, 'content' => 'konsultācija 15:10'],
    2 => ['status' => 'inprogress', 'priority' => 5, 'content'=> 'aizbraukt uz veikalu 19:00'],
    3 => ['priority' => 5, 'content'=> 'aizbraukt uz veikalu 19:00'],
];

class Task {
    // Properties
    public $name;
    public $priority;
    public $content;

    // Constructor
    function __construct($name, $priority, $content) {
        $this->name = $name;
        $this->priority = $priority;
        $this->content = $content;
    }

    // Destructor
    function __destruct() {
        echo "The task is {$this->name} and the priority is {$this->priority}."; 
      }

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

    function set_content($content) {
        $this->content = $content;
    }
    function get_content() {
        return $this->content;
    }






}