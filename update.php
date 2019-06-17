<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="save_div">
        <form action="updateProcess.php"method="post">
            <?php
            /**
             * Created by PhpStorm.
             * User: emobilis
             * Date: 6/12/19
             * Time: 10:22 AM
             */
            if (isset($_GET['id_yetu'])){
                $id=$_GET['id_yetu'];
                $name=$_GET['jinayetu'];
                $email=$_GET['arafayetu'];
                $password=$_GET['passyetu'];

            }

            ?>

            <input type="text"name="x"value="<?php echo $id;?>" hidden class="inputs"><br>
            <input type="text"name="y" value="<?php echo $name;?>"class="inputs" ><br>
            <input type="email" name="z" value="<?php echo $email;?>"class="inputs" ><br>
            <input type="text" name="pwd" value="<?php echo $password;?>" class="inputs"><br>
            <input type="submit" value="udpate" name="btnupdate" class="sbtn"><br>
        </form>

    </div>




</body>
</html>