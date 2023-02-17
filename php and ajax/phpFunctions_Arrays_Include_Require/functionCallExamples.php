<?php
//declaring a function in php
function displayMsg() {
    echo "Function Called!<br>";
}
//function call
displayMsg();

//declaring function with parameters
function displayMyName($name) {
    echo "".$name."<br>";
}

//function call
displayMyName("Arham");
displayMyName("Tariq");

//function declaration for default varaible
function setHeight(int $minheight = 50) {
    echo "The height is : ".$minheight." <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50


?>