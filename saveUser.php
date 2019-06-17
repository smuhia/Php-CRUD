<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="save_div">
        <form action="saveUserProcess.php" method="get">
            <input type="text" placeholder="Enter name" name="name" required class="inputs">
            <br>
            <input type="email" placeholder="Email" name="email" required class="inputs">
            <br>
            <input type="password" placeholder="Password" name="password" required class="inputs">
            <br>
            <input type="submit" value="save" name="btnsave" class="sbtn"><br>
            <a  class="vlink" href="viewUsers.php">View Users</a>
        </form>
    </div>

</body>
</html>