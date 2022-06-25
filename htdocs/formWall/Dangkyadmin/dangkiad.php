<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="./dangkiad.css">

</head>
<body>
        <div class="text-center">
            <a href="../frmgiaodien.php"><img id="backicon" src="../../formWall/backicon.png" alt=""></a>
            <img src="../../homepage/logo.png" alt="" />
        </div>

        <form action="trunggian.php" class="actionForm" method="post">
            <input type="text" placeholder="Username" name="yourname" id="yourname" /><br><br>
            <input type="password" placeholder="Mật khẩu" name="password" id="password" /><br><br>
            <input type="password" placeholder="Nhập lại mật khẩu" name="password-repeat" id="password-repeat" /><br><br>
            <input type="number" placeholder="Số điện thoại" name="phonenumber" id="phonenumber" /><br><br>
            <input type="text" placeholder="Địa chỉ" name="addr" id="addr" /><br><br>
            <input type="email" placeholder="@gmail.com" name="mail" id="mail" /><br><br>
            <button type="submit" name="submitbtn" value="Đăng Kí">Đăng Kí</button>
        </form>
       
            
        
</body>

</html>
