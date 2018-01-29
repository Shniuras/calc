<?php
if (isset($_POST['submit'])){
    if($_POST["math"] == "add"){
        echo $add = $_POST["number1"] + $_POST["number2"];
    }elseif ($_POST["math"] == "subtract") {
        echo $subtract = $_POST["number1"] - $_POST["number2"];
    }elseif ($_POST["math"] == "multiply" ){
        echo $multiply = $_POST["number1"] * $_POST["number2"];
    }elseif ($_POST["math"] == "divide"){
        if($_POST["number1"] == 0){
            echo "Dalyba is 0 negalima!";
        }else{
            echo $divide = $_POST["number1"] / $_POST["number2"];
        }
    }
}


?>