<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: rgb(145, 146, 141);
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
    <h1>Lets learn about PHP</h1>
    <p>Your party status is here:</p>
     <?php
      $age=6;
      if($age>18){
          echo "You can go to party";
      }
      else if($age==6){
        echo "Your age is 6";
      }
      else{
        echo "You can not go to party";
      }
      echo "<br>";
      // arrays in php
      $languages=array("Python","C++","JAVA","PHP");
      //echo $languages[0];
      //echo "<br>";
     // echo count($languages); 
      // loops in PHP
      $a=0;
      while($a <= 10){
        echo"<br>The value of a is: ";
        echo $a;
        $a++;
      }
      //Iterating arrays in PHP using while loop
      $a=0;
      while($a < count($languages)){
        echo"<br>The value of language is: ";
        echo $languages[$a];
        $a++;
      }
      // do while loop
      $a=69;
      do{
        echo"<br>The value of a is: ";
        echo $a;
        $a++;
      }while($a <= 10);
      // For loop
      for($a=200; $a < 10; $a++){
        echo "<br>The value of a using for loop is: ";
        echo $a;   
      }
      foreach($languages as $value){
          echo "<br>The value of languages using foreach loop is: ";
          echo $value;
      }
      function print5(){
          echo "<br>FIVE";
      }
      print5();
      function print_number($number){
          echo "<br>Your number is ";
          echo $number;
      }
      print_number(45);
      print_number(69);
      print_number(76);
     ?>
    </div>
</body>
</html>