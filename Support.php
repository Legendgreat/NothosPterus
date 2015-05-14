<!DOCTYPE html>

<?php
    $thispage = "Support.php";
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
                        <div class="page-content" id="left" page="1">
                            <?php
                                $idtext = 3;
                                include 'phpIncludes/getText.php';
                                include 'phpIncludes/placeText.php';
                            ?>
                        </div>
                        <div class="page-content" id="right" page="1">
                            <?php
                                $idtext = 4;
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