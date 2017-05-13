<?php
  if ( $_SERVER ['REQUEST_METHOD'] == 'POST')    {
     if (!empty($_POST['Firstname']) && !empty($_POST['Lastname']) && isset($_POST['Gender']) && !empty($_POST['datepicker']) && !empty($_POST['textarea']) && isset($_POST['checkbox'])) {
     	echo $_POST['Firstname']."<br>";
     	echo $_POST['Lastname']."<br>";
     	echo $_POST['Gender']."<br>";
          echo $_POST['datepicker']."<br>";
          echo $_POST['textarea']."<br>";
          echo $_POST['checkbox']."<br>"; 
     }else {
          header("Location: code.php");
     }
}
?>