<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="./formdangky.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <style type="text/css">
                #container{
                  width: 100%;
                    position: relative;
                }
                #container img{
                    width: 60%;
                    height: auto;
                    float: left;
                  
                }
                #container canvas{
                    position: absolute;
                    width: 60%;
                    height: auto;
                    
                    top:0;
                    left: 0px;
                    
                }
            </style>
</head>
<body>
        <div class="text-center">
            <a href="../DACS.html"><img id="backicon" src="../../formWall/backicon.png" alt=""></a>
            <img src="../logo.png" alt="" />
        </div>

        <form action="trunggian.php" class="actionForm" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Username" name="yourname" id="yourname" /><br><br>
            <input type="password" placeholder="Mật khẩu" name="password" id="password" /><br><br>
            <input type="password" placeholder="Nhập lại mật khẩu" name="password-repeat" id="password-repeat" /><br><br>
            <input type="number" placeholder="Số điện thoại" name="phonenumber" id="phonenumber" /><br><br>
            <input type="text" placeholder="Địa chỉ" name="addr" id="addr" /><br><br>
            <input type="email" placeholder="@gmail.com" name="mail" id="mail" /><br><br>
            ẢNH CHỤP CMND:   <input type="file" id="input-field" name='CMND'>
            <br><br>
            <button type="submit" name="submitbtn" value="Đăng Kí">Đăng Kí</button>
            
            <div id="container"></div>
        </form>
        

      

            <script src="" async defer></script>
            <script src="https://cdn.jsdelivr.net/npm/face-api.js@0.22.2/dist/face-api.js" 
            integrity="sha256-JOJ7NmVm2chxYZ1KPcAYd2bwVK7NaFj9QKMp7DClews=" crossorigin="anonymous"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
            <script src="./formdangky.js"></script>
            
        
</body>

</html>

<?php
    setcookie("flag",0,time()+(83000*30),"/");
?>