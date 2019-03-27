<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Nursery Rhyme Quiz</title>
<link rel="stylesheet" type="text/css" href="style.css"> 
<link href="https://fonts.googleapis.com/css?family=Lalezar" rel="stylesheet">
</head>
<body>
<h1> Nursery Rhyme Quiz </h1>
<h2>Have a quick stroll through memory lane by answering this quiz! </h2>   
<!--htmlspecialchars turns characters such as <, > into &lt and &gt so that the characters 
cannot be manipulated by someone else, ie turned into script tags that can direct user input somewhere else or change what is displayed on page.

$SERVER is a super global variable and contains an array with information about headers, paths and script locations.
The array is PHP_SELF, meaning that the user input will come back to this specific script and not a separate one.-->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">

<?php

$score = 0;
//if the user submits his data, the following function will be executed:
if ($_POST){
   
    if (isset($_POST["J&J1"])) { //the user's choice will be placed in a new variable named $answer
      $answer = $_POST["J&J1"];
    if ($answer == 'Up the hill'){ //if that user's choice is equal to specified value, increment $score by one.
     $score++;
    }
    }

    if (isset($_POST["spider1"])) {
         $answer = $_POST["spider1"];
        if ($answer == 'Climbed up the water spout'){
            $score++;
        }
        }

        if (isset($_POST["twinkle1"])) {
               $answer = $_POST["twinkle1"];
            if ($answer == 'Star'){
               $score++;
            }
            }

            if (isset($_POST["sheep1"])) {
                $answer = $_POST["sheep1"];
               if ($answer == 'The King'){
                   $score++;
               }
               }

               if (isset($_POST["goldilocks1"])) {
                $answer = $_POST["goldilocks1"];
               if ($answer == 'Bears'){
                   $score++;
               }
               }

               if (isset($_POST["rosy1"])) {
                $answer = $_POST["rosy1"];
               if ($answer == 'posy'){
                   $score++;
               }
               }

               if (isset($_POST["queen1"])) {
                $answer = $_POST["queen1"];
               if ($answer == 'The knave of hearts'){
                   $score++;
               }
               }

               if (isset($_POST["wolf1"])) {
                $answer = $_POST["wolf1"];
               if ($answer == 'He huffed and puffed'){
                   $score++;
               }
               }

               if (isset($_POST["piggy1"])) {
                $answer = $_POST["piggy1"];
               if ($answer == 'Stayed at home'){
                   $score++;
               }
               }

               if (isset($_POST["kittens1"])) {
                $answer = $_POST["kittens1"];
               if ($answer == 'mittens'){
                   $score++;
               }
               }

               if (isset($_POST["J&J2"])) {
                $answer = $_POST["J&J2"];
              if ($answer == 'Up the hill'){ 
               $score++;
              }
              }
          
              if (isset($_POST["spider2"])) {
                   $answer = $_POST["spider2"];
                  if ($answer == 'Climbed up the water spout'){
                      $score++;
                  }
                  }
          
                  if (isset($_POST["twinkle2"])) {
                         $answer = $_POST["twinkle2"];
                      if ($answer == 'Star'){
                         $score++;
                      }
                      }
          
                      if (isset($_POST["sheep2"])) {
                          $answer = $_POST["sheep2"];
                         if ($answer == 'The King'){
                             $score++;
                         }
                         }
          
                         if (isset($_POST["goldilocks2"])) {
                          $answer = $_POST["goldilocks2"];
                         if ($answer == 'Bears'){
                             $score++;
                         }
                         }
          
                         if (isset($_POST["rosy2"])) {
                          $answer = $_POST["rosy2"];
                         if ($answer == 'posy'){
                             $score++;
                         }
                         }
          
                         if (isset($_POST["queen2"])) {
                          $answer = $_POST["queen2"];
                         if ($answer == 'The knave of hearts'){
                             $score++;
                         }
                         }
          
                         if (isset($_POST["wolf2"])) {
                          $answer = $_POST["wolf2"];
                         if ($answer == 'He huffed and puffed'){
                             $score++;
                         }
                         }
          
                         if (isset($_POST["piggy2"])) {
                          $answer = $_POST["piggy2"];
                         if ($answer == 'Stayed at home'){
                             $score++;
                         }
                         }
          
                         if (isset($_POST["kittens2"])) {
                          $answer = $_POST["kittens2"];
                         if ($answer == 'mittens'){
                             $score++;
                         }
                         }

               

     
    echo  "Thanks for playing! Your score is: ".$score."<br>"."<br>"; 
}



