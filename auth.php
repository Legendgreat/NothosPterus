<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="3; url=<?php
                                                       if($_SESSION["lastpage" != null]){
                                                           echo $_SESSION["lastpage"];
                                                       } else {
                                                           echo "Insight";
                                                       }
                                                   ?>"/>
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
        Authentication <span id="check" style="font-weight: bold;"></span>, redirecting back in <span id="seconds">3</span> seconds.
        <?php
            if($_POST["login"] == "admin" && $_POST["password"] == "talentpassword"){
                echo "<script>document.getElementById('check').innerHTML = 'succesful'</script>";
                echo "<script>document.getElementById('check').style.color = 'green'</script>";
                $_SESSION["usertype"] = "administrator";
            } else {
                echo "<script>document.getElementById('check').innerHTML = 'unsuccesful'</script>";
                echo "<script>document.getElementById('check').style.color = 'red'</script>";
            }
        ?>
    </body>
</html>
