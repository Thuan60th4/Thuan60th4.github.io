<?php
require('connect.php');
$sql = "SELECT * from home,socialn,about,skill,education";
mysqli_set_charset($conn, 'UTF8');
$result = mysqli_query($conn,$sql); 
$rs = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <title>Pham Minh Thuan</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Pham Minh Thuan</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#education" class="nav__link">Education & Experience</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title"><?=$rs['title']?></h1>
                    <p class="about__text"><?=$rs['subtitle']?></p>
                    <p class="about__text"> Lớp : <?=$rs['infolop']?></p>
                    <p class="about__text"> Mã Sinh Viên : <?=$rs['infomsv']?></p>
                </div>

                <div class="home__social">
                    <a href="<?=$rs['facebook']?>" class="home__social-icon"><i class='bx bxl-facebook-circle' ></i></a>
                    <a href="<?=$rs['instagram']?>" class="home__social-icon"><i class='bx bxl-instagram-alt' ></i></a>

                </div>

                <div class="home__img">    
                    <img src="../img/<?=$rs['anhh']?>" alt="">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="../img/profile.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle"><?=$rs['titleb']?></h2>
                        <p class="about__text">Họ Tên : <?=$rs['HọTên']?></p>  
                        <p class="about__text">Ngày Sinh : <?=$rs['NgàySinh']?></p>           
                        <p class="about__text">Địa chỉ : <?=$rs['Địachỉ']?></p>  
                        <p class="about__text">Số điện thoại : 0<?=$rs['Sốđiệnthoại']?></p>  
                        <p class="about__text">Sở thích : <?=$rs['SởThích']?></p>  
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle"><?=$rs['titles']?></h2>
                        <p class="skills__text"><?=$rs['subtitles']?></p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <span class="skills__name">HTML</span>
                            </div>
                            <div class="skills__bar " style="width: <?=$rs['HTML']?>;">
                                
                            </div>
                            <div>
                                <span class="skills__percentage"><?=$rs['HTML']?></span>

                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <span class="skills__name">CSS</span>
                            </div>
                            <div class="skills__bar " style="width: <?=$rs['CSS']?>;">
                                
                            </div>
                            <div>
                                <span class="skills__percentage"><?=$rs['CSS']?></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar " style="width: <?=$rs['JAVASCRIPT']?>;">
                                
                            </div>
                            <div>
                                <span class="skills__percentage"><?=$rs['JAVASCRIPT']?></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <span class="skills__name">PHP</span>
                            </div>
                            <div class="skills__bar " style="width: <?=$rs['PHP']?>;">
                                
                            </div>
                            <div>
                                <span class="skills__percentage"><?=$rs['PHP']?></span>
                            </div>
                        </div>
                      <?php
                        $sqle = "SELECT * from skilldata";
                        mysqli_set_charset($conn, 'UTF8');
                        $resulte = mysqli_query($conn,$sqle); 
                        while($rse = mysqli_fetch_array($resulte)){
        
                      ?>

                        <div class="skills__data">
                            <div class="skills__names">
                                <span class="skills__name"><?=$rse['nameex']?></span>
                            </div>
                            <div class="skills__bar " style="width: <?=$rse['ex']?>;">
                                
                            </div>
                            <div>
                                <span class="skills__percentage"><?=$rse['ex']?></span>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="education">
                <h2 class="section-title">Education & Experience</h2>

                <div class="work__container bd-grid">

                <?php
                $sql1 = "SELECT * from education";
                mysqli_set_charset($conn, 'UTF8');
                $result1 = mysqli_query($conn,$sql1); 
                while($rs1 = mysqli_fetch_array($result1)){

                ?>

                    <div>
                        <h2 class="about__subtitle"><?=$rs1['Trường']?></h2>
                        <p class="about__text">Khoa : <?=$rs1['Khoa']?></p>    
                        <p class="about__text">Lớp : <?=$rs1['Lớp']?></p>   
                        <p class="about__text">Điểm trung bình : <?=$rs1['gpa']?></p>       
                        <p class="about__text">- <?=$rs1['ghichu']?> -</p>  
                    </div>

                    <div class="about__img">
                    <img src="../img/<?=$rs1['anh']?>" alt="">
                     <p class="about__text"> Từ <?=$rs1['Ngayvao']?> đến <?=$rs1['Ngayra']?></p>

                    </div>


            <?php
                }
            ?>



                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <form action="sendmail.php" method="post" class="contact__form">
                        <input type="text" name="name" id="name" placeholder="Name" class="contact__input">
                        <input type="mail" name="email" id="email" placeholder="Email" class="contact__input">
                        <textarea name="mess" id="mess" cols="0" rows="10" class="contact__input"></textarea>
                        <button class="buttonprimary">Send</button>
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Thuan</p>
            <div class="footer__social">
                <a href="<?=$rs['facebook']?>" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="<?=$rs['instagram']?>" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <p>email : <?=$rs['email']?></p>
                <a href="../admin/update.php"><button class="btn btn-primary" type="button">setting</button></a>

            </div>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="main.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
  AOS.init();
</script>
    </body>
</html>