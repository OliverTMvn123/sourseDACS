<?php
require '../../ConnectDB.php';
$sql='SELECT * FROM `garbage`';
$resuft=$conn->query($sql);
$html='<table><tr><td>id</td> <td>Người Gửi</td><td>Người Nhận</td><td> Địa Chỉ</td><td>Email</td><td>Vấn đề liên quan</td><td> Số Điện Thoại</td><td>Nội Dung</td><td>Ảnh</td><td>Thời Gian Gửi</td><td>Chủ Đề </td><tr>';
while($row= $resuft->fetch_assoc())
{
    $html.='<tr><td>'.$row['id'].'</td> <td>'.$row['nguoigui'].'</td><td>'.$row['nguoinhan'].'</td><td> '.$row['diachi'].'</td><td>'.$row['email'].'</td><td>'.$row['vandelienquan'].'</td><td> '.$row['sdt'].'</td><td>'.$row['noidung'].'</td><td>'.$row['anh'].'</td><td>'.$row['sendTime'].'</td><td>'.$row['chude'].' </td><tr>';
}
$html.='</table>';
print_r($html);
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=report.xls');



?>