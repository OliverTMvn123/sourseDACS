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
        <a href="../yeucau.php"><img id="backicon" src="../backicon.png" alt=""></a>

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
                /*require '../../../homepage/ConnectDB.php';
                //print_r($_POST);
                $id=$_POST['id'];
                $nguoinhan = $_POST["nguoinhan"];
                $chude= $_POST['Chude'];
                $noidung=$_POST['noidung'];
                $vandelienquan=$_POST['vandelienquan'];
                $linkgg=$_POST['link'];
               
                $attachment = basename( $_FILES['attachment']['name']);
                $attachment1= $attachment;
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                date_default_timezone_get();
                $sendtime = getdate();
                $sendtime1 = $sendtime['hours'].':'.$sendtime['minutes'].':'.$sendtime['seconds'].'----'.$sendtime['mday'].'-'.$sendtime['mon'].'-'.$sendtime['year'];
                $endTime1 = $sendtime['mday']+ 14;
                $username=$_COOKIE['username'];
                if(empty($nguoinhan)|| empty($noidung)||empty($linkgg))
                {
                    echo("Bạn nên điền đầy đủ thông tin trước khi gửi");
                }
                else{
                    $linktest=explode('/', $linkgg);
                    print_r($linktest);
                    if($linktest[0] == 'meet.google.com')
                    {

                        //Gửi cho người dùng
                            $sql="INSERT INTO `mailnguoidung`(`ID`, `nguoigui`,`nguoinhan`, `SDT`, `DIACHI`, `noidung`, `vandelienquan`, `Email`, `sendTime`,`anh`,`chude`,`mailID`,`adminName`) 
                            VALUES ('','ADMIN','$nguoinhan','+849122382415','Cổng Phản Hồi Ý Kiến','$noidung Link google meet: $linkgg','$vandelienquan','','$sendtime1','$attachment1','$chude','','$username')";
                                        if($conn->query($sql)===TRUE)
                                        {
                                       
                                            //Gửi thư đó vào garbage 
                                            $sql1="INSERT INTO `garbage`(`id`, `nguoigui`, `nguoinhan`, `diachi`, `email`, `vandelienquan`, `sdt`, `noidung`, `anh`, `mailid`,`sendTime`,`chude`) 
                                            VALUES ('','ADMIN','$nguoinhan','Cổng Phản Hồi Ý Kiến','','$vandelienquan','+84912238241','$noidung Link google meet: $linkgg','$attachment1','','$sendtime1','$chude')";
                                            if($conn->query($sql1))
                                                {       
                                                    $sql2="DELETE FROM `yeucau` WHERE `ID`= $id";  
                                                    if($conn->query($sql2))
                                                    {
                                                        $diachifile= '../../../sendMail/upload/';
                                                        $uploadfile = $diachifile.$attachment;
                                                        if(move_uploaded_file($_FILES['attachment']['tmp_name'],$uploadfile)){
                                                            echo('gửi hình thành công :D');
                                                           
                                                        }
                                                        echo'<script>   window.location="../homthuUser.php"; </script> ';
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
                                                            location="./yeucauGM.php"
                                                        </script>');
                                                    }
                                                    
                                                }
                                                
                                       
                        }
                    }
                    else{
                        echo('<script> 
                            alert("Link Bạn Vừa GỬi Không phù hợp vui lòng nhập link theo định dạng  `meet.google.com/xxx-xxx-xxx`");
                             </script>');
                        echo('<script> 
                             location="./yeucauGM.php"
                         </script>');
                    }
                }             
                    */
                    if((!empty($_POST['ngay'])&& !empty($_POST['gio']))||!empty($_POST['noidung']))
                    {
                        $linktest=explode('/', $_POST['link']);
                        if($linktest[0]=='meet.google.com')
                        {
                            require '../../../homepage/ConnectDB.php';
                            print_r($_POST);
                            $noidung=$_POST['Chude']."--".$_POST['noidung']."Link Google Meet Của bạn: ".$_POST['link']." Vào Thời gian : ".$_POST['gio']."--".$_POST['ngay'];
                            $email=$_POST['email'];
                            setcookie("notification2",$email,time()+8300*10,'/');
                            setcookie("noidung2",$noidung,time()+8300*10,'/');
                            $id=$_POST['id'];
                            
                            //$sql="DELETE FROM `yeucau` WHERE `ID`= $id";
                            echo '<script> 
                            alert("sẽ có một bức thư tự động sẽ gửi cho người dùng");
                            </script>';
                            echo' <script> location="./notification.php"</script>';
                           /*if($conn->query($sql)===true)
                            {
                                echo '<script> 
                                alert("sẽ có một bức thư tự động sẽ gửi cho người dùng");
                                </script>';
                                echo' <script> location="./notification.php"</script>';
                            }
                            else{
                                echo '<script> 
                                    alert("Gửi Phản Hồi Thất Bại");
                                    </script>';
                                }*/
                        }
                        else{
                            echo '<script> 
                            alert("Link Của bạn không phù hợp vui lòng nhập theo định dạng \n meet.google.com/xxx-xxx-xxx");
                            </script>';
                            echo' <script> location="./yeucauGM.php"</script>';
                        }
                        }
                    else{
                            echo '<script> 
                            alert("Bạn Nhập Sai Thông Tin Vui Lòng Kiểm Tra Lại");
                            </script>';
                            echo' <script> location="./yeucauGM.php"</script>';
                        }
                ?>
        </div>
    </main>
</body>
</html>
