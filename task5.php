<?php
    echo "<h1> Funciton explaining </h1>";

    // function simple(){
    //     echo "<h1> Hello world </h1>";
    // }

    function printArray($var){
        for($i=0; $i<count($var); $i++){
            echo "<h1>".$var[$i]." </h1>";
        }
    }

    $nm = array("rahul", "rohan", "ravi", "rajesh", "raghav", "kabir");
    printArray($nm);

    $yu = array(12, 23, 45 , 34);
    printArray($yu);

    $ty = array("kabir@gmail.com", "rahul@gmail.com", "rajesh@gmail.com");
    printArray($ty);


    function simple($value){
        for($i=1; $i<=$value; $i++){
            echo "<h1> $i </h1>";
        }
    }

    function add($a , $b) {
        echo "<h1> ".($a+$b)."</h1>";
    }

    function substract($a , $b) {
        echo "<h1> ".($a-$b). "</h1>";
    }


    function rto($value){
        return $value%2;
    }

    simple(5);

    simple(7);

    add(2,3);

    add(34, 5);

    substract(2,3);

    for($i=0; $i<=rto(234); $i++){
        echo "<h1> ".$i ."</h1>";
    }

    substract(56,5);
    ?>