<!DOCTYPE html>

<?php
    $thispage = "www_talentdeveloper.php";
    session_start();
?>

<html lang="en">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/metro-bootstrap.css">
        <link rel="stylesheet" href="css/metro-bootstrap-responsive.css">
        <link rel="stylesheet" href="css/iconFont.css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <script src="js/jquery/jquery.min.js"></script>
        <script src="js/jquery/jquery.widget.min.js"></script>
        <script src="js/metro/metro.min.js"></script>
        <script src="js/jquery/script.js"></script>
        
        
    </head>
    <body class="metro" style="background-color: white;">
        <div class="container10x6" style="background-color: black;">
            <div class="main-content clearfix">
                <div class="tile-area nav-bar no-padding clearfix">
                    <div class="tile-group two no-padding clearfix">
                        <!-- tile for opening balloon pop up menu -->
                        <div class="tile menutile bg-blue">
                            <div class="tile-content icon">
                                <i class="icon-grid"></i>
                            </div>
                        </div>
                        <div class="tile bg-orange manual-adjust">
                            <img src="images/english-flag.png">
                        </div>
                        
                        <?php
                            if($_SESSION["usertype"] == "administrator"){
                                ?>
                                    <a href="www_talentdeveloper_logout.php">
                                        <div class="tile log-in bg-orange">
                                            <img src="images/Tabuser08 changlogin-normal.png" style="">
                                            <span class="tile-status title unselectable">Log Out</span>
                                        </div>
                                    </a>
                                <?php
                            } else {
                                ?>
                                    <a href="www_talentdeveloper_login.php">
                                        <div class="tile log-in bg-orange">
                                            <img src="images/Tabuser08 changlogin-normal.png" style="">
                                            <span class="tile-status title unselectable">Log In</span>
                                        </div>
                                    </a>
                                <?php
                            }
                        ?>
                        
                        <div class="tile no-outline border selected" id="contextmenu">
                            
                            <img src="images/insight-icon.png" style="">
                            <span class="tile-status title unselectable">
                                Inzicht
                            </span>
                        </div>
                    </div>
                    <div class="tile-group no-padding clearfix" style="margin: 5px; margin-left: 0; margin-right: 0;">
                        <a href="https://trm.talentdeveloper.com/newdemo">
                            <div class="tile triple double-vertical" style="display: table-cell;">
                                <img src="images/TalentPassport-icon-380x250.png">
                                <span class="tile-status title unselectable" style="color: black; margin-left: 15px;">Mijn persoonlijk TalentPaspoort</span>
                            </div>
                        </a>
                        <div class="tile penta double-vertical no-margin-right">
                            <img src="images/Peter logo links 640x250.png">
                        </div>
                    </div>
                </div>
                <div class="tile-area no-padding clearfix text-area">
                    <div class="tab-content">
                        <div class="page-content" id="left">
                            <?php
                                $idtext = 1;
                                include 'phpincludes/getText.php';				
                                echo $content["content"];

                                if($_SESSION["usertype"] == "administrator"){
                                    ?>
                                        <form action="editsqltext.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo $idtext;?>">
                                            <input class="edit-sql" type="image" src="images/pencil_icon_by_zachthesloth-d7l0utc.png">
                                        </form>
                                    <?php
                                }
                            ?>
                        </div>
                        <div class="page-content" id="right">
                            <?php
                                $idtext = 4;
                                include 'phpincludes/getText.php';
                                echo $content["content"];

                                if($_SESSION["usertype"] == "administrator"){
                                    ?>
                                        <form id="editsqltext" action="editsqltext.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo $idtext;?>">
                                            <input class="edit-sql" type="image" src="images/pencil_icon_by_zachthesloth-d7l0utc.png">
                                        </form>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="balloon bottom menu bg-blue" id="balloon">
                    <div class="tile-area tile-area-balloon clearfix">

                        <!-- extra tiles -->
                        <div class="tile border" id="contextmenu">
                            <span class="tile-status title unselectable">
                                Inzicht
                            </span>
                        </div>
                        <div class="tile border" id="contextmenu">
                            <span class="tile-status title unselectable">
                                Over Ons
                            </span>
                        </div><div class="tile border" id="contextmenu">
                            <span class="tile-status title unselectable">
                                Nieuws
                            </span>
                        </div><div class="tile border" id="contextmenu">
                            <span class="tile-status title unselectable">
                                Support
                            </span>
                        </div><div class="tile border" id="contextmenu">
                            <span class="tile-status title unselectable">
                                Propositie
                            </span>
                        </div><div class="tile border" id="contextmenu">
                            <span class="tile-status title unselectable">
                                Competentie Management
                            </span>
                        </div><div class="tile border" id="contextmenu">
                            <span class="tile-status title unselectable">
                                Talent Management
                            </span>
                        </div><div class="tile border" id="contextmenu">
                            <span class="tile-status title unselectable">
                                Prestatie Management
                            </span>
                        </div><div class="tile border" id="contextmenu">
                            <span class="tile-status title unselectable">
                                Vacature
                            </span>
                        </div><div class="tile border" id="contextmenu">
                            <span class="tile-status title unselectable">
                                Contact
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
