<?php
// 1.uzdevums
// Izveidot ciklu, ar kura palīdzību string mainīgais
// Tiek uzrakstīts pretējā secībā, piem., "hello" -> "olleH"

for ($x = 0; $x < 10; $x--) {
    
    echo "Letting Reverse: $x <br>"; 
}

echo strrev("Hello world!"); // outputs "!dlrow olleH"

// 2.uzdevums
// a) izveido funkciju bez parametriem un bez atgriezstām vērtībām    
function bezParametriem1() {
}
bezParametriem1();

// b) izveido funkciju bez parametriem, bet ar atgriezstām vērtībām
function bezParametriem2() {
    echo "job done";
}
bezParametriem2();

// c) izveido funkciju ar vienu parametru
function arVienuParametru() {

}
?>