<!DOCTYPE html>
<html>
<head>
    <title> LOGIN PAGE </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" nethod="post">
        <h1> LOGIN </h1>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label> USER NAME :</label>
        <input type="text" name="uname" placeholder="user name"><br><br>
        <label> PASSWORD  :</label>
        <input type="password" name="password" placeholder="password"><br><br>
        <button type="submit"> LOGIN </button>
        </form>
</body>
</html>

