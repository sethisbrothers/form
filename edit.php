<?php require_once('connexion.php');?>
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
    <form action="" method="post" enctype="multipart/form-data">
        <h2>Modifier un élément</h2>

        <label for="name">Name</label>
        <input type="text" id="name" name="name">

        <label for="message">Message</label>
        <textarea id="message" name="message"></textarea>

        <label for="priority">Priority</label>
        <select id="priority" name="priority">
            <option value="1">Low</option>
            <option value="2" selected>Medium</option>
            <option value="3">High</option>
        </select>

        <fieldset>
            <legend>Type</legend>

            <label>
                <input type="radio" name="type" value="1" checked>
                complaint
            </label>
            
            <br>

            <label>
                <input type="radio" name="type" value="2">
                suggestion
            </label>
        </fieldset>

        <label for="">
            <input type="checkbox" name="terms">
            I agree to the terms and conditions
        </label>

        <br>

        <button name="save" >Send</button>

        <?php
        if(isset($_POST['save'])){

            $name = $_POST['name'];
            $message = $_POST['message'];
            $priority = $_POST['priority'];
            $type = $_POST['type'];


            $update = $_GET['id'];

            $reqUp = "UPDATE message SET name='$name', body='$message', priority='$priority', type='$type' WHERE id='$update'";

            $result = $conn->query($reqUp);

            if($result)
            {
                echo "Modification Réussie";
            }
            else{
                echo"Echec de modification des données";
            }

        }

        ?>


    </form>


</body>
</html>