<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="3; url=www_talentdeveloper.php" />
        <title></title>
        
        <script>
            var x = 3;
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
        <span id="check" style="font-weight: bold;"></span> logged out the user out, redirecting back in <span id="seconds">3</span> seconds.
        
        <?php
            if($_SESSION["usertype"] == "administrator"){
                echo "<script>document.getElementById('check').innerHTML = 'Succesfully'</script>";
                echo "<script>document.getElementById('check').style.color = 'green'</script>";
                session_unset();
                session_destroy();
            } else {
                echo "<script>document.getElementById('check').innerHTML = 'Unsuccesfully'</script>";
                echo "<script>document.getElementById('check').style.color = 'red'</script>";
            }
        ?>
    </body>
</html>
