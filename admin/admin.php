<?php
require('../include/connect.php');


if(isset($_POST['update-home'])){
    $title=$_POST['title'];
    $subtitle=$_POST['subtitle'];
    $infolop=$_POST['infolop'];
    $infomsv=$_POST['infomsv'];

    $imagename =$_FILES['pict']['name'];
    $imgtemp = $_FILES['pict']['tmp_name'];  

    if($imgtemp==''){
      $q = "SELECT * FROM home ";
      $r = mysqli_query($conn,$q);
      $d = mysqli_fetch_array($r);
      $imagename = $d['anhh'];
  }
  move_uploaded_file($imgtemp,"../img/".$imagename);

    $sql = "update home 
            SET title = '$title' , subtitle = '$subtitle', anhh = '$imagename' , infolop ='$infolop', infomsv ='$infomsv'
   
             WHERE id = 1 ";
    
    mysqli_set_charset($conn, 'UTF8');
    $result = mysqli_query($conn,$sql); 
    if($result){
      header('location: update.php#Home');
    }
}


if(isset($_POST['update-about'])){
    $titleb=$_POST['titleb'];
    $Hoten=$_POST['HọTên'];
    $Ngaysinh=$_POST['NgàySinh'];
    $Diachi=$_POST['Địachỉ'];
    $sdt=$_POST['Sốđiệnthoại'];
    $sothich=$_POST['SởThích'];

    $sql2 = "update about 
            SET titleb = '$titleb' , HọTên = '$Hoten' , NgàySinh = '$Ngaysinh' , Địachỉ = '$Diachi' , Sốđiệnthoại = '$sdt' , SởThích = '$sothich'
   
             WHERE Id = 1 ";
    
    mysqli_set_charset($conn, 'UTF8');
    $result2 = mysqli_query($conn,$sql2); 

    if($result2){
      header('location: update.php#About');
    }
}


if(isset($_POST['update-skill'])){
    $titles=$_POST['titles'];
    $subtitles=$_POST['subtitles'];
    $HTML=$_POST['HTML'];
    $CSS=$_POST['CSS'];
    $JAVASCRIPT=$_POST['JAVASCRIPT'];
    $PHP=$_POST['PHP'];
    $ex=$_POST['ex'];
    $sql5 = "update skill 
            SET titles = '$titles' , subtitles = '$subtitles' , HTML = '$HTML' , CSS = '$CSS' , JAVASCRIPT = '$JAVASCRIPT' , PHP = '$PHP'
   
             WHERE Id = 1 ";
    $sqex = " update skilldata SET ex = '$ex'";
    
    mysqli_set_charset($conn, 'UTF8');
    $result5 = mysqli_query($conn,$sql5); 
    $resultex = mysqli_query($conn,$sqex); 

    if($result5&&$resultex){
      header('location: update.php#skills');
    }
}

if(isset($_POST['update-e'])){
  $id =$_POST['id'];
  $Trường=$_POST['Trường'];
  $Khoa=$_POST['Khoa'];
  $Lớp=$_POST['Lớp'];
  $gpa=$_POST['gpa'];
  $Ngayvao=$_POST['Ngayvao'];
  $Ngayra=$_POST['Ngayra'];
  $ghichu=$_POST['ghichu'];
  $imagename =$_FILES['pic']['name'];
  $imgtemp = $_FILES['pic']['tmp_name'];  

  if($imgtemp==''){
    $q = "SELECT * FROM education where id =  $id ";
    $r = mysqli_query($conn,$q);
    $d = mysqli_fetch_array($r);
    $imagename = $d['anh'];
}
move_uploaded_file($imgtemp,"../img/".$imagename);

  $sql6 = "update education 
          SET Trường = '$Trường' , Khoa = '$Khoa' , Lớp = '$Lớp',gpa = '$gpa' , Ngayvao = '$Ngayvao' , Ngayra = '$Ngayra' , ghichu = '$ghichu' , anh = '$imagename'
 
           WHERE id = '$id' ";
  
  mysqli_set_charset($conn, 'UTF8');
  $result6 = mysqli_query($conn,$sql6); 

  if($result6){
    header('location: update.php#Education');
  }
}


if(isset($_POST['update-add'])){
  $id=$_POST['id'];
  $Trường=$_POST['Trường'];
  $Khoa=$_POST['Khoa'];
  $Lớp=$_POST['Lớp'];
  $gpb=$_POST['gpb'];
  $Ngayvao=$_POST['Ngayvao'];
  $Ngayra=$_POST['Ngayra'];
  $ghichu=$_POST['ghichu'];
  $imagename =$_FILES['pic']['name'];
  $imgtemp = $_FILES['pic']['tmp_name'];  

  if($imgtemp==''){
    header('location: form_add.php');
}
move_uploaded_file($imgtemp,"../img/".$imagename);
 $sql8 = "INSERT INTO education
          VALUES('$id','$Trường','$Khoa','$Lớp','$gpb','$Ngayvao','$Ngayra','$ghichu',' $imagename')";
          mysqli_set_charset($conn, 'UTF8');
          $result8 = mysqli_query($conn,$sql8); 
        
          if($result8){
            header('location: update.php#Education');
          }
}



if(isset($_POST['update-s'])){
  $facebook=$_POST['facebook'];
  $instagram=$_POST['instagram'];
  $email=$_POST['email'];

  
  $sql1 = "update socialn 
           SET facebook= '$facebook', instagram= '$instagram',email=' $email'
  
            WHERE id = 1 ";
  
  mysqli_set_charset($conn, 'UTF8');
  $result1 = mysqli_query($conn,$sql1); 

  if($result1){
    header('location: update.php#Social');
  }
}

if(isset($_POST['update-ska'])){
  $id=$_POST['ids'];
  $nameex=$_POST['nameex'];
  $ex=$_POST['ex'];
 $sqlex = "INSERT INTO skilldata
          VALUES('$id','$nameex','$ex')";
          mysqli_set_charset($conn, 'UTF8');
          $resultex = mysqli_query($conn,$sqlex); 
        
          if($resultex){
            header('location: update.php#skills');
          }
}




?>

