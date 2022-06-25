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
        <a href="./yeucauGM.php"><img id="backicon" src="../backicon.png" alt=""></a>

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
            <div class="row">
                <div class="theme">Vấn Đề Liên Quan:</div>
                
                <div class="theme">
                   <input type="text" name="vandelienquan" value="Yêu Cầu Cuộc Gọi" >
               
            </div>

            <br><?php
                //print_r($_POST);
               echo' <div class="row">
                Người Nhận :
                <input type="text" class="an" name="email" value='.$_POST['email'].'>
                <input type="text" class="an" name="id" value='.$_POST['Id'].'>
                <input type="text" name="nguoinhan" value='.$_POST['tennguoinhan'].'>
                </div>';
            ?>
            <div class="row">
                <div class="theme">Chủ đề:</div>
                <div class="theme">
                   <input type="text" name="Chude"  value="Hồi Đáp Yêu Cầu Cuộc Gọi">
            </div>
            <div class="row">
                <div class="content">Nội dung:</div>
                <div class="content">
                    <textarea style="background-color: aliceblue;" name="noidung" id="" cols="30" rows="10"></textarea>     
            </div>
            <div class="row">
                <div class="content">Link GOOGLEMEET:</div>
                <div class="content">
                    <?php
                    $linkgg = $_COOKIE['linkgg'];
                    echo('<input type="text" placeholder="meet.google.com/xxx-xxx-xxx" style="background-color: aliceblue;"  name="link" value='.$linkgg.'></input>  ');   
                   ?>
            </div>
            <br>
            <div class="row">
                <div class="content">Thời Gian Gặp Mặt:</div>
                <div class="content">
                    <input type='time' style="background-color: aliceblue;"  name="gio" value=""></input> 
                 <br>   
                    <div class="content">
                    <input type='date'  style="background-color: aliceblue;"  name="ngay" value=""></input>         
                   
            </div>
            <br>
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
