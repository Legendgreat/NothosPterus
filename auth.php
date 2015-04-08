<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="5; url=www_talentdeveloper.php" />
        <title></title>
        
        <script>
            var x = 5;
            var counter = setInterval(changeText, 1000);
            
            function changeText(){
                x--;
                if(x <= 0){
                    clearInterval(counter);
                    return;
                }
                document.getElementById('seconds').innerHTML = x;
            }
        </script>
    </head>
    <body onload="">
        Authentication <span id="check"></span>, redirecting back in <span id="seconds">5</span> seconds.
        
        <?php
            if($_POST["login"] == "admin" && $_POST["password"] == "talentpassword"){
                echo "<script>document.getElementById('check').innerHTML = 'succesful'</script>";
                $_SESSION["usertype"] = "administrator";
            } else {
                echo "<script>document.getElementById('check').innerHTML = 'unsuccesful'</script>";
            }
        ?>
    </body>
</html>
