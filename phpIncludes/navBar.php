<div class="tile-area nav-bar no-padding clearfix">
    <div class="tile-group two no-padding clearfix">
        <!-- tile for opening balloon pop up menu -->
        
        <?php
            if($_SESSION["usertype"] == "administrator"){
                ?>
                    <a href="www_talentdeveloper_logout.php">
                        <div class="tile log-in bg-orange">
                            <img src="images/logout.png" style="">
                            <span class="tile-status title unselectable">Log Out</span>
                        </div>
                    </a>
                <?php
            } else {
                ?>
                    <a href="www_talentdeveloper_login.php">
                        <div class="tile log-in bg-orange">
                            <img src="images/login.png" style="">
                            <span class="tile-status title unselectable">Log In</span>
                        </div>
                    </a>
                <?php
            }
        ?>
        <div class="tile bg-orange manual-adjust">
            <img src="images/english-flag.png">
        </div>
        <div class="tile menutile bg-blue">
            <img src="images/contextmenu/menu-icon.png" style="">
        </div>
        <div class="tile no-outline border selected" id="contextmenu">
            <?php
                switch ($thispage){
                    case 'Insight.php':
                        ?>
                            <img src="images/contextmenu/insight-icon.png" style="">
                            <span class="tile-status title unselectable">
                                Inzicht
                            </span>
                        <?php
                        break;
                    case 'Support.php':
                        ?>
                            <img src="images/contextmenu/support-icon.png" style="">
                            <span class="tile-status title unselectable">
                                Support
                            </span>
                        <?php
                        break;
                    case 'Proposition.php':
                        ?>
                            <img src="images/contextmenu/proposition-icon.png" style="">
                            <span class="tile-status title unselectable">
                                Propositie
                            </span>
                        <?php
                        break;
                    case 'Competency.php':
                        ?>
                            <img src="images/contextmenu/competence-icon.png" style="">
                            <span class="tile-status title unselectable">
                                Competentie
                            </span>
                        <?php
                        break;
                    case 'Talent.php':
                        ?>
                            <img src="images/contextmenu/talent-icon.png" style="">
                            <span class="tile-status title unselectable">
                                Talent
                            </span>
                        <?php
                        break;
                    case 'Performance.php':
                        ?>
                            <img src="images/contextmenu/performance-icon.png" style="">
                            <span class="tile-status title unselectable">
                                Prestatie
                            </span>
                        <?php
                        break;
                    case 'Contact.php':
                        ?>
                            <img src="images/contextmenu/contact-icon.png" style="">
                            <span class="tile-status title unselectable">
                                Contact
                            </span>
                        <?php
                        break;
                }
            ?>
        </div>
    </div>
    <div class="tile-group no-padding clearfix" style="margin: 5px; margin-left: 0; margin-right: 0;">
        <a href="https://trm.talentdeveloper.com/newdemo">
            <div class="tile triple double-vertical" style="display: table-cell;">
                <img src="images/TalentPassport-icon-380x250.png">
                <span class="tile-status title unselectable" style="color: black; margin-left: 15px;">Mijn persoonlijk TalentPaspoort</span>
            </div>
        </a>
        <a href="Insight.php">
            <div class="tile penta double-vertical no-margin-right">
            <img src="images/Peter logo links 640x250.png">
            </div>
        </a>
    </div>
</div>