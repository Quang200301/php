<?php session_start();
function Quang(){
    if(isset($_SESSION['Trai_cay']) && is_array($_SESSION['Trai_cay'])){
        for($i=0;$i<sizeof($_SESSION['Trai_cay']);$i++){
            ?>
        <tr>
        <td> <?php echo ($i)  ?></td>
        <td><?php echo $_SESSION['Trai_cay'][$i][0]  ?></td>
        <td><?php  echo $_SESSION['Trai_cay'][$i][1]   ?></td>
        <td><?php  echo $_SESSION['Trai_cay'][$i][2] ?></td>
        <td> <a href="task1.php? delete=<?php echo ($i)  ?>">delete</a> <a href="task3.php? edit=<?php echo ($i) ?>">edit</a></td>
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
        
            <table border="1px solod">
                <tr>
                <th>STT</th>
                    <th>name</th>
                    <th>price</th>
                    <th>tỉnh</th>  
                    <th>action</th>     
                </tr>
                

                
                    <?php 

                    Quang()
                   ?>
                   
              
            </table>
            <a href="task2.php"> thêm</a>
                   
                    
                
            
     
    </body>
</html>