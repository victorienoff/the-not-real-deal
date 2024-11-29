<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "assets/bootstrap/link.php"?>
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Contrail+One&display=swap" rel="stylesheet">
    <title>The Real Deal</title>
</head>
<body class="overflow-x-hidden">
    <?php require '../view/header.php'; ?>
    <div class="p-0">
        <div class="">
            
            <div class="m-0 p-0">
                <?php
                    if (!isset($_GET['page'])) { // Si $_GET['page'] n'existe pas
                        include('../view/home.php');
                    } else {
                        if ($_GET['page'] == 2 ) {
                            include('../view/home.php');
                        }
                        if ($_GET['page'] == 3 ) {
                            include('../view/mes_paris.php');
                        }
                        if ($_GET['page'] == 4 ) {
                            include('../view/profil.php');
                        }
                        if ($_GET['page'] == 5 ) {
                            include('../view/connexion.php');
                        }
                        if ($_GET['page'] == 6 ){
                            include('../view/inscription.php');
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include '../view/footer.php'; ?>

    <?php include "../public/assets/bootstrap/script.php"?>
    <script src="assets/js/script.js"></script> <!-- Inclure le script JS -->
</body>
</html>
