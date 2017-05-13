<?php
    if ( $_SERVER ['REQUEST_METHOD'] == 'POST')    {
     
     echo $_POST['Firstname']."<br>";
     echo $_POST['Lastname']."<br>";
     echo $_POST['Gender']."<br>";
     echo $_POST['datepicker']."<br>";
     echo $_POST['textarea']."<br>";
     echo $_POST['checkbox']."<br>";
 }
?>

