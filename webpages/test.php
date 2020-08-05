<?php

$con = mysqli_connect("localhost", "root", "root", "project1") or die(mysqli_error($con));
$select_query = "SELECT * FROM users";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_query_result);
echo $row[0]."<br/>";
echo $row[1]."<br/>";
echo $row[2];

$name="hi";
     $email="hi@h.com";
     $contact="234567";
      $city=".njbhgc";
      $address=",mn";

$query = "INSERT INTO users (name,email,password,contact,city,address) VALUES('".$name."','".$email."', '".$pass."','".$contact."','".$city."','".$address."') ";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));

?>
