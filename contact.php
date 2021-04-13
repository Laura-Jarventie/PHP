<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';


$sent_status = mail('laura.jarventie@edu.bc.fi', 'sent from test PHP appilication', ($_POST['message'] . 'sent by' . $_POST['username']));

if ($sent_status) {
    echo 'message was delivered';
} else {
    echo 'message was NOT send';
};
?>