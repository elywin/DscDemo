<!DOCTYPE html>
<head>
<title>form</title>
</head>git 
<body>
    <?php
    echo gmdate("M d Y");
    ?>
    <FORM method="POST" action="login.php">
        User name:
        <input type="text" name="text1"><br><br>
        User password:
        <input type="password" name="pwd"><br><br>
        <input type="submit" name="submit" value="Submit">
</FORM>
</body>
</html>