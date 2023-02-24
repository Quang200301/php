<html>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file_up"/>
            <input type="submit" name="btn" value="upload file"/>

        </form>
        <?php
        if(isset($_POST['btn']))
        {
            if(isset($_FILES['file_up']))
            {
                $file=$_FILES['file_up'];
                $tenfile=$file['name'];

            move_uploaded_file($file['tmp_name'],$tenfile);
         
        ?>
        <img src="<?php echo $tenfile ?>">
        <?php
           }
        }
        ?>
    </body>
</html>