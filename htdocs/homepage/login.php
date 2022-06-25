<?php
require 'ConnectDB.php';

if(isset($_POST['submitbtn']))
{
    $Username=$_POST['userName'];
    $pass = $_POST['password'];
    if(empty($Username)|| empty($pass))
    {
          echo('<script> 
          alert("Bạn cần nhập đầy đủ thông tin");
         
          </script>');
          echo('<script>  location="./DACS.html";</script>');

    }
    else{
        $sql="SELECT * FROM `taikhoandk`";
            $flag=0;
            $result=$conn->query($sql);
            while($row = $result->fetch_assoc()){
                if($row['Username']==$Username)
                {
                    
                    if($row['Password']==sha1($pass) )
                    {
                        $flag=1;
                        $haha= $row['per'];
                        $linkgg=$row['link'];
                        $chuyenve=$row['chuyenve'];
                    }
                }    
            }
            if($flag==1)
            {
                echo("dang nhap thanh cong");
                print_r($haha);
                if($haha==1)
                {
                    setcookie('username1',$Username,time()+(86400*30),"/");
                
                    echo'<script>   window.location="../formWall/homthuDan/giaodienDan.php"; </script> ';

                }
                if($haha==2)
                {
                    //echo' <a href="../formWall/frmgiaodien.php">OK
                 //';
                 setcookie('username',$Username,time()+(86400*30),"/");
                 setcookie('linkgg',$linkgg,time()+(86400*30),"/");
                 setcookie('chuyenve',$chuyenve,time()+(86400*30),"/");

                    echo'<script>   window.location="../formWall/frmgiaodien.php"; </script> ';

                  
                }
                if($haha==3)
                {
                   // setcookie('username1',$Username,time()+(86400*30),"/");
                    echo'<script>   window.location="../thongke/thongke.php"; </script> ';

                }
            }
            else{
                echo('<script> 
                alert("Đăng Nhập Thất Bại Vui lòng kiểm tra lại USERNAME hoặc mật khẩu");
                </script>');
                echo('<script> 
                location="./DACS.html";
                </script>');
 
            }
    }
}
?>

