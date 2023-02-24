<?php  session_start()?>
<html>
    <body>
        <?php
            $id=$_GET['delete'];
            array_splice($_SESSION["user"],$id,1);
            header('location: test1.php') 
        ?>
    </body>
</html>