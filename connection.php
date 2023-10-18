<?php

$conn = mysqli_connect('localhost', 'root', '', 'nedeudel');
if (!$conn) {
    header("location: ../error.php");
    exit();
}