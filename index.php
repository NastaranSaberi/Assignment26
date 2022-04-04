<?php

    include "database.php";

    session_start();

    $porsesh_ha = $db->query("SELECT * FROM questions");
    $total = $porsesh_ha->num_rows;

    $_SESSION["user_score"] = 0;

?>


<html lang="fa" dir="rtl" >

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Nastaran Saberi">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.rtl.css">
        <link rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/all.css">
        <title>Quizzer</title>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand " href="#">
                    <img src="Images/Quiz-256.webp" alt="logo" width="30" height="24" class="d-inline-block align-text-top"> &nbsp;&nbsp;Quizzer
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">
                            <img src="Images/real_estate_property_house_home-256.webp" alt="logo" width="22" height="17" class="d-inline-block align-text-top">
                            صفحه اصلی  
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="admin.php">
                        <img src="Images/640_-_Admin_Roles-256.webp" alt="logo" width="22" height="17" class="d-inline-block align-text-top">
                            پنل ادمین
                        </a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="Images/UI_3_-20-256.webp" alt="logo" width="22" height="17" class="d-inline-block align-text-top">
                            آزمون ها
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">آزمون اطلاعات عمومی</a></li>
                            <li><a class="dropdown-item" href="#">آزمون هوش</a></li>
                        </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card">
                        <h5 class="card-header">به آزمونک خوش اومدی😍</h5>
                        <div class="card-body">
                            <p class="card-text">
                                تعداد سولات آزمون

                                <?php echo $total; ?>

                                تا می باشد
                            </p>
                            <p class="card-text">
                                مدت زمان آزمون :

                                <?php echo $total / 2; ?>

                                دقیقه
                            </p>
                            <a href="question.php?x=1" class="btn btn-dark">بززززن بریمممم 👊🏻</a>
                        </div>
                    </div>
                </div>
            <div>
        </div>
   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"> </script>
<script src="js/bootstrap.js"></script>

    </body>
</html>


