
<?php session_start();
function sanpham(){
    if (isset($_SESSION['Trai_cay'])&& is_array($_SESSION['Trai_cay'])){
        for($i=0;$i<sizeof($_SESSION['Trai_cay']);$i++){
          ?>
        <tr>
            <td><?php echo($i)  ?></td>
            <td> <?php echo $_SESSION['Trai_cay'][$i][0] ?></td>
            <td><?php echo $_SESSION['Trai_cay'][$i][1]  ?></td>
            <td><?php echo $_SESSION['Trai_cay'][$i][2]  ?></td>
            <td><?php echo $_SESSION['Trai_cay'][$i][3]  ?></td>
            <td> <a href="past1.php? delete=<?php echo($i) ?>">delete </a> <a href="past3.php? edit=<?php echo($i) ?>">edit </a></td>

        </tr>  
    <?php
        }
    }
}
if(isset( $_GET['delete']) && $_GET['delete']>=0){
    array_splice($_SESSION["Trai_cay"],$_GET['delete'],1);
}
?>
<html>
    <body>
        <table border="1px solid">
            <tr>
                <td>stt</td>
                <td>Tên</td>
                <td>Giá</td>
                <td>Đánh giá</td>
                <td> Ảnh</td>
            </tr>
            <?php
            sanpham()
            ?>
        </table>
    </body>
</html>