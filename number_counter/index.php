<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number counter</title>
</head>
<body>
    
    <h1>This is my number counter!</h1>

    <?php
        $random = rand(0,100);
        
        if (0 <= $random && $random <= 10) {
            switch($random){
                case 0:
                    $random = 'nolla';
                    break;
                case 1:
                    $random = 'yksi';
                    break;
                case 2:
                    $random = 'kaksi';
                    break;
                    case 3:
                    $random = 'kolme';
                        break;
                     case 4:
                    $random = 'neljä';
                        break;
                    case 5:
                    $random = 'viisi';
                        break;
                    case 6:
                    $random = 'kuusi';
                        break;
                    case 7:
                    $random = 'seitsemän';
                        break;
                    case 8:
                    $random = 'kahdeksan';
                        break;
                    case 9:
                    $random = 'yhdeksän';
                        break;
                    case 10:
                    $random = 'kymmenen';
                        break;
                default:
                    break;}

                    echo "Random number is: $random";

        }   else if (10 < $random && $random <= 19) {
            $remainer = $random -10;

            switch($remainer){
                case 1:
                    $remainer = 'yksi';
                    break;
                case 2:
                    $remainer = 'kaksi';
                    break;
                case 3:
                    $remainer = 'kolme';
                    break;
                case 4:
                    $remainer = 'neljä';
                    break;
                case 5:
                    $remainer = 'viisi';
                    break;
                case 6:
                    $remainer = 'kuusi';
                    break;
                case 7:
                    $remainer = 'seitsemän';
                    break;
                case 8:
                    $remainer = 'kahdeksan';
                    break;
                case 9:
                    $remainer = 'yhdeksän';
                    break;
                default:
                    break;}

                    echo "Random number is: $remainer" . "toista";

                } else if (20 <= $random && $random  <= 99) {
                    $module = floor($random/10);
                    $remainder = $random % 10;
                
                    switch($module){
                        case 2:
                            $remainer = 'kaksi';
                            break;
                        case 3:
                            $remainer = 'kolme';
                            break;
                        case 4:
                            $remainer = 'neljä';
                            break;
                        case 5:
                            $remainer = 'viisi';
                            break;
                        case 6:
                            $remainer = 'kuusi';
                            break;
                        case 7:
                            $remainer = 'seitsemän';
                            break;
                        case 8:
                            $remainer = 'kahdeksan';
                            break;
                        case 9:
                            $remainer = 'yhdeksän';
                            break;
                        default:
                            break;}  

                            switch($remainder){ 
                                case 0:
                                    $result = '';
                                    break;
                                case 1:
                                    $result = 'yksi';
                                    break;
                                case 2:
                                    $result = 'kaksi';
                                    break;
                                case 3:
                                    $result = 'kolme';
                                    break;
                                 case 4:
                                    $result = 'neljä';
                                    break;
                                case 5:
                                    $result = 'viisi';
                                    break;
                                case 6:
                                    $result = 'kuusi';
                                    break;
                                case 7:
                                    $result = 'seitsemän';
                                    break;
                                case 8:
                                    $result = 'kahdeksan';
                                    break;
                                case 9:
                                    $result = 'yhdeksän';
                                    break;
                                default:
                                    break;}
                            
                            echo "Random number is: $remainer" . "kymmentä" . "$result";
                        }else {
                            echo 'sata';
                        }
    ?>    

<?php
$playedRounds = 0;
$jackpotStatus = false;
$roundCost = 0.5;

?>


</body>