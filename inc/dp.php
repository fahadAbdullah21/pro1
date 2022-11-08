<?php
error_reporting(0);
$conn = mysqli_connect('localhost','root','','win');


if(!$conn) { 
    echo "somthing is worng " . mysqli_connect_error();
}
?>
