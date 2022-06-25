<?php
 require './ConnectDB.php';
 //print_r($_POST);
 $mailid= $_POST['mailid'];

 $sql= "SELECT * FROM `mailnguoidung` WHERE `mailID`= $mailid";
 $resuft=$conn->query($sql);
 while($row=$resuft->fetch_assoc())
 {   
     if($row['nguoigui']!='ADMIN')
     {
         $list= array($row['nguoigui'],$row['noidung'],$row['Email']);
     }
     if($row['nguoigui']=='ADMIN')
     {
         $adminName= $row['adminName'];
     }
 }    

 
 $sql1="INSERT INTO `yeucau`(`ID`, `nguoigui`, `noidung`, `adminName`,`email`) VALUES ('','$list[0]','Nội Dung Bức Thư :$list[1] \n Tôi Muốn một cuộc hẹn Online','$adminName','$list[2]')";
 if($conn->query($sql1))
 {
    //echo 'success';
 }
?>