<?php

$conn = mysqli_connect("localhost", "root", "", "com");

if (!$conn) {
    echo "Connection Failed";
}