

<?php 
session_start();
error_reporting(0);

if(isset( $_GET['edit']) && $_GET['edit']>=0){
    for($i=0;$i< sizeof ($_SESSION["Trai_cay"]);$i++){
        $b=$_SESSION['Trai_cay'][$i][0];
        $c=$_SESSION['Trai_cay'][$i][1];
        $d=$_SESSION['Trai_cay'][$i][2];

        
    }
}


if(isset($_POST['sbm'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $img=$_POST['tinh'];
    if($name!='' && $price!='' && $img!=''){
        $mang=[$name,$price,$img];
        $_SESSION["Trai_cay"][$_GET['edit']]=$mang;
        header("location:task1.php");
        
    } 
}
?>

<form action="" method="post">
        <label for="">Tên</label>
        <input type="text" name="name" value="<?php echo $b?>"> <br>
        <label for="">Giá</label>
        <input type="text" name="price" value="<?php echo $c?>"><br>
        <label for="">Tỉnh</label>
        <input type="text" name="tinh" value="<?php echo $d?>"><br>
        <input type="submit" name="sbm" value="cập nhật">
</form>