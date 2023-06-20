<?php

require 'Connexion.php';

$requete = "SELECT * FROM use6 ";

$data = $pdo->query($requete)->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="IndexCss.css" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="Images/1651706866270.jpeg" alt="Avatar Logo" style="width: 40px;" class="rounded-pill" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item">
                    <a class="nav-link mr-4" href="#footer" style="color: white;"><h5>Contactez-nous</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4" href="#" style="color: white;"><h5>A propos</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4" href="#" style="color: white;"><h5>Menu</h5></a>
                </li>
            </ul>
        </div>
    </nav>

    
</body>
</html>
<div class="container center-table   ">
<table class="table table-striped mx-auto mt-5 w- ">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Active</th>
                <th scope="col">Post</th>
            </tr>
        </thead>
    
<?php    foreach ($data as $ligne) { 
        $activeStatus = ($ligne->Active == 1) ? 'true' : 'false'; ?>

       <tr>
                <td><?php echo $ligne->ID; ?></td>
                <td><?php echo $ligne->Username; ?></td>
                <td><?php echo $activeStatus; ?></td>
                <td><?php echo $ligne->Post; ?></td>
            </tr>

<?php   }  ?>

    
    
    </table>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
