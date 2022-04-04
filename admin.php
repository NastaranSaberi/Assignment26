<?php

    include "database.php";

    $porsesh_ha = $db->query("SELECT * FROM questions");
    $pasokh_ha = $db->query("SELECT * FROM answers");
?>


<html lang="fa" dir="rtl" >

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Nastaran Saberi">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.rtl.css">
        <link rel="stylesheet" href="css/style.css">
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
                <div class="col ">
                    <div class="card ">
                        <div class="card-body">
                        به پنل ادمین خوش اومدی ☘️
                        <br>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <img src="Images/add_green.webp" alt="logo" width="25" height="20" class="d-inline-block align-text-top">
                            افزودن سوال جدید
                        </button>
                        

                        <!-- Modal -->
                        <div class="modal fade " style=" background-color: #CCD1C7;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog ">
                                <div class="modal-content bg-dark text-light p-3">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">سوال جدید</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" >
                                    <form method="post" action="new_question.php">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">متن سوال</label>
                                            <input type="text"  name="question" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" style="border-radius: 30px;box-shadow:inset -4px -4px 4px #fff,inset  4px 4px 4px  rgba(0,0,0,0.3);">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">گزینه ها</label>
                                            <ol id="my_list">

                                                <input type="text" name="answer[]"  multiple="multiple" value="1_" class="form-control inputs" id="exampleInputEmail1" aria-describedby="emailHelp" > 
                                                <input type="text" name="answer[]"  multiple="multiple" value="2_"  class="form-control inputs" id="exampleInputEmail1" aria-describedby="emailHelp" > 
                                                <input type="text" name="answer[]"  multiple="multiple" value="3_"class="form-control inputs" id="exampleInputEmail1" aria-describedby="emailHelp" > 
                                                <input type="text" name="answer[]"  multiple="multiple" value="4_"class="form-control inputs" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                                            
                                            </ol>
                                            <button type="button" class="mt-3 bg-light btns" onclick="bache_jadid()">+</button>
                                            <button type="button" class="bg-light btns" onclick="remove_jadid()" >-</button>
                                            
                                            <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label mt-3">پاسخ درست</label>
                                            <input type="text"  name="is_true" class="form-control inputs" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                            </div>

                                            
                                        </div>
                                        <button type="submit" class="btn btn-light mt-3" style="margin-right:150px;width:130px;">فرستادن</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
 
   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"> </script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>

    </body>
</html>



