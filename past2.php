<?php session_start();
function traicayy(){
    if(isset($_SESSION['traicay']) && is_array($_SESSION['traicay'])){
        for($i=0;$i<sizeof($_SESSION['traicay']);$i++){
            ?>
        <tr>
        <td> <?php echo ($i)  ?></td>
        <td><?php echo $_SESSION['traicay'][$i][0]  ?></td>
        <td><?php  echo $_SESSION['traicay'][$i][1]   ?></td>
        <td> <a href="past2.php? delete=<?php echo ($i)  ?>">delete</a> <a href="task3.php? edit=<?php echo ($i) ?>">edit</a></td>
        </tr>
        <?php 
        }
    }
}

if(isset( $_GET['delete']) && $_GET['delete']>=0){
    array_splice($_SESSION["traicay"],$_GET['delete'],1);
}
?>


<html>
    <body>
        
            <table border="1px solod">
                <tr>
                    <th>STT</th>
                    <th>name</th>
                    <th>passwork</th> 
                </tr>
                
                    <?php 

                    traicayy()
                   ?>
                   
              
            </table>
            <a href="past1.php"> thêm</a>
                   
                    
                
            
     
    </body>
</html>