<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồi Đáp Thư</title>
    <link rel="stylesheet" href="./hoidap.css">
</head>
<body>
    <header>
        <a href="../homthuUser.php"><img id="backicon" src="../backicon.png" alt=""></a>

        <article id="logo">
            <img id="logocontroll" src="../../../homepage/logo.png" width="80">
        </article>
        <aside>
            <h1 id="tieude1">TRUNG TÂM TRẢ LỜI VÀ GIẢI ĐÁP THẮC MẮC</h1>
            <h2>Nơi giải đáp thắc mắc của bạn</h2>
        </aside>
    </header>
    <div id="main">
        
        <form action="./Send.php" method="post" enctype="multipart/form-data">
            <center><h1 style="color: rgb(171, 46, 46)">Thư mới</h1></center>
            <div class="row">
                
                <!--<select ID="address" name="vande">
                    <option value="Nhà Đất">Nhà Đất</option>
                    <option value="Tài Sản">Tài Sản</option>
                    <option value="Thừa Kế">Thừa Kế</option>
                    <option value="Luật Nhà Nước">Luật Nhà Nước</option>
                    <option value="Luật Hôn Nhân">Luật Hôn Nhân</option>
                    <option value="Khiếu Nại">Khiếu Nại</option>
                    <option value="Khác">Khác</option>
                    </select>
            
                -->
                <?php
                //print_r($_POST);
               echo' <div class="row" >
                 Giải Quyết Vấn Đề Về:   '.$_COOKIE['chuyenve'].'
                 <input type="lable" class="an" name="vande" value='.$_COOKIE['chuyenve'].'>

                </div>';
                 ?>
             </div>
            <?php
         
               echo' <div class="row">
                Người Nhận :
                <input type="text" class="an" name="mailid" value='.$_POST['mailid'].'>
                <input type="text" name="nguoinhan" value='.$_POST['tennguoinhan'].'>
                </div>';
            ?>
            <div class="row">
                <div class="theme">Chủ đề:</div>
                <div class="theme">
                   <input type="text" name="Chude" >
            </div>
            <div class="row">
                <div class="content">Nội dung:</div>
                <div class="content">
                    <textarea style="background-color: aliceblue;" name="noidung" id="" cols="30" rows="10"></textarea>     
            </div>
            <div class="attachment-row">
                <input type="file" class="input-field"
                    name="attachment">
            </div>
            <div onClick="addMoreAttachment();"
                class="icon-add-more-attachemnt"
                title="Add More Attachments">
            </div>
            <div class="row">
                    <button type="submit" name="send">Gửi</button>
            </div>

        </div>
        </form>
    
    <script src="" async defer></script>
</body>
</html>
