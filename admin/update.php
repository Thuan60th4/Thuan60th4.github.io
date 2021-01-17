<?php
session_start();
require('../include/connect.php');
if(!isset($_SESSION['admin'])){
  echo "<script>window.location.href='login.php';</script>";                    
}
?>

<?php

$sql = "SELECT * from home,socialn,about,skill,education";
mysqli_set_charset($conn, 'UTF8');
$result = mysqli_query($conn,$sql); 
$rs = mysqli_fetch_array($result);
?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update Thong Tin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />


    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Start Bootstrap</span>
        <span class="d-none d-lg-block">
          <img >
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Home">Home Setting</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#About">About Setting</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills Setting</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Education">Education & Ex Setting</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Social">Social Setting</a>
          </li>

          <li><a href="logout.php"><button class="" type="button">Logout</button></a></li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0 ">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="Home">

      <div class="card card-primary col-lg-12">
      <img src="../img/<?=$rs['anhh']?>" class="col-2"> 
              <form action="admin.php" method="post" enctype="multipart/form-data" >
                <div class="card-body ">

                <div class="form-group">
                    <label for="pict"> Profile Picture</label>
                    <input type="file" class="form-control"  name="pict">
                  </div>
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control"  name="title" value='<?=$rs['title']?>' >
                  </div>
                  <div class="form-group">
                    <label for="subtitle">Subtitle</label><br>
                    <textarea cols="70" name="subtitle"> <?=$rs['subtitle']?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="infolop">Lớp</label>
                    <input type="text" class="form-control"  name="infolop" value='<?=$rs['infolop']?>' >
                  </div>
                  <div class="form-group">
                    <label for="infomsv">Mã Sinh Viên</label>
                    <input type="text" class="form-control"  name="infomsv" value='<?=$rs['infomsv']?>' >
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-home" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
      </div>

      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="About">
      <div class="card card-primary col-lg-12">
              <form action="admin.php" method="post"  >
                <div class="card-body ">
                  <div class="form-group">
                    <label for="titleb">Title</label>
                    <input type="text" class="form-control"  name="titleb" value='<?=$rs['titleb']?>'>
                  </div>

                  <div class="form-group">
                    <label for="HọTên">Họ Tên</label>
                    <input type="text" class="form-control"  name="HọTên" value='<?=$rs['HọTên']?>'>
                  </div>
                  <div class="form-group">
                    <label for="NgàySinh">Ngày Sinh</label>
                    <input type="text" class="form-control"  name="NgàySinh" value='<?=$rs['NgàySinh']?>'>
                  </div>
                  <div class="form-group">
                    <label for="Địachỉ">Địa chỉ</label>
                    <input type="text" class="form-control"  name="Địachỉ" value='<?=$rs['Địachỉ']?>'>
                  </div>
                  <div class="form-group">
                    <label for="Sốđiệnthoại">Số điện thoại</label>
                    <input type="text" class="form-control"  name="Sốđiệnthoại" value='<?=$rs['Sốđiệnthoại']?>'>
                  </div>
                  <div class="form-group">
                    <label for="SởThích">Sở Thích</label><br>
                    <textarea cols="70" name="SởThích"> <?=$rs['SởThích']?></textarea>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-about" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
      </div>


      </section>

        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <a href="addex.php"><button class="btn btn-primary" type="button">Add</button></a>
        <div class="card card-primary col-lg-12">
              <form action="admin.php" method="post"  >
                <div class="card-body ">
                  <div class="form-group">
                    <label for="titles">Title</label>
                    <input type="text" class="form-control"  name="titles" value='<?=$rs['titles']?>' >
                  </div>
                  <div class="form-group">
                    <label for="subtitles">Subtitle</label><br>
                    <textarea cols="70" name="subtitles"> <?=$rs['subtitles']?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="HTML">HTML</label>
                    <input type="text" class="form-control"  name="HTML" value='<?=$rs['HTML']?>'>
                  </div>
                  <div class="form-group">
                    <label for="CSS">CSS</label>
                    <input type="text" class="form-control"  name="CSS" value='<?=$rs['CSS']?>'>
                  </div>
                  <div class="form-group">
                    <label for="JAVASCRIPT">JAVASCRIPT</label>
                    <input type="text" class="form-control"  name="JAVASCRIPT" value='<?=$rs['JAVASCRIPT']?>'>
                  </div>
                  <div class="form-group">
                    <label for="PHP">PHP</label>
                    <input type="text" class="form-control"  name="PHP" value='<?=$rs['PHP']?>'>
                  </div>
                  <?php
                        $sqle = "SELECT * from skilldata";
                        mysqli_set_charset($conn, 'UTF8');
                        $resulte = mysqli_query($conn,$sqle); 
                        while($rse = mysqli_fetch_array($resulte)){
        
                      ?>
                  <div class="form-group">
                    <label for="ex"><?=$rse['nameex']?></label>
                    <input type="text" class="form-control"  name="ex" value='<?=$rse['ex']?>'>
                  </div>
                  <?php
                  }
                  ?>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-skill" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
      </div>

 
         </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="Education">
      <a href="form_add.php"><button class="btn btn-primary" type="button">Add</button></a>
      <div class="container-fluid">
      <div class="row">
      <table style="text-align: center;" class="table table-striped">
      <tr>
          <th>ID</th>
          <th>Trường</th>
          <th>Khoa</th>
          <th>Lớp</th>
          <th>Điểm TB</th>
          <th>Ngày Bắt Đàu</th>
          <th>Ngày Kết Thúc</th>
          <th>Ghi Chú</th>
          <th>Ảnh</th>
          <th>Action</th>
      </tr>
      <?php
        $sqli = "SELECT * from education ";
        mysqli_set_charset($conn, 'UTF8');
        $resulti = mysqli_query($conn,$sqli); 
        while ($rsi = mysqli_fetch_array($resulti)){
          echo "<tr>";
          echo "<td>".$rsi["id"]."</td>";
          echo "<td>".$rsi["Trường"]."</td>";
          echo "<td>".$rsi["Khoa"]."</td>";
          echo "<td>".$rsi["Lớp"]."</td>";
          echo "<td>".$rsi["gpa"]."</td>";
          echo "<td>".$rsi["Ngayvao"]."</td>";
          echo "<td>".$rsi["Ngayra"]."</td>";
          echo "<td>".$rsi["ghichu"]."</td>";
          echo "<td>".$rsi["anh"]."</td>";
          echo "<td >
          <a href='form_update.php?id=".$rsi["id"]."'class='fas fa-edit' ></a>|
          <a href='process_remove.php?id=".$rsi["id"]." 'class='fas fa-trash'></a> </td>";
        }
             ?>
         </table>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="Social">
      <div class="card card-primary col-lg-12">
              <form action="admin.php" method="post"  >
                <div class="card-body ">
                <div class="form-group">
                    <label for="facebook">facebook</label>
                    <input type="text" class="form-control"  name="facebook" value='<?=$rs['facebook']?>'>
                  </div>
                  <div class="form-group">
                    <label for="instagram">instagram</label>
                    <input type="text" class="form-control"  name="instagram" value='<?=$rs['instagram']?>'>
                  </div>
                  <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control"  name="email" value='<?=$rs['email']?>' >
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-s" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
      </div>
      </section>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>
