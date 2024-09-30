<?php 

include 'functions.php';

if (isset($_GET['pwd_lenght'])) {
    $pwd_lenght = $_GET['pwd_lenght'];
    $my_password = generatePassword($pwd_lenght);
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="w-75 mx-auto my-5 border border-3 border-success text-center">

        <div class="">
            <form class="border border-1 border-primary w-50 mx-auto py-3 my-5" action="#" method="GET">

                <h2>
                    Generatore di password
                </h2>
                <label for="pwd_lenght">
                    Lunghezza password desiderata:
                </label>
                <input type="text" id="password-lenght" name="pwd_lenght">
                <button class="button btn-primary">Genera password</button>
            </form>

            <div class="d-flex align-items-center justify-content-center w-50 mx-auto my-5 border border-1 border-primary">
                <h1>
                    Password generata:
                </h1>
                <h3 class="ps-2">
                    <?php echo $my_password ?>
                </h3>
            </div>

        </div>

    </div>
    

    
</body>
</html>