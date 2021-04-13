<?php
$user = 'adjljdfölajfdlöakjdöklsfafdad';
$usernamelength= strlen($user);

if (isset($user)){
    if ($usernamelength < 0){
    echo 'Invalid username. Username must be at least 6 characters.';
    } else if ($usernamelength > 25){
    echo 'Invalid username. Username cannot be greater than 25 characters';
    }
    else {
        echo $user;
    }
    }
?>

 

 <?php

echo '<pre>';


        
function validate_weekday($day) {
            if ((isset($day) && is_int($day) && $day>-1 && $day<7)) {
              echo 'true:';

            } else {
                echo 'false: ';
            }
        };
        
        echo '0 is a valid weekday: ' . validate_weekday(0); // true
        echo '<br>';
        echo '6 is a valid weekday: ' . validate_weekday(6); // true
        echo '<br>';
        echo '100 is a valid weekday: ' . validate_weekday(100); // false
        echo '<br>';
        echo '-12 is a valid weekday: ' . validate_weekday(-12); // false
        echo '<br>';
        echo '4 is a valid weekday: ' . validate_weekday(4); // true
        echo '<br>';
        echo 'null is a valid weekday: ' . validate_weekday(null); // false
        echo '<br>';
        echo 'An empty string is a valid weekday: ' . validate_weekday(''); // false
        echo '<br>';
        echo 'An string is a valid weekday: ' . validate_weekday('5'); // false
        echo '<br>';       
?>

<?php

echo '<pre>';

function validate_widthdraw_amount($amount, $balance) {
    if ((isset($amount, $balance) && is_int($amount) && is_int($balance) && $amount>0 &&$balance >= $amount)){
        echo 'true: ';
    } else {
        echo 'false: ';
    }
};
   
echo 'Able to withdraw 100 from an account of 1000 balance: ' . validate_widthdraw_amount(100, 1000); // true
        echo '<br>';
        echo 'Able to withdraw 1000 from an account of 1000 balance: ' . validate_widthdraw_amount(1000, 1000); // true
        echo '<br>';
        echo 'Able to withdraw -50 from an account of 1000 balance: ' . validate_widthdraw_amount(-50, 1000); // false
        echo '<br>';
        echo 'Able to withdraw 1500 from an account of 1000 balance: ' . validate_widthdraw_amount(1500, 1000); // false
        echo '<br>';
        echo 'Able to withdraw true from an account of true balance: ' . validate_widthdraw_amount(true, true); // false
        echo '<br>';
        echo 'Able to withdraw 0 from an account of negative 100 balance: ' . validate_widthdraw_amount(0, -100); // false
        echo '<br>';
        echo 'Able to withdraw null from an account of 0 balance: ' . validate_widthdraw_amount(null, 0); // false
        echo '<br>';

?>

<?php

echo '<pre>';

function validate_school_email($email_addr) {
    if (filter_var($email_addr, FILTER_VALIDATE_EMAIL) && str_contains($email_addr, '@bc.fi')) {
        echo "true: ";
      } else {
        echo "false: ";
      }
    };
echo 'test_student@bc.fi is a valid school email: ' . validate_school_email('test_student@bc.fi'); // true
echo '<br>';
echo 'test_student@bc.fi@bc.fi is a valid school email: ' . validate_school_email('test_student@bc.fi@bc.fi'); // false
echo '<br>';
echo 'bc.fi@bc.fi is a valid school email: ' . validate_school_email('bc.fi@bc.fi'); // true
echo '<br>';
echo 'test_student@gmail.com is a valid school email: ' . validate_school_email('test_student@gmail.fi'); // false
echo '<br>';
echo 'test_student#bc.fi is a valid school email: ' . validate_school_email('test_student#bc.fi'); // false
echo '<br>';
?>

<!-- 
or 
function validate_school_email($email_addr) {
            
            $validated_email = filter_var($email_addr, FILTER_VALIDATE_EMAIL);
            if ($validated_email) {
                if (str_contains($email_addr, '@bc.fi')) {
                    return 'True';
                } else {
                    return "False. Doesn't include right domain.";
                }
            } else {
                return 'False';
        }
    
 -->
