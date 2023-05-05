<?php
// $new_pass = [];
// $lower_case = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
// $upper_case = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",];
// $number = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
// $symbol = ["!", "£", "$", "%", "&", "/", "(", ")", "=", "+", "#", ".", ","];
// $user_new_password = "";

include_once __DIR__ . "/functions.php";
if (isset($_GET['pass-length'])) {
    $result = getPassword($_GET['pass-length']);
}
// if (isset($_GET['pass-length'])) {
//     $length = $_GET['pass-length'];
//     $new_password = array_merge($lower_case, $upper_case, $number, $symbol);

//     for ($i = 0; $i < $length; $i++) {
//         $rnd_index = rand(0, (count($new_password) - 1));
//         $user_new_password = $user_new_password . $new_password[$rnd_index];
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container text-center">
        <h1>Strong Password Generator</h1>
        <h3>Genera una password sicura</h3>
        <form action="index.php" method="GET">
            <div class="ms_container">
                <div class="row">
                    <div class="col-5">
                        <label for="pass-length">Lunghezza della password</label>
                    </div>
                    <div class="col-7">
                        <input class="w-25" type="number" name="pass-length" id="pass-length" placeholder="1-10" min="1" max="10">
                    </div>
                </div>
                <button type="submit" name="generate" class="btn btn-primary">Invia</button>
                <button class="btn btn-secondary" type="reset">Annulla</button>
                <h2> <?php echo $result ?> </h2>
            </div>
        </form>
    </div>
</body>

</html>