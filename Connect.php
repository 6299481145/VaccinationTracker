<?php
$con = new mysqli('localhost','neha','Neha@629','vaccination_tracker');
if($con->connect_error) {
    die($con->connect_error);
}