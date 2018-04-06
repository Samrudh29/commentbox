<?php
if($_POST) {
    $name = $_POST['name'];
    $content = $_POST['commentContent'];
    $handle = fopen("comments.html","a");
    fwrite($handle,"<b>" . $name . "</b>:<br/>" . $content . "<br/>");
    fclose($handle);
    
}
?>


<html>
    <head>
        
    </head>
    <body>
        <form action = "" method = "POST">
        Name: <input type = "text" name = "name"><br/>
        Comment: <textarea rows = "10" cols = "30" name = "commentContent"></textarea><br/>
        <input type = "submit" value = "Post"><br/>
        </form>
        <?php include "comments.html"; ?>
    </body>
</html>
