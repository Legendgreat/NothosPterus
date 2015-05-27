<!DOCTYPE html>

<?php
    $thispage = "Proposition.php";
    session_start();
    $_SESSION["lastpage"] = $thispage;
?>

<html lang="en">
    <?php
        include 'phpIncludes/head.php'
    ?>
    <body class="metro" style="background-color: white;">
        <div class="container10x6" style="background-color: black;">
            <div class="main-content clearfix">
                <?php
                    include 'phpIncludes/navBar.php';
                ?>
                <div class="tile-area no-padding clearfix text-area">
                    <div class="tab-content">
                        <div class="page-content" id="left">
                            <?php
                                $idtext = 5;
                                $sqlside = 'left';
                                include 'phpIncludes/getText.php';
                                include 'phpIncludes/placeText.php';
                            ?>
                        </div>
                        <div class="page-content" id="right">
                            <?php
                                $idtext = 6;
                                $sqlside = 'right';
                                include 'phpIncludes/getText.php';
                                include 'phpIncludes/placeText.php';
                            ?>
                        </div>
                    </div>
                </div>
                <?php
                    include 'htmlIncludes/balloonMenu.html';
                ?>
            </div>
        </div>
    </body>
</html>