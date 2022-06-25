<?php
require "../ConnectDB.php";
    echo("<script> var a= confirm('are you sure');
    </script>");

    
    
    
    $username=$_POST['username'];
    //print_r($_POST);
    $mailid=$_POST['mailid'];
        $sql="SELECT * FROM `mailUser` WHERE `mailID` = $mailid";
        $giatri = $conn->query($sql);
        
        while( $row = $giatri->fetch_assoc())
        {
            if($mailid=$row["mailID"] )
            {
               $list= Array($row['nguoigui1'],$row['SDT1'],$row['DIACHI1'],$row['noidung1'],$row['vandelienquan1'],$row['Email1'],$row['sendTime'],$row['anh'],$row['mailID'],$row['chude'],$row['verification']);
            }
        }
        $sql1="INSERT INTO `garbage`( `nguoigui`, `nguoinhan`, `diachi`, `email`, `vandelienquan`, `sdt`, `noidung`, `anh`, `mailid`, `sendTime`, `chude`,`verification`,`status`,`adminName`) 
        VALUES ('$list[0]','ADMIN','$list[2]','$list[5]','$list[4]','$list[1]','$list[3]','$list[7]','$list[8]','$list[6]','$list[9]','$list[10]','spam','$username')";
        if($conn->query($sql1))
        {
          
            $sql2="DELETE FROM `mailUser` WHERE `mailID`= $mailid";
           // print_r($sql2);
            setcookie("notification1",$list[5],time()+8300*10,'/');
            setcookie("noidung1",$list[3],time()+8300*10,'/');
           if($conn->query($sql2))
            {
                echo '<script> alert("Thư của bạn đã bị xóa bỏ '.$username.'");
                                alert("sẽ có một bức thư tự động sẽ gửi cho người dùng");
                </script>';
                echo' <script> location="./notification.php"</script>';
            }
            else{
                echo '<script> alert("Thư của bạn không thể xóa")</script>';
                echo '<script> window.location="./homthuUser.php"</script>';
            }
        }   
         
      
?>