<?php
$connection = new mysqli("localhost", "root", "", "news_management");


if( $connection -> error == true){
    echo "connection fail";
} else {
    echo "connected";
}
?>