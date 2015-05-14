<?php
    if($_SESSION["usertype"] == "administrator"){
?>
        <form id="editsqltext" action="editsqltext.php" method="post">
            <input type="hidden" name="id" value="<?php echo $idtext;?>" />
            <input type="hidden" name="lastpage" value="<?php echo $thispage;?>" />
            <input class="edit-sql" type="image" src="images/edit-right.png">
        </form>
<?php
    }

    echo "<div id=''>";
        echo $content["content"];
    echo "</div>";
?>
