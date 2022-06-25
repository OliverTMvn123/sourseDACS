
<?php
$username = $_POST['yourname'];
$pass = $_POST['password'];
$pass1 = $_POST['password-repeat'];
$phone = $_POST['phonenumber'];
$address = $_POST['addr'];
$mail = $_POST['mail'];
echo(" <form action='./reg.php' method='post'>
<input type='text' placeholder='Maxacthuc'name='maxacthuc'  /><br><br> 
<button type='submit' name='submitbtn' value='".$Maxacthuc."'>Đăng Kí</button><br><br>
<input type='text' style='display:none'  placeholder='".$username."'name='yourname'  value='".$username."' /><br><br> 
<input type='text' style='display:none'  placeholder='".$pass."'name='password'  value='".$pass."'  /><br><br> 
<input type='text' style='display:none' placeholder='".$phone."' name='phonenumber'   value='".$phone."' /><br><br> 
<input type='text'  style='display:none' placeholder='".$address."' name='addr'  value='".$address."' /><br><br> 
<input type='text'   placeholder='mail' name='mail'  value='".$mailString."' /><br><br> 
</form>");
$mailString =$mail;
setcookie('Email',$mailString,time()+(86400*30),"/");
echo("<script>location='trunggian.php'</script>");
?>