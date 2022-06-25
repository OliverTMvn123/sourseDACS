<?php
    require './ConnectDB.php';
    //print_r($_POST);
    $noidung=$_POST['noidung'];
    $mailid= $_POST['mailid'];
    $sql= "SELECT * FROM `mailnguoidung` WHERE `mailID`= $mailid";
    $resuft=$conn->query($sql);
    while($row=$resuft->fetch_assoc())
    {   
        if($row['nguoigui']!='ADMIN')
        {
            $list= array($row['vandelienquan'],$row['nguoinhan'],$row['nguoigui'],$row['SDT'],$row['DIACHI'],$row['Email'],$row['noidung'],$row['sendTime'],$row['ID'],$row['mailID'],$row['chude'],$row['anh'],$row['adminName'],$row['verification']);
        }
        if($row['nguoigui']=='ADMIN')
        {
            $adminName= $row['adminName'];
        }
    }    

    /*$sql1="INSERT INTO `mailuser`(`ID1`, `nguoigui1`, `SDT1`, `DIACHI1`, `Email1`, `noidung1`, `vandelienquan1`, `sendTime`, `chude`, `anh`, `mailID`, `adminName`, `verification`) 
    VALUES ('','$list[2]','$list[3]','$list[4]','$list[5]','$list[6]','$list[0]','$list[7]','$list[10]','$list[11]','$list[9]','$list[12]','')";*/
    $sql1="INSERT INTO `mailuser`(`ID1`, `nguoigui1`, `SDT1`, `DIACHI1`, `Email1`, `noidung1`, `vandelienquan1`, `sendTime`, `chude`, `anh`, `mailID`, `adminName`, `verification`) 
    VALUES ('','$list[2]','$list[3]','$list[4]','$list[5]','$noidung \n Nội dung bức thư phản hồi :$list[6]','$list[0]','$list[7]','Phản Hồi Ý Kiến','$list[11]','$list[9]','$adminName','$list[13]')";
    if($conn->query($sql1))
    {
        //echo 'success';
    }
?>