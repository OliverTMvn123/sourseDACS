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
    <main id='khuaongoai'>
        <div id='khung'>
            <?php
                require '../../../homepage/ConnectDB.php';
                //print_r($_POST);
                $vande=$_COOKIE['chuyenve'];

                $nguoinhan = $_POST["nguoinhan"];
                $noidung = $_POST["noidung"];
                $Chude = $_POST["Chude"];
                $Mailid= $_POST['mailid'];
                /*$username=$_POST["username"];
                $password=$_POST["Password"];*/

                $attachment = basename( $_FILES['attachment']['name']);
                $attachment1= $attachment;
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                date_default_timezone_get();
                $sendtime = getdate();
                $sendtime1 = $sendtime['hours'].':'.$sendtime['minutes'].':'.$sendtime['seconds'].'    '.$sendtime['mday'].'-'.$sendtime['mon'].'-'.$sendtime['year'];
                $endTime1 = $sendtime['mday']+ 14;
                $username=$_COOKIE['username'];
                if(empty($nguoinhan)|| empty($noidung)   )
                {
                    echo("<script> alert('Bạn nên điền đầy đủ thông tin trước khi gửi');</script>");
                    echo("<script>location='../homthuUser.php'</script>");
                }
                else{
                    

                        //Gửi cho người dùng
                            $sql="INSERT INTO `mailnguoidung`(`ID`, `nguoigui`,`nguoinhan`, `SDT`, `DIACHI`, `noidung`, `vandelienquan`, `Email`, `sendTime`,`anh`,`chude`,`mailID`,`adminName`) 
                            VALUES ('','ADMIN','$nguoinhan','+849122382415','Cổng Phản Hồi Ý Kiến','$noidung','$vande','','$sendtime1','$attachment1','Phản Hồi Ý Kiến Của Bạn','$Mailid','$username')";
                                        if($conn->query($sql)===TRUE)
                                        {
                                       
                                            //Gửi thư đó vào garbage 
                                            $sql1="INSERT INTO `garbage`(`id`, `nguoigui`, `nguoinhan`, `diachi`, `email`, `vandelienquan`, `sdt`, `noidung`, `anh`, `mailid`,`sendTime`,`chude`,`adminName`) 
                                            VALUES ('','ADMIN','$nguoinhan','Cổng Phản Hồi Ý Kiến','','$vande','+84912238241','$noidung','$attachment1','$Mailid','$sendtime1','Phản Hồi Ý Kiến Của Bạn','$username')";
                                            if($conn->query($sql1))
                                            {     
                                                //tìm thư của người dùng vừa được rep
                                                $sql2="SELECT * FROM `mailuser` WHERE `mailID`=$Mailid";
                                                $resuft = $conn->query($sql2);
                                                $row=$resuft->fetch_assoc();
                                                //lưu thư đó vào garbage admin
                                                $giatri= array($row['nguoigui1'],"ADMIN",$row['DIACHI1'],$row['Email1'],$row['vandelienquan1'],$row['SDT1'],$row['noidung1'],$row['anh'],$row['mailID'],$row['sendTime'],$row['chude'],$row['verification'],$row['adminName']);
                                                $sql3="INSERT INTO `garbage`( `nguoigui`, `nguoinhan`, `diachi`, `email`, `vandelienquan`, `sdt`, `noidung`, `anh`, `mailid`,`sendTime`,`chude`,`verification`,`adminName`) 
                                                VALUES ('$giatri[0]','$giatri[1]','$giatri[2]','$giatri[3]','$giatri[4]','$giatri[5]','$giatri[6]','$giatri[7]','$giatri[8]','$giatri[9]','$giatri[10]','$giatri[11]','$giatri[12]')";
                                                
                                                if($conn->query($sql3))
                                                {
                                                    //xóa thư đó ở trong formgiaodien
                                                    $sql4="DELETE FROM `mailuser` WHERE `mailID`=$Mailid";
                                                    
                                                    if($conn->query($sql4))
                                                    {
                                                        $diachifile= '../../../sendMail/upload/';
                                                        $uploadfile = $diachifile.$attachment;
                                                        if(move_uploaded_file($_FILES['attachment']['tmp_name'],$uploadfile)){
                                                            echo('gửi hình thành công :D');
                                                            echo('<script> 
                                                             alert("Bạn đã gửi thư thành công chúc mừng bạn");
                                                        </script>');
                                                        echo('<script> 
                                                            location="../homthuUser.php"
                                                        </script>');
                                                        }
                                                        echo('<script> 
                                                        alert("Bạn đã gửi thư thành công chúc mừng bạn");
                                                   </script>');
                                                   echo('<script> 
                                                   location="../homthuUser.php"
                                                </script>');
                                                       
                                                    }
                                                    else{
                                                        echo('<script> 
                                                        alert("Bạn Đã Gửi Thư Thất Bại Vui Lòng Kiểm Tra Lại Các Thông Tin");
                                                        </script>');
                                                        echo('<script> 
                                                            location="./hoidap.php"
                                                        </script>');
                                                    }
                                                    
                                                }
                                                

                                            }
                                        }
                                        else
                                        {
                                            echo("lỗi {$sql}".$conn->error);
                                        }
                                       
                                    }
                                
                         
                ?>
        </div>
    </main>
</body>
</html>
