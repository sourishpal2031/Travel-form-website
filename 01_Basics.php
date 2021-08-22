<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first PHP website
        <?php
        echo "Hello world and this is printed using PHP";
        $var1=5;
        $var2=2;
        echo $var1;
        echo $var2;
        echo $var1+$var2;
        //Operators in PHP
        //Arithmetic operators
        echo "<br>";
        echo "The value of var1+var2 is ";
        echo $var1+$var2;
        echo "<br>";
        echo "The value of var1-var2 is ";
        echo $var1-$var2;
        echo "<br>";
        echo "The value of var1*var2 is ";
        echo $var1*$var2;
        echo "<br>";
        echo "The value of var1/var2 is ";
        echo $var1/$var2;
        echo "<br>";
        //Assignment Operators
        $newvar=$var1;
        //$newvar+=1;
        $newvar-=1;
        //$newvar*=1;
        //$newvar/=1;
        echo "the new value of newvar is ";
        echo $newvar;
        echo "<br>";
        // Comparison Operator
        echo "The value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";
        echo "The value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";
        echo "The value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";
        echo "The value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";
        //increment/decrement operator
        echo $var1++;
        echo "<br>";
        echo $var1--;
        echo "<br>";
        echo --$var1;
        echo "<br>";
        echo ++$var1;
        echo "<br>";
        //logical operators
        // and (&&)
        // or (||)
        // xor 
        // !
        // $myvar=(true and false);
        // $myvar=(true and true);
        // $myvar=(false and false);
        $myvar=(false and true);
        echo var_dump($myvar);
        echo "<br>";
        $myvar=(false or true);
        echo var_dump($myvar);
        echo "<br>";
        $myvar=(false xor true);
        echo var_dump($myvar);
        echo "<br>";
        ?>
        <?php
        define('PI',3.14);
        //Data types in PHP
        // 1. String
        // 2. Integer
        // 3. Float
        // 4. Boolean
        // 5. Array
        // 6. Object
        echo "Data types <br>";
        $var= "This is a string";
        echo var_dump($var);
        echo "<br>";
        $var=67.1;
        echo var_dump($var);
        echo "<br>";
        $var=67;
        echo var_dump($var);
        echo "<br>";
        $var=true;
        echo var_dump($var);
        echo "<br>";
        echo PI
        ?>
    </div>
</body>
</html>