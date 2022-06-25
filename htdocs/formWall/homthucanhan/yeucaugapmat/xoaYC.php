<?php

    require '../../../homepage/ConnectDB.php';
    $sql='SELECT * FROM `yeucau`';
    $resuft=$conn->query($sql);
    while( $row= $resuft->fetch_assoc()){
        if($_POST['Id'] == $row['ID'])
        {
          
            $giatrixoa= $row['ID'];
            $sql1=" DELETE FROM `yeucau` WHERE `ID`= $giatrixoa";
      
            if($conn-> query($sql1)== true)
            {
                echo("<script> alert('Bạn Đã Xóa Thành Công ');</script>");
                echo("<script>location ='./yeucauGM.php'</script>");
            }
            else{
                echo("<script> alert('Bạn Đã Xóa Thất Bại ');</script>");
                echo("<script>location ='./yeucauGM.php'</script>");
            }
        }
    
    }

?>