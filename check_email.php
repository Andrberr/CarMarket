<?php
function validate_email($email) {
    $regex = '/^.+@.+\..+$/';
    return preg_match($regex, $email);
}

if(isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    if(validate_email($email)) {
        $file = fopen('correct_emails.txt', 'a');
        fwrite($file, $name . ': ' . $email . "\n");
        fclose($file);
        echo 'Адрес электронной почты сохранен';
    } else {
        echo 'Неправильный адрес электронной почты';
    }
}
?>










