<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practise Pokemon api</title>
</head>
<body>
    <?php
    $data = file_get_contents('data.json');
    $parse_data = json_decode($data, true);
    $results = $parse_data['results'];
    
    echo '<pre>';
    echo "There are: " . ($parse_data["count"]) . " pokemon´s.";
     echo '</pre>';

    echo '<pre>';
    print_r($results);
    echo '<pre>';    

    $counter = 0;
    echo '<pre>';
    while ($counter < count($results)){ 
    print_r('The name of the Pokemon: ' . $results[$counter]['name']);
    echo '</pre>';
    $counter++;
    };

    /*  
    //splitting the array:
    $results50 = array_chunk($results, 50);
    echo '<pre>';
    echo print_r($results50[2]);
    //print_r($chunks[htmlspecialchars($_GET["page"])]);
    echo '<pre>';
    ?>
*/
?>
<!-- 
    <?php
    $user_input=$_GET['type'];

    if($user_input<count($results50)&&$user_input>=0):
    echo '<pre> You are requesting:';
    echo print_r($results50[$user_input]);
    echo '</pre>';

    else: 
        echo 'something else';
    endif;
    ?>
     -->

</body>
</html>


