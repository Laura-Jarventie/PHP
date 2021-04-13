<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAKPOT GAME</title>
</head>
<body>
    
    <h1>This is my JACKPOT game:</h1>

   
        

<?php
/*$playedRounds = 0;
$jackpotStatus = false;
$roundCost = 0.5;

while ($jackpotStatus == false) { 
    $playedRounds ++;*/

$random0 = rand(0,1);
$random1 = rand(0,1);
$random2 = rand(0,1);
$random3 = rand(0,1);
$random4 = rand(0,1);
$lotteryNumbers = array($random0,$random1,$random2,$random3,$random4);

/*$counter = 0;
while ($counter < 2) {
    $lotteryNumbers[$counter] = $random;
    $counter++;
  } */
echo "$random0" , "$random1", "$random2", "$random3", "$random4";
  
/*foreach($lotteryNumbers as $value){
      echo $value . ",";
  };*/
?>
<?php
    function compare($random0, $random1, $random2, $random3, $random4){ 
   if($random0 == 1 && $random1 == 1 && $random2 == 1 && $random3 == 1 && $random4 == 1)
   {
       return "Jee, you won JACKPOT!";
   } else if($random0 == 0 && $random0 == 0 && $random2 == 0 && $random3 == 0 && $random4 == 0) {
       return ":Congrats, it is as hard to get all zero´s as it is all one´s. But no win anyway.";
   } else {
       return "No win, changes to win are:" . pow(0.5, 5); 
       
   }
}
  echo compare($random0, $random1, $random2, $random3, $random4);
?>


</body>