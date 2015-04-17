<!DOCTYPE html>

<?php
    $servername = "localhost";
    $username = "talentpass";
    $password = "9n0dehPsLR";

    // Create connection
    try {
        $conn = new PDO("mysql:host=$servername;dbname=talentpass_db", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // connected to database succesfully
    } catch (PDOException $ex) {
        echo "Connection failed: " . $ex->getMessage();
    }
?>

<html lang="en">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/metro-bootstrap.css">
        <link rel="stylesheet" href="css/metro-bootstrap-responsive.css">
        <link rel="stylesheet" href="css/iconFont.css">
        <script src="js/jquery/jquery.min.js"></script>
        <script src="js/jquery/jquery.widget.min.js"></script>
        <script src="js/metro/metro.min.js"></script>
        <script src="js/jquery/script.js"></script>
    </head>
    <body class="metro" style="background-color: white;">
        <div class="container10x6" style="background-color: black;">
            <div class="main-content clearfix">
                <div class="tile-area no-padding bg-black clearfix">
                    <div class="tile-group ten no-padding clearfix" style="margin: 5px; margin-right: 0; float: left;">
                        <!-- tile for opening balloon pop up menu -->
                        <div class="tile menutile bg-blue" id="contextmenu">
                            <div class="tile-content icon">
                                <i class="icon-grid"></i>
                            </div>
                        </div>
                        <a href="trm_talentdeveloper.html">
                            <div class="tile bg-white" style="display: table-cell; text-align: center;">
                                <span class="tile-status title" style="color: #11337b; background-color: white;">
                                    swek
                                </span>
                            </div>
                        </a>
                        <a href="trm_talentdeveloper.html">
                            <div class="tile bg-white" style="display: table-cell; text-align: center;">
                                <span class="tile-status title" style="color: #11337b; background-color: white;">
                                    swek
                                </span>
                            </div>
                        </a>
                        <div class="tile no-outline border selected" style="display: table-cell; width: 120px; height: 120px; background-color: #11337b; background-image: url('information-icon.png'); cursor: default; text-align: center; vertical-align: bottom;">
                            <img src="images/information-icon.png" style="display: ">
                            <span class="tile-status title unselectable" style="color: #11337b; background-color: white;">
                                Informatie
                            </span>
                        </div>
                        <a href="trm_talentdeveloper.html">
                            <div class="tile bg-white" style="display: table-cell; text-align: center;">
                                <span class="tile-status title" style="color: #11337b; background-color: white;">
                                    swek
                                </span>
                            </div>
                        </a>
                        <a href="trm_talentdeveloper.html">
                            <div class="tile bg-white" style="display: table-cell; text-align: center;">
                                <span class="tile-status title" style="color: #11337b; background-color: white;">
                                    swek
                                </span>
                            </div>
                        </a>
                        <a href="trm_talentdeveloper.html">
                            <div class="tile bg-white" style="display: table-cell; text-align: center;">
                                <span class="tile-status title" style="color: #11337b; background-color: white;">
                                    swek
                                </span>
                            </div>
                        </a>
                        <a href="trm_talentdeveloper.html">
                            <div class="tile bg-white" style="display: table-cell; text-align: center;">
                                <span class="tile-status title" style="color: #11337b; background-color: white;">
                                    swek
                                </span>
                            </div>
                        </a>
                        <a href="trm_talentdeveloper.html">
                            <div class="tile bg-white" style="display: table-cell; text-align: center;">
                                <span class="tile-status title" style="color: #11337b; background-color: white;">
                                    swek
                                </span>
                            </div>
                        </a>
                        <a href="www_talentdeveloper.php">
                            <div class="tile bg-white" style="display: table-cell; text-align: center;">
                                <img src="images/Butterfly-icon.png">
                                <span class="tile-status title" style="color: red;">
                                    Uitloggen
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="tile-area no-padding clearfix" style="margin: 0; margin-top: -5px;">
                    <div class="tab-content" style="height: 740px; width: 1290px; margin-left: 5px; background-color: #11337b; border: 1px solid #35569a;">
                        <div style="text-decoration-color: white; padding: 1em;">
                            
                        </div>
                    </div>
                </div>
                <div class="balloon bottom menu bg-blue" id="balloon" style="position: absolute; height: 310px; width: 695px; display: none;">
                    <div class="tile-area clearfix" style="margin: 15px 0 0 15px; padding: 10px 0 0 10px;">

                        <!-- extra tiles -->
                        <div class="tile border" id="contextmenu" style="display: table-cell; width: 120px; height: 120px; background-color: #11337b; text-align: center; vertical-align: bottom;">
                            <span class="tile-status title unselectable" style="color: #11337b; background-color: white;">
                                test
                            </span>
                        </div>
                        <div class="tile bg-lightRed">

                        </div>
                        <div class="tile bg-lightRed">

                        </div>
                        <div class="tile bg-lightRed">

                        </div>
                        <div class="tile bg-lightRed">

                        </div>
                        <div class="tile bg-lightRed">

                        </div>
                        <div class="tile bg-lightRed">

                        </div>
                        <div class="tile bg-lightRed">

                        </div>
                        <div class="tile bg-lightRed">

                        </div>
                        <div class="tile bg-lightRed">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $conn = null;
        ?>
    </body>
</html>
