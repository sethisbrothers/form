<?php require_once('connexion.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['id'])){

            $supp = $_GET['id'];
            $reqDelete = "DELETE FROM message WHERE id = '$supp'";

            $result = $conn->query($reqDelete);

            if($result){
                    echo "<label style='text-align:center; margin-right: 50px; color: #960406;'>La suppression a été correctement éffectuée...</label>";
            }
            else{
                echo "<label style='text-align:center; color: #960406;'>La suppression a échoué...</label>";
            }

        }
    ?>
<button> <a class="btn btn-danger" href="view.php">Read</a> </button>
</body>
</html>