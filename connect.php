<?php
 $conn = mysqli_connect('localhost','root','','royal_fitness') ;


 if(!$conn){
    die('Error ' .mysqli_connect_error());
}   
    else{
        echo 'good';
    }
