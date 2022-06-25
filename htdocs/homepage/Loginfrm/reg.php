<?php
require 'ConnectDB.php';
$username = $_POST['yourname'];
$pass = $_POST['password'];
$phone = $_POST['phonenumber'];
$address = $_POST['addr'];
$mail = $_POST['mail'];
$maxt=$_POST['maxacthuc'];
$madagui= $_POST['submitbtn'];
$cmnd = $_POST['cmnd'];
//echo("<pre>");
//print_r($_POST);

 if($maxt == $madagui)
{
    $sql = "INSERT INTO `taikhoandk`(`Username`, `Password`, `SDT`, `DIACHI`, `MAIL`,`per`,`CMND`) 
                VALUES ('$username',sha1('$pass'), '$phone', '$address', '$mail','1','$cmnd')";
                if($conn->query($sql)==TRUE)
                {
                    echo("<script> alert('Đăng Kí Thành Công Bạn Sẽ Được Quay Lại Trang Chủ !!');</script>");
                }
                else
                {
                    echo("lỗi {$sql}".$conn->error);
                }
            
            }
  else{
      echo("<script> alert('Mã Xác Thực Của Bạn Không Đúng !! \n Vui lòng Đăng Kí Lại');</script>");
      echo("<script> location='./formdangky.php' </script>");
  }          
?>
<!DOCTYPE html>
<html lang="en" style="background-image:url('../../Background.jpg')">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align:center">
        
        <h1> Đăng Ký Tài Khoản Cổng Phản Hồi Thông Tin Thành Công</h1>
    
    <a style="text-align:center ; font-size:40px" href="./formdangky.php">Quay Lại </a>
    </div>
</body>
</html>

