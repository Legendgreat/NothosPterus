<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            label{width: 25%; float: left;}
            input{width: 73%;}
        </style>
    </head>
    <body>
        <form action="auth.php" method="post">
            <fieldset style="width: 300px;">
                <legend>Admin Login</legend>
                <label for="login">Username: </label><input type="text" id="login" name="login"><br>
                <label for="password">Password:  </label><input type="password" id="password" name="password"><br>
                <input type="submit" name="submit" value="Login" style="width: 100%; margin-top: 4px;">
            </fieldset>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
