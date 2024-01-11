<?php
$email = isset($_GET["email"]) ? $_GET["email"] : NULL;
// var_dump($email);

require_once __DIR__ . './function.php';


$check = $email ? checkEmail($email) : NULL;
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
                <input type="text" id="email" name="email" value="<?php echo $email ?>">
            </div>
            <input id="submit" type="submit" value="Login">
        </form>
    </div>
    <?php if ($email === NULL || $email === '') : ?>
        <h3>Inserisci le credenziali</h3>
    <?php else : ?>
        <div class="alert <?php echo $check ? 'alert-success' : 'alert-danger'; ?>" role="alert">
            <h3><?php echo $check ? 'Email Valida' : 'Email Non Valida'; ?></h3>
        </div>
    <?php endif; ?>
</body>

</html>