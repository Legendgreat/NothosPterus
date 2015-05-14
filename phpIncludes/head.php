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
    <script src="js/jquery/loadHTML.js"></script>
    <script>
        document.ready(function(){
            var a = document.getElementsByClassName('loadHTML');
            for(var i = 0; i < a.length; i++){
                var b = a[i].attr('id');
                $('.loadHTML').load(b);
            }
        });
    </script>
</head>
