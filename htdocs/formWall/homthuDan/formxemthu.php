<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title> GIAO DIỆN NGƯỜI DÙNG </title>
    <link rel="stylesheet" href="./formxemthu.css">


</head>

<body>
    <header>
        <div id="logo1" s>
            <img id="logo" src="../../homepage/logo.png" alt="">
        </div>
        <div id="title1">
            <h1> Cổng Tiếp Nhận Phản Hồi Ý Kiến Của Người Dân</h1>
        </div>
        <div style="float:right" id="avatarcontroll">
            <a id="avatarcontroll1" href="../../formNguoidung/frmUser.php"> <img id="avatar"
                    src="data:image/jpeg;base64,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"
                    alt=""></a>
        </div>
        <div class="clear"></div>
    </header>
    <main>
        <div id=nav>

            <head>
                <h1 align="center" style='border-bottom: 3px solid black'> Thư đã gửi </h1>
                <div id='back'>
                    <a href="./giaodienDan.php"><img id='backicon' src="../backicon.png" alt=""></a>
                </div>
            </head>
            
            <hr>
            <div id="Select-Mail">
                <?php
                    require '../../homepage/ConnectDB.php';
                        //print_r($_POST);
                    if($_POST['tennguoidung']!= 'ADMIN')
                    {
                        $sql='SELECT * FROM `mailnguoidung`';
                        $result=$conn->query($sql);
                            $i=0;
                        while($row= $result->fetch_assoc())
                        {
                           
                               if($_POST['id']==$row['mailID'] && $row['nguoigui']!='ADMIN')
                               {
                                    echo'
                                    
                                    <div class="khung">
                                        <h4>Người gửi : '.$row['nguoigui'].'</h4>
                                    </div>
                                    <div  class="khung">
                                        <h4>Chủ Đề Thắc Mắc:  '.$row['vandelienquan'].'</h4>
                                    </div >
                                    <div  class="khung">
                                        <h4>Thời gian gửi :'.$row['sendTime'].' </h4>
                                    </div>
                                    <div  class="khung">
                                        <h4>Số Điện Thoại :0'.$row['SDT'].' </h4>
                                    </div>
                                    <div class="khung">
                                        <h4>Địa Chỉ : '.$row['DIACHI'].' </h4>
                                    </div>
                                    <div class="khung">
                                    <h4>Email : '.$row['Email'].'</h4>
                                    </div>
                                    <div class="khung">
                                        <h4>Chủ Đề : '.$row['chude'].'</h4>
                                    </div>
                                    <div class="khung">
                                        <h4>Nội Dung :'.$row['noidung'].' </h4>
                                    </div>
                                    <div class="khung">
                                        <h4>Ảnh :'.$row['anh'].'</h4>
                                        <img id=anh src="../../sendMail/upload/'.$row['anh'].'" alt="">
                                        <img id=anh src="../../sendMail/camera/upload/'.$row['verification'].'" alt="">
                                    </div>
                                ';
                               }
                        }
                    }
                    else{
                        $sql='SELECT * FROM `mailnguoidung`';
                        $result=$conn->query($sql);
                        while($row = $result->fetch_assoc())
                        {
                            if($_POST['id']==$row['mailID'] && $row['nguoigui']!='ADMIN')
                            {
                                $email=explode('@', $row['Email']); 
                            }
                            
                            if($_POST['id']==$row['mailID'] && $row['nguoigui']=='ADMIN')
                            {
                                echo ('
                                <div id="phanhoibtn">
                                        <input type="button" id="phanhoibtn1" class="phanhoibtn1" value="Phản Hồi"></input>
                              
                               
                                        <input type="button" id="phanhoibtn2" class="phanhoibtn2" value="Yêu cầu một cuộc gặp Online"></input>
                                </div>
                                <script  type="text/javascript">
                                         
                                        $(document).ready(function(){
                                            $(".phanhoibtn1").click(function(e){
                                            
                                            e.preventDefault();
                                            var a = confirm("Chúng Tôi Sẽ Gửi 1 mail đến admin về việc muốn nhận được phản hồi thêm bạn có đồng ý chứ? ");
                                            var $mailid='.$_POST['id'].';
                                           
                                            if(a!=true)
                                            {
                                                return;
                                            }
                                            else{
                                                var b = prompt(" Bạn Hãy Nhập Nội Dung Bạn Còn Chưa Hiểu Hay Còn Vấn Đề Gì Cần Giải Quyết Thêm");
                                                if(b!= null)
                                                {
                                                    var $noidung= b;
                                                }
                                                
                                            }
                                            
                                            $.ajax({
                                                url:"Phanhoi.php",
                                                type: "post",
                                                dataType: "html",
                                                data:{
                                                    mailid: $mailid,
                                                    noidung: $noidung
                                                }
                                                }).done(function(ketqua){
                                                    $(".test").html(ketqua);
                                                });
                                            });
                                            
                                        });
                                    </script>
                                <script  type="text/javascript">
                                       
                                        $(document).ready(function(){
                                            $(".phanhoibtn2").click(function(e){
                                            e.preventDefault();
                                           
                                            var $mailid='.$_POST['id'].';
                                        
                                            var a = confirm("Bạn muốn yêu cầu một cuộc gọi trực tiếp. Chúng tôi sẽ gửi một yêu cầu đến với admin đã xử lý thư của bạn. Bạn sẽ nhận được thông tin trong thời gian sớm nhất ");
                                            if(a!=true)
                                            {
                                                return;
                                            }
                                            $.ajax({
                                                url:"yeucau.php",
                                                type: "post",
                                                dataType: "html",
                                                data:{
                                                    mailid: $mailid,
                                        
                                                }
                                                }).done(function(ketqua){
                                                    $(".test").html(ketqua);
                                                });
                                            });
                                        });
                                                
                            
                                </script>
                                 <div class="test"></div>
                                ');

                              
                            }
                            if($_POST['id']==$row['mailID'] && $row['nguoigui']!='ADMIN')
                            {
                                echo '
                                <div class="khung">
                                        <h4>Nội dung Thư phản hồi : '.$row['noidung'].'</h4>
                                       
                                    </div>
                                    <br>
                                    <br>';
                            } 

                            if($_POST['id']==$row['mailID'] && $row['nguoigui']=='ADMIN')
                            {
                                echo'
                            <div class="khung">
                                <h4>Người gửi : ADMIN</h4>
                            </div>
                            <div  class="khung">
                                <h4>Chủ Đề Thắc Mắc:  '.$row['vandelienquan'].'</h4>
                            </div >
                            <div  class="khung">
                                <h4>Thời gian gửi :'.$row['sendTime'].' </h4>
                            </div>
                            <div  class="khung">
                                <h4>Số Điện Thoại :không </h4>
                            </div>
                            <div class="khung">
                                <h4>Địa Chỉ : Cổng Phản Hồi Ý Kiến  </h4>
                            </div>
                            <div class="khung">
                            <h4>Email : Không </h4>
                            </div>
                            <div class="khung">
                                <h4>Chủ Đề : Phản Hồi Ý Kiến Bạn Đã Gửi</h4>
                            </div>
                            <div class="khung">
                                <h4>Nội Dung :'.$row['noidung'].' </h4>
                            </div>
                            <div class="khung">
                                <h4>Ảnh :'.$row['anh'].'</h4>
                                <img id=anh src="../../sendMail/upload/'.$row['anh'].'" alt="">
    
                            </div>
                        '; 
                                 
                            
                            }
                        }
                    }
                            ?>
                </table>
               
            </div>
           
        </div>

        <div class="clear"></div>
    </main>
    <footer>

    </footer>
</body>

</html>