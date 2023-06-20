<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="IndexCss.css">
</head>
<body>
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
            <img src="Images\1651706866270.jpeg" />
            <div class="px-2">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="justify-content-center">
                    <div class="form-group">
                        <label class="sr-only">Username</label>
                        <input type="text" class="form-control" placeholder="username" name="Username">
                    </div>
                    <div class="form-group">
                        <label class="sr-only">Password</label>
                        <input type="password" class="form-control" placeholder="password" name="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>
</html>

<?php
if (!empty($_POST)) {
    require 'connexion.php';
    extract($_POST);

    $requete = "SELECT * FROM use6 
                WHERE Username = '$Username'
                AND Password = '$Password'";

    $data = $pdo->query($requete)->fetch(PDO::FETCH_OBJ);

    if ($data) {
        header('location:table.php');
        exit;
    } else {
        header('location:table.php');
        echo "erreur";

    }
}
?>
