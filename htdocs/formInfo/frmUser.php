<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Người dùng </title>
    <link rel="stylesheet" href="./frmUser.css">
</head>
<body>
    <header>
        <a href="../homepage/DACS.html"><img id="backicon" src="../../formWall/backicon.png" alt=""></a>

        <article id="logo">
            <img src="../homepage/logo.png" width="80">
        </article>
        <aside>
            <h1 id="tieude1">TRUNG TÂM TRẢ LỜI VÀ GIẢI ĐÁP THẮC MẮC</h1>
            <h2>Nơi giải đáp thắc mắc của bạn</h2>
        </aside>
    </header>
    <div id="setting">
        <h1 id=tieude> THÔNG TIN NGƯỜI DÙNG</h1>
        <form  id="formnoidung" action="./tracuu.php" method="post">
            <div class="infor" id="thongtin" >
                <label>Username</label>
                <h1></h1>
                <label>Số Điện Thoại</label>
                <h1></h1>
                <label>Email</label>
                <h1></h1>
                <label>Địa Chỉ</label>
                <h1></h1>
                <label>Link Google Meet</label>
            </div>
            <?php
                require '../homepage/ConnectDB.php';
                $sql="SELECT * FROM `taikhoandk`";
                $resuft=$conn->query($sql);
                $Username= $_COOKIE['username'];
                while($row= $resuft->fetch_assoc())
                {
                    if($Username == $row['Username'])
                    {
                        $list = array($row['Username'],$row['SDT'],$row['DIACHI'],$row['MAIL'],$row['link']);
                        $diachi=$row['DIACHI'];
                    }
                }
               
                
                echo('<div class="infor" id="noidungthongtin">
                <input type="text" name="Uname" placeholder="Username" value='.$list[0].'>
                <h1></h1>
                <input type="number" name="SDT" placeholder="SĐT" value='."0".$list[1].'> 
                <h1></h1>
                <input type="text" name="Email" placeholder="EMAIL" value='.$list[3].'> 
                <h1></h1>
                <input type="text" name="Address" placeholder="Địa Chỉ" value='.$diachi.'> 
                <h1></h1>
                <input type="text" name="Linkgg" placeholder="Link Google Meet" value='.$list[4].'> 
                <h1></h1>
                <input id="submitbtn" type="submit" name="submitbtn" value="Xác nhận"> 
            </div>');
               ?>
        </form>
    </div>
</body>
</html>
<?php
                    
 ?>
               