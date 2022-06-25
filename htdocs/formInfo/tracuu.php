<?php
require '../homepage/ConnectDB.php';
echo("<pre>");
//print_r($_POST);
$sql="SELECT * FROM `taikhoandk`";
$result =  $conn->query($sql);
 $i = 0;
while($row = $result ->fetch_assoc())
{
    $list = array($row['Username'],$row['Password'],$row['SDT'],$row['DIACHI'],$row['MAIL']);
    $list1[$i]=$list;
    $i++;
}  
$Username = $_POST['Uname'];
$sdt = $_POST['SDT'];
$Email= $_POST['Email'];
$Address = $_POST['Address'];
$linkgg= $_POST['Linkgg'];
$flag=0;
if(empty($linkgg))
{
    echo( "<script> var a=  confirm('link Google meet của bạn đang trống bạn có chắc khi thực hiện điều này');
    if(a != true){
        location='frmUser.php';
    }
    </script>");
}
$linktest=explode('/', $linkgg);
if($linktest[0]!="meet.google.com")
{
    echo( "<script> alert('Định dạng google meet của bạn không phù hợp vui lòng nhập link meet.google.com ')</script>");
    echo( "<script> location='frmUser.php'</script>");
}
else{


for($j=0 ;$j<count($list1);$j++)
{
    if($list1[$j][0]==$Username)
    {
        print_r($list1[$j][0]);
        $flag=1;
        $sql1= "UPDATE `taikhoandk` SET `SDT`='$sdt',`DIACHI`='$Address',`MAIL`='$Email' ,`link`='$linkgg' Where `Username`='$Username'";
        if($conn->query($sql1)==TRUE)
        {
            echo( "<script> alert('Thành Công')</script>");
            echo( "<script> location='frmUser.php'</script>");
            return;
        }
        else
        {
            echo("lỗi {$sql1}".$conn->error);
        }
       
    }


}
}
if($flag==0)
{
   echo( "<script> alert('Người dùng không tồn tại')</script>");
   echo( "<script> location='frmUser.php'</script>");
}
echo("<pre>");
print_r($list1);

?>