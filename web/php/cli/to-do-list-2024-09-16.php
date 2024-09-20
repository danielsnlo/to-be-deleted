<?php

$taskList = [
    "izpildīt mājasdarbu",
    "aiziet gulēt laicīgi"
];

// 1. while cik;s
// 2. izvelne
// 3. switch case nosacijumi
// 4. izveidojam testa datus

    $continue = 'y';
    do {
        echo "==> Uzdevumu pārvaldnieks:\n\n";
        echo "Apskatīt visus uzdevumus => 1\n";
        echo "Ievadīt jaunu uzdevumu => 2\n";
        echo "Apskatīt vienu uzdevumus => 3\n";
        echo "Iziet => 4\n";

        $choice = readline("Izvēlies darbību: ");

        switch ($choice) {
        case 1:
                echo "\n\n";
                for($i = 0; $i < count($taskList); $i++){
                    $id = $i + 1;
                    echo "$id" . ". $taskList[$i] \n";
                }
                echo "\n\n";
                break;
        case 2:
                    echo "to be implemented";
                break;    
        case 3:
                    echo "to be implemented";
                break;
        case 4:
                    echo "to be implemented";
                break;
        }
    }
    while ($continue == 'y');