<?php

function getPassword()
{
    $lower_case = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $upper_case = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",];
    $number = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    $symbol = ["!", "£", "$", "%", "&", "/", "(", ")", "=", "+", "#", ".", ","];
    $user_new_password = "";
    if (isset($_GET['pass-length'])) {
        $length = $_GET['pass-length'];
        $new_password = array_merge($lower_case, $upper_case, $number, $symbol);

        for ($i = 0; $i < $length; $i++) {
            $rnd_index = rand(0, (count($new_password)));
            session_start();
            header('Location: password.php');
            $user_new_password = $user_new_password . $new_password[$rnd_index];
            $_SESSION['gianni'] = $user_new_password;
        }
    }
    return $user_new_password;
}
