<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Bootstrap Dropdown Hover CSS -->

    <link rel="stylesheet" href="css/navbar.css" >
    <link rel="stylesheet" href="css/style.css" >

    <title> Soru Cevap Teması</title>
</head>
<body class="bg">
<!--=========MIDDEL-TOP_BAR============-->
<div class="middle-bar" >
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 text-md-left text-center">
                <img src="img/logo.png" id="logo" alt="logo" >
                <!--<h1 style="color: #7d7b7b;">LOGO</h1>--->
            </div>
            <div class="col-md-4 text-md-right text-center ">
                <form action="">
                    <div class="p-1 mt-1 bg-light rounded rounded-pill  ">
                        <div class="input-group">
                                <input type="search" placeholder="Ara..." aria-describedby="button-addon1" class="form-control border-0 bg-light">
                            <div class="input-group-append">
                                <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search blue-icon"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5  text-md-right text-center ">
                <button class="dropbtn btn-private" ><i class="fas fa-sign-in-alt"></i> Üye Girişi</button>
                <button class="dropbtn login btn-red" ><i class="far fa-user"></i> Üye Ol</button>
                <button class="dropbtn btn-sc ask-question-button" ><i class="fas fa-plus"></i> Soru Sor</button>
            </div>
        </div>
        <!-- end  row -->
    </div>
</div>

<!-- end col -->
<nav class="top-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg" >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="navbar-nav ml-auto mr-auto" >
                    <div >
                        <a href="index.php"><button class="dropbtn"><i class="fas fa-home gri-icon"></i> Anasayfa</button></a>
                    </div>
                    <div >
                        <a href="questions.php"><button class="dropbtn"><i class="fas fa-question-circle"></i> Sorular</button></a>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn dropdown-toggle"><i class="fas fa-bars"></i> Kategoriler</button>
                        <div class="dropdown-content">
                            <a href="#">Yazılım</a>
                            <a href="#">Donanım</a>
                            <a href="#">Linux</a>
                        </div>
                    </div>
                    <div >
                        <a href="users.php"><button class="dropbtn"><i class="fas fa-users"></i> Kullanıcılar</button></a>
                    </div>
                    <div >
                        <a href="badges.php"><button class="dropbtn"><i class="fas fa-trophy"></i> Rozetler</button></a>
                    </div>
                    <div >
                        <a href="blog.php"><button class="dropbtn"><i class="fas fa-book"></i> Blog</button></a>
                    </div>
                    <div >
                        <a href="contact.php"><button class="dropbtn"><i class="fas fa-envelope"></i></i> İletişim</button></a>
                    </div>
                </ul>
            </div>
        </nav>
    </div>
</nav>

