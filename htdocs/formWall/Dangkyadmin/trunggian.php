<?php
$username = $_POST['yourname'];
$pass = $_POST['password'];
$pass1 = $_POST['password-repeat'];
$phone = $_POST['phonenumber'];
$address = $_POST['addr'];
$mail = $_POST['mail'];
$mailString =$mail;
//print_r($_POST);
setcookie('Email',$mailString,time()+(86400*30),"/");


if(isset($_POST['submitbtn']))
{

    if(empty($username) || empty($pass)|| empty($pass1 )|| empty($phone)|| empty($address)|| empty($mail))
    {
        echo '<script>alert("Bạn cần nhập đẩy đủ thông tin");</script>';
        echo '<script>location="./dangkiad.php"</script>';
        return;
    }
    else{
        
        
        if($pass != $pass1)
        {
            echo '<script>alert("Mật Khẩu và Nhập lại mật khẩu không khớp");</script>';
            echo '<script>location="./dangkiad.php"</script>';
        }
        else{
            include './verification.php';
            
            echo(" <form action='./reg.php' method='post'>
            <input type='text' placeholder='Maxacthuc'name='maxacthuc'  /><br><br> 
            <button type='submit' name='submitbtn' value='".$Maxacthuc."'>Đăng Kí</button><br><br>
            <input type='text' class='an' placeholder='".$username."'name='yourname'  value='".$username."' /><br><br> 
            <input type='text' class='an' placeholder='".$pass."'name='password'  value='".$pass."'  /><br><br> 
            <input type='text' class='an' placeholder='".$phone."' name='phonenumber'   value='".$phone."' /><br><br> 
            <input type='text' class='an' placeholder='".$address."' name='addr'  value='".$address."' /><br><br> 
            <input type='text' class='an' placeholder='mail' name='mail'  value='".$mailString."' /><br><br> 
            </form>");
        }
    }
    
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
        
        <h1> Đăng Ký Tài Khoản Cổng Phản Hồi Thông Tin</h1>
    
    
    </div>
</body>
</html>
