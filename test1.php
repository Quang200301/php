<?php session_start() ?>
<html>
    <style>
        img{
            height:70px;
            width: 70px;
        }
    </style>
    <body>

<form action="" method="post">
thông tin sản phẩm

    <table border="1px solid black"> 
        <tr>
            <td>tên</td>
            <td>giá</td>
            <td>mô tả</td>
            <td>hình ảnh</td>
            <td>action</td>
        </tr>
        <?php
        $fruit = $_SESSION['user'];
            $n=count($_SESSION['user']);
            for($i=0;$i<$n;$i++)
            {
    ?>
    <tr>
        <td><?php echo $fruit[$i]['ten'];?></td>
        <td><?php echo $fruit[$i]['gia'];?></td>
        <td><?php echo $fruit[$i]['mota'];?></td>
        <td><img   src="<?php echo $fruit[$i]['hinhanh']?>"></td>
        <td> <a href="test2.php? delete=<?php echo ($i)  ?>">delete</a></td>
    </tr>
    <?php
}

    ?>
    </table>

</form>
       
    </body>
</html>