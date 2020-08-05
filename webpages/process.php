<?php
     $name="";
     $email="";
     $contact="";
      $city="";
      $address="";
      $errors= array();
   $db=mysqli_connect("localhost","root","root","project1","8888") or die("could not connect to the database ");
   
   if(isset($POST['submit'])){
       echo "ok";
      
    $name= mysql_real_escape_string($POST['name']);
    echo $name;
    $email= mysql_real_escape_string($POST['email']);
    $password_1= mysql_real_escape_string($POST['password1']);
    $password_2 = mysql_real_escape_string($POST['password2']);
    $contact = mysql_real_escape_string($POST['contact']);
    $city = mysql_real_escape_string($POST['city']);
    $address = mysql_real_escape_string($POST['address']);
    
    if($password_1 != $password_2){
        array_push($errors,"Two passwords don't match");
        
    }
     $sql_e ="SELECT * FROM users WHERE name='$email'";
     $res_e = mysqli_query($db,$sql_e) or die(mysqli_error($db));
      
    
    if(mysqli_num_rows($res_e)>0){
       array_push($errors,"Email Id is already registered "); 
        
    }
    if(count($errors)==0){
        $pass=md5($password1);
        $query = "INSERT INTO users (name,email,password,contact,city,address) VALUES('$name','$email', '$pass','$contact','$city','$address') ";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
        echo "saved";
        exit();
    }
    }
    
?>