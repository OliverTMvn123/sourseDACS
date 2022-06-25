<?php
require 'ConnectDB.php';
$nguoinhan = $_POST["nguoinhan"];
$address = $_POST["address"];
$noidung = $_POST["noidung"];
$Chude = $_POST["Chude"];
$email = $_POST["email"];
$sdt=$_POST["sdt"];
$nguoigui=$_POST["username"];
$username=$_POST["username"];
$password=$_POST["Password"];
$attachment = basename( $_FILES['attachment']['name']);
$attachment1= $attachment;
date_default_timezone_set("Asia/Ho_Chi_Minh");
date_default_timezone_get();
$sendtime = getdate();
$sendtime1 = $sendtime['hours'].':'.$sendtime['minutes'].':'.$sendtime['seconds'].'    '.$sendtime['mday'].'-'.$sendtime['mon'].'-'.$sendtime['year'];
$endTime1 = $sendtime['mday']+ 14;
$verification=$_POST['verification'].".jpeg";
print_r($_POST);
if(empty($nguoinhan)|| empty($address)||empty($noidung) ||empty($username) ||empty($password) ||empty($sdt) || $verification == ".jpeg" )
{
    echo "<script>
                                var xacnhan= confirm('Bạn cần nhập đầy đủ thông tin trước khi gửi !!');
                                if(xacnhan==true)
                                {
                                    location='./mail.html';
                                }    
                                 </script>";
}
else{
    
    $sql1="SELECT * FROM `taikhoandk`";
            $flag=0;
            $result=$conn->query($sql1);
            while($row = $result->fetch_assoc()){
                if($row['Username']==$username)
                {
                    
                    if($row['Password']==sha1($password) )
                    {
                        $flag=1;
                    }

                }    
            }
            if($flag==1)
            {
            $sql="INSERT INTO `mail`( `vandelienquan`, `nguoigui`, `sdt`, `diachi`,`email`, `chude`, `noidung`, `anh`, `sendTime`,`verification`) 
            VALUES ('$nguoinhan','$nguoigui','$sdt','$address','$email','$Chude','$noidung','$attachment1','$sendtime1','$verification')";
                        if($conn->query($sql)===TRUE)
                        {
                            $sql2="SELECT `mailID` FROM `mail` WHERE `noidung`= '$noidung';";
                            echo($sql2);
                            $result1=$conn->query($sql2);
                            
                            while($row = $result1->fetch_assoc()){
                                $ID=$row['mailID']; 
                                
                            }
                            print_r($ID);
                            $sql1="INSERT INTO `mailnguoidung`(`ID`, `nguoigui`, `nguoinhan`, `SDT`, `DIACHI`, `noidung`, `vandelienquan`, `Email`, `sendTime`, `anh`,`mailID`,`chude`,`verification`) 
                            VALUES ('','$nguoigui','ADMIN','$sdt','$address','$noidung','$nguoinhan','$email','$sendtime1','$attachment1','$ID','$Chude','$verification')";
                            if($conn->query($sql1)===TRUE)
                            {
                                $diachifile= 'upload/';
                                $uploadfile = $diachifile.$attachment;
                                if(move_uploaded_file($_FILES['attachment']['tmp_name'],$uploadfile)){
                                echo('gửi hình thành công :D');
                               
                        }
                                echo "<script>
                                var xacnhan= confirm('Xin Chúc Mừng Bạn Đã Gửi Thư Thành Công!!');
                                if(xacnhan==true)
                                {
                                    location='./mail.html';
                                }    
                                 </script>";
                            }
                           
                            
                        }
                        else
                        {
                            echo("lỗi {$sql}".$conn->error);
                        }
                        
                    }
              else{
                echo "<script>
                var xacnhan= confirm('Tài Khoản Không Tồn Tại Bấm OK Để Quay Lại Gửi Thư!!');
                if(xacnhan==true)
                {
                    location='./mail.html';
                }    
                 </script>";

              } 
   
}

?>
<a href="./mail.html">Quay Lại</a>