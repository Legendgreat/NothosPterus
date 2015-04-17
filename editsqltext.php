<!DOCTYPE html>
<?php
    $servername = "localhost";
    $username = "talentpass_root";
    $password = "9n0dehPsLR";
    $buttontext = "Toevoegen";
    $content;

    // Create connection
    try {
        $conn = new PDO("mysql:host=$servername;dbname=talentpass_db", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        echo "Connection failed: " . $ex->getMessage();
    }
    
    if(isset($_POST["id"])){
        get($_POST["id"]);
        $buttontext = "Aanpassen";
    }
    
    if (isset($_POST["submit"])&&$_POST['content']) {
        if(!isset($_POST["id"])){
            $newcontent = $_POST["content"];
            add($newcontent);
        } else {
            $newcontent = $_POST["content"];
            $id = $_POST["id"];
            edit($id ,$newcontent);
        }
    }

    function add($newcontent){
        global $conn;

        try{
            $statement = $conn->prepare("INSERT INTO test (content) VALUES (?)");
            $statement->bindValue(1, $newcontent, PDO::PARAM_STR);
            $statement->execute();

            header("location: index.php");
        }

        catch(PDOException $ex){
                print_r($ex);
                die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
        }
    }
    
    function get($id){
        global $conn;
        global $content;
        
        try{
            $statement = $conn->prepare("SELECT content FROM test WHERE id=?");
            $statement->bindValue(1, $id, PDO::PARAM_STR);
            $statement->execute();
            $content = $statement->fetch()["0"];
            
            
        } catch (Exception $ex) {
            print_r($ex);
        }
    }
    
    function edit($id, $newcontent){
        global $conn;
        
        try{
            $statement = $conn->prepare("UPDATE test SET content=? WHERE id=?");
            $statement->bindValue(1, $newcontent, PDO::PARAM_STR);
            $statement->bindValue(2, $id, PDO::PARAM_STR);
            $statement->execute();
            
            header('location: '. $_POST["lastpage"]);
        } catch (PDOException $ex) {
            print_r($ex);
        }
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="js/jquery/jquery.min.js"></script>
        <script src="js/jquery/jquery.widget.min.js"></script>
        <title></title>
        
        <!-- Place inside the <head> of your HTML -->
        <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            height: "700",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
        </script>
    </head>
    <body>
        <div id="editpage" style="width: 100%; text-align: center;">
            Currently editing textbox id [<?php echo $_POST["id"];?>] from the page [<?php echo $_POST["lastpage"];?>].
        </div><br>
        <form method="post" action="editsqltext.php">
            <textarea name="content" style="width:100%;"><?php
                if(isset($content)){
                    echo $content;
                }
            ?></textarea>
            <div id = "knoppenbalk" style="width: 100%; text-align: center; margin-top: 10px; text-">
                <input class = "btn btn-default left" type = "submit" class = "knop" name = "submit" value="<?php echo $buttontext;?>" style="width: 40%; height: 50px;"/>
                <input type="hidden" id="id" name="id" value="<?php echo $_POST["id"];?>" />
                <input type="hidden" id="lastpage" name="lastpage" value="<?php echo $_POST["lastpage"];?>" />
            </div>
        </form>
    </body>
</html>
