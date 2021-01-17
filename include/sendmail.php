<?php
$email=$_POST['email'];
$mess=$_POST['mess'];
$name=$_POST['name'];
$to      = 'minhthuanpham399@gmail.com';
$subject = "Loi moi phong van tu : $name email : $email";
$message = "$mess";
$headers = 'From:minhthuanpham889@gmail.com' . "\r\n"; 
mail($to, $subject, $message, $headers); 
echo "<script>alert('Cam ơn ban da gui email toi se phan hoi lai som nhat !')</script>";
?>