// $questions is assigned an array that contains other arrays. The  first array consists of an array of Questions.
// The second array consists of the names that group the answers together.
//The third array contains other arrays that host all possible answers for each question. 
$questions = array ( array ('1. Jack and Jill went... <br>',
                            '2.The eensy weensy spider... <br>' ,
                            '3.Twinkle, twinkle little... <br>',
                            '4.Who did the black sheep not give any wool to? <br>' ,
                            '5.Goldilocks and the three... <br>',
                            '6.Ringa ringa rosy, a pocket full of... <br>' ,
                            '7.Who ate the queen of hearts tarts? <br>',
                            '8.How did the big bad wolf ruin the houses of the three little piggies? <br>' ,
                            '9.This little piggy went to the market, this little piggy... <br>',
                            '10.Three little kittens have lost their... <br>' ,
                            '11. Jack and Jill... <br>',
                            '12.The eensy weensy spider... <br>' ,
                            '13.Twinkle, twinkle little... <br>',
                            '14.Who did the Big Bad Wolf not give any wool to? <br>' ,
                            '15.Goldilocks and the three... <br>',
                            '16.Ringa ringa rosy, a pocket full of... <br>' ,
                            '17.Who ate the queen of hearts tarts? <br>',
                            '18.How did the big bad wolf ruin the houses of the three little piggies? <br>' ,
                            '19.This little piggy went to the market, this little piggy... <br>',
                            '20.Three little kittens have lost their...<br>'
                            ),
                            array ('j&j1', 'spider1', 'twinkle1','sheep1', 'goldilocks1', 'rosy1','queen1','wolf1','piggy1', 'kittens1',
                            'j&j2', 'spider2', 'twinkle2','sheep2', 'goldilocks2', 'rosy2','queen2','wolf2','piggy2','kittens2'
                        ),
                            array( array('Up the hill', 'To the sea', 'To the market', 'To the forest'),
                            array('Climbed up the wall', 'Climbed up the water spout', 'Gave a girl a fright', 'Had a nap'),
                            array('Star', 'Emerald', 'Diamond', 'Triangle'),
                            array('The King', 'The Master', 'The Dame', 'Little boy down the lane'),
                            array('Bears', 'Koalas', 'Kittens', 'Birds'),
                            array('posy', 'sleepdust', 'secrets', 'cheerios'),
                            array('The prince of mince', 'The knave of hearts', 'The king of wings', 'Donald Trump'),
                            array('A bulldozer', 'A bomb', 'He took them apart brick by brick', 'He huffed and puffed'),
                            array('Stayed at home', 'had roast beef', 'had none', 'cried wawawa all the way home '),
                            array('mittens', 'shoes', 'lust for life', 'socks'),
                            array('Up the hill', 'To the sea', 'To the market', 'To the forest'),
                            array('Climbed up the wall', 'Climbed up the water spout', 'Gave a girl a fright', 'Had a nap'),
                            array('Star', 'Emerald', 'Diamond', 'Triangle'),
                            array('The King', 'The Master', 'The Dame', 'Little boy down the lane'),
                            array('Bears', 'Koalas', 'Kittens', 'Birds'),
                            array('posy', 'sleepdust', 'secrets', 'cheerios'),
                            array('The prince of mince', 'The knave of hearts', 'The king of wings', 'Donald Trump'),
                            array('A bulldozer', 'He huffed and puffed', 'He took them apart brick by brick', 'He was welcomed in'),
                            array('Stayed at home', 'had roast beef', 'had none', 'cried wawawa all the way home '),
                            array('mittens', 'shoes', 'lust for life', 'socks'))
);  
 
for( $x=0; $x<count($questions[0]); ++$x) { //For as long as $x is less than the length of the $questions array, it will run the following function 
    echo "\n".$questions[0][$x];
    for($z=0; $z< count($questions[2][0]); ++$z) //for as long as $z is less than the length of $questions's third array, it will execute the following function.
    {echo "\n<input type=\"radio\" name=\"".$questions[1][$x]."\"value=\"".$questions[2] [$x] [$z] . "\"> " . $questions[2][$x][$z] . "<br>"; 

    }
    echo "<br>";
}
?>   
<input type = "submit" value="Submit" class="button"> 
<br>

</form>
</body>
</html>