<?php
        $name = "gakeni"; // Declare variable
        $age = 19; // integer

        /**
         * string
         * integer
         * boolean
         * array (numerical/associative)
        */

        $cool = true;
        $fruits = ["apple", "mango", "orange"]; // Array

        $names = array("gakeni", "sifa"); // Array
        
        // Loops

        // For loop

        for ($i = 0; $i < 10; $i++)
        {
                echo $i;
        }

        $j = 0;

        while($cool = true)
        {
                echo "gakeni is cool <br>";
                $j++;

                if ($j == 10)
                {
                        break;
                }
        }

        // For each loop

        foreach ($fruits as $fruit)
        {
                echo "This is $fruit <br>";
        }

        // do
        // {
        //         echo "";

        //         if ()
        //         {
                        
        //         }
        // }while($cool);

        $number = 80;

        if ($number > 50)
        {
                echo "Greater than 50";
        }
        else if ($number < 50)
        {
                echo "Less than 50";
        }
        else if ($number == 50)
        {
                echo "Equal to 50";
        }
        else if ($number > 100 || $number < 109)
        {
                echo "The number is either greater than 100 or less than 109";
        }
        else if ($number > 10 && $number > 20)
        {
                echo "The number is greater than both 10 and 20";
        }
        else if ($number != 50)
        {
                echo "The number is not 50";
        }

        else if ( $number === 80 )
        {
                echo "The number is 80";
        }

        else if ( $number == 70 )
        {
                echo "The number is 70";
        }
        else
        {
                // Do something.....
        }

        /**
        * Operators in programming
        * Assignment operator =
        * Logical OR ||
        * Logical AND &&
        * Logical NOT
        * Comparison operators
        * == Equivalent
        * === Identical
        * '!=' Not equivalent/ not identical
        * +
        * -
        * %
        * *
        * /
        *
        */

        $buffer = 10;

        // Switch and case

        switch ($buffer)
        {
                case $buffer == 10:
                        echo "The number is 10";
                break;

                case $buffer == 9:
                        echo "The number is 9";
                break;

                default:
                        // 
                break;
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gakeni's Blog</title>
</head>
<body>
        
        <h1>Sifa Gakeni</h1>

        <p> <?php echo "My name is $name and I am $age years old"?> </p>
</body>
</html>