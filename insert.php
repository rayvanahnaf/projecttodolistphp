<?php

$LIST = $_POST['list'];
include "config.php";
mysqli_query($con, "INSERT INTO `tabletodo`(`List`) VALUES ('$LIST')");


//menentukan halaman mana yang dituju telah data dikirim
header("location:index.php");