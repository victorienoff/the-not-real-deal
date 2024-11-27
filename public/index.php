<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "assets/bootstrap/link.php"?>
    <link href="assets/css/main.css" rel="stylesheet">
    <title>The Real Deal</title>
</head>
<body>
    
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-2 fixed-top p-0">
                <?php 
                    include '../view/header.php';
                ?> 
            </div>
            <div class="col-10 offset-2">
            <?php
                if (!isset($_GET['page'])) { // Si $_GET['page'] n'existe pas
                
                    include('../view/home.php');
                } else {

                    if ($_GET['page'] == 2 ) {
                        include('../view/home.php');
                    }
                    
                    
                    
                }

            ?>
            </div>
        </div>
    </div>
    <?php include "../public/assets/bootstrap/script.php"?>

</body>
</html>
