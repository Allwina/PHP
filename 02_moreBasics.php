<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutu</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        padding: 23px;
    }
    .container{
        max-width: 80%;
        background-color: grey;
        margin: auto;
    }
</style>
<body>
    <div class="container">
        <h1>Lets learn about php</h1>
        <!-- This is a container -->
        <p>Your party status is here </p>
        <?php
        $age=7;
        if($age>18)
        {
         echo "You can go to party <br>";
        }
        else if($age==7){
            echo "You are 7 years old <br>";

        }
        else{
            echo "you can't go to party <br>";
        }

       
        $languages = array("Python","c++","php","NodeJs");
        echo $languages[1] ;
        echo count($languages);
       // Loops in php
       $a =0;
       while($a<=10)
       {
        echo "<br>The value of a is: ";
        echo $a;
        $a ++;
       }
        //Iterating arrays using  Loops in php
        $a =0;
        while($a< count($languages))
        {
         echo "<br>The value of languages is: ";
         echo $languages[$a];
         $a ++;
        }

        //do while
        $a =0;
        do 
        {
         echo "<br>The value of languages is: ";
         echo $languages[$a];
         $a ++;
        }while($a< count($languages));

        //for loop
        $a=200;
        echo "<br>The value of a is: ";
        echo $a;
        for ($a=0; $a < 10; $a++) { 
            echo "<br>The value of a is: ";
            echo $a;
        }
        //for each loop
        foreach ($languages as $value)
        {
            echo "<br>The value  from foreach is ";
            echo $value;
        }
        //function
        function print5(){
            echo "<br>FIVE";
        }
        print5();
        print5();
        function print_num($n)
        {
            echo "<br> Your number is ";
            echo $n;
        }
        print_num(45);

        ?>

    </div>
    
</body>
</html>