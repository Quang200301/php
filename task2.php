
<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
        <label for="">Tên</label>
        <input type="text" name="name"> <br>
        <label for="">Giá</label>
        <input type="text" name="price"><br>
        <label for="">Tỉnh</label>
        <input type="text" name="tinh"><br>
        <input type="submit" name="sbm" value="submit">

    <?php
         session_start();   
        if(!isset($_SESSION["Trai_cay"])) $_SESSION["Trai_cay"]=[];
        if(isset($_POST['sbm'])){
            $name=$_POST['name'];
            $price=$_POST['price'];
            $img=$_POST['tinh'];

            if($name!='' && $price!='' && $img!=''){
                $mang=[$name,$price,$img];
                $_SESSION["Trai_cay"][]=$mang;
                header("location:task1.php");
            }
            else{
            echo "<script> alert('vui lòng điền đâỳ đủ thông tin')</script>";
            }
           

        }

      

     
    ?>
    </form>
</body>
</html>