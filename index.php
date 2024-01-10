<?php
$email = isset($_GET["email"]) ? $_GET["email"] : null;


function checkEmail($arg1)
{

    if (strpos($arg1, '.') !== false && strpos($arg1, '@') !== false) {
        return true;
    } else {
        return false;
    }
}

$check = $email ? checkEmail($email) : null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- / BOOTSTRAP -->
    <title>PHP Iscrizione Newsletter</title>
</head>

<body>
    <div class="container-fluid">
        <form class=" d-flex align-items-center justify-content-around " action="index.php" method="get">
            <div>
                <label for="email">Inserisci la tua email</label><br>
                <input type="text" id="email" name="email">
            </div>
            <input id="submit" type="submit" value="Login">
        </form>
    </div>
    <?php if ($email === null || $email === '') : ?>
        <h3>Inserisci le credenziali</h3>
    <?php elseif ($check === true) : ?>
        <div class="alert alert-success" role="alert">
            A simple success alert—check it out!
        </div>
    <?php elseif ($check === false) : ?>
        <div class="alert alert-danger" role="alert">
            A simple success alert—check it out!
        </div>
    <?php endif; ?>
</body>

</html>