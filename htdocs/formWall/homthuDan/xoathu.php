<?php
    require "../ConnectDB.php";
    print_r($_POST);
    $nguoigui=$_POST['nguoigui'];
   
    $id1=$_POST['id1'];
    if($_POST['trangthai']=="Thư")
    {
        echo '<script> alert("Thư của bạn đã được gửi cho cơ quan chức năng bạn không được xóa cho đến khi hoàn thành ")</script>';
        echo '<script> location="./giaodienDan.php"</script>';
    }
    else{
        if($nguoigui!='ADMIN')
        {
        //echo '<script> location="./giaodienDan.php"</script>';
        $id= $_POST["id"];
        $sql="SELECT * FROM `mailnguoidung` WHERE `mailID` = $id";
        $giatri = $conn->query($sql);
        
        while( $row = $giatri->fetch_assoc())
        {
            if($id=$row["mailID"] && $row["nguoigui"]!="ADMIN" )
            {
               $list= Array($row['nguoigui'],$row['nguoinhan'],$row['SDT'],$row['DIACHI'],$row['noidung'],$row['vandelienquan'],$row['Email'],$row['sendTime'],$row['anh'],$row['mailID'],$row['chude']);
            }
        }
        $sql1="INSERT INTO `garbagenguoidung`( `nguoigui`, `nguoinhan`, `diachi`, `email`, `vandelienquan`, `sdt`, `noidung`, `anh`, `mailid`, `sendTime`, `chude`) 
        VALUES ('$list[0]','$list[1]','$list[3]','$list[6]','$list[5]','$list[2]','$list[4]','$list[8]','$list[9]','$list[7]','$list[10]')";
        if($conn->query($sql1))
        {
            $id= $_POST["id"];
            $sql2="DELETE FROM `mailnguoidung` WHERE `mailID`= $id and `nguoigui`= '$nguoigui';";
            print_r($sql2);
            
           if($conn->query($sql2))
            {
                echo '<script> alert("Thư của bạn đã bị xóa bỏ")</script>';
                echo '<script> window.location="./giaodienDan.php"</script>';
            }
            else{
                echo '<script> alert("Thư của bạn không thể xóa")</script>';
                echo '<script> window.location="./giaodienDan.php"</script>';
            }
        }    
         }
         else{
            echo '<script> alert("đây là admin")</script>';
            $id= $_POST["id"];
            $sql="SELECT * FROM `mailnguoidung` WHERE `mailID` = $id ";
            $giatri = $conn->query($sql);
            
            while( $row = $giatri->fetch_assoc())
            {
                if($id==$row["mailID"] && $row["nguoigui"]=="ADMIN" && $row['ID']==$id1)
                {
                   $list= Array($row['nguoigui'],$row['nguoinhan'],$row['SDT'],$row['DIACHI'],$row['noidung'],$row['vandelienquan'],$row['Email'],$row['sendTime'],$row['anh'],$row['mailID'],$row['chude']);
                }
            }
            $sql1="INSERT INTO `garbagenguoidung`( `nguoigui`, `nguoinhan`, `diachi`, `email`, `vandelienquan`, `sdt`, `noidung`, `anh`, `mailid`, `sendTime`, `chude`) 
            VALUES ('$list[0]','$list[1]','$list[3]','$list[6]','$list[5]','$list[2]','$list[4]','$list[8]','$list[9]','$list[7]','$list[10]')";
            if($conn->query($sql1))
            {
                $id= $_POST["id"];
                $sql2="DELETE FROM `mailnguoidung` WHERE `mailID`= $id and `nguoigui`= 'ADMIN' and  `ID`=$id1";
                print_r($sql2);
                
               if($conn->query($sql2))
                {
                    echo '<script> alert("Thư của bạn đã bị xóa bỏ")</script>';
                    echo '<script> window.location="./giaodienDan.php"</script>';
                }
                else{
                    echo '<script> alert("Thư của bạn không thể xóa")</script>';
                    echo '<script> location="./giaodienDan.php"</script>';
                }
         }
    }
}
    
            
?>