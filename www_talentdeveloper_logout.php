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
        <span id="check"></span> logged out the user out, redirecting back in <span id="seconds"></span> seconds.
        
        <?php
            if($_SESSION["usertype"] == "administrator"){
                echo "<script>document.getElementById('check').innerHTML = 'Succesfully'</script>";
                session_unset();
                session_destroy();
            } else {
                echo "<script>document.getElementById('check').innerHTML = 'Unsuccesfully'</script>";
            }
        ?>
    </body>
</html>
