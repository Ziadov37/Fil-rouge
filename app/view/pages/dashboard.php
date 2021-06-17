<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="<?php echo URLROOT ?> /css/style.css ?">
    <title>Dashboard Admin</title>
</head>

<body>
    <!-- header -->

    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class=" container-fluid ">
            <a class=" navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex  justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/StudentController/showStudent">STUDENT</a>
                    <a class="nav-link" href="<?php echo URLROOT; ?>/TeacherController/showTeacher">TEACHER</a>
                    <form action="logout.php" method="POST">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/AdminController/logout"><button name="logout"
                                type="submit">Logout</button> </a>
                    </form>
                </div>
            </div>
        </div>
    </nav>



    <div class="container">
        <div class="title text-center my-5">
            <h1 class="my-4">ADMIN</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo minus dolorum voluptatum, ullam
                facere sint fugit sit eaque aliquam odio quam incidunt error. Error, quae aspernatur veritatis
                assumenda laboriosam pariatur?
            </p>
        </div>




        <!-- <div class="test"> -->
        <div class="row  my-6" style="justify-content:space-around">

            <div class="col-md-2">

                <div class="card text-center shadow " style="width: 15rem;">
                    <img src="<?php echo URLROOT; ?>/img/prof.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">TEACHERS</h5>
                        <p class="card-text text-center"></p>
                        <!-- Scrollable modal -->
                        <!-- Button trigger modal -->
                        <a href="<?php echo URLROOT; ?>/TeacherController/showTeacher"><button type="button"
                                class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                click to show teachers
                            </button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

                <div class="card text-center shadow " style="width: 15rem;">
                    <img src="<?php echo URLROOT; ?>/img/class.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PARENT</h5>
                        <p class="card-text text-center"></p>
                        <!-- Scrollable modal -->
                        <!-- Button trigger modal -->
                        <a href="<?php echo URLROOT; ?>/ParentController/showParent"><button type="button"
                                class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                click to show Parent
                            </button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

                <div class="card text-center shadow " style="width: 15rem;">
                    <img src="<?php echo URLROOT; ?>/img/student.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">STUDENTS</h5>
                        <p class="card-text text-center"></p>
                        <!-- Scrollable modal -->
                        <!-- Button trigger modal -->
                        <a href="<?php echo URLROOT; ?>/StudentController/showStudent"><button type="button"
                                class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                click to show students
                            </button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

                <div class="card text-center shadow " style="width: 15rem;">
                    <img src="<?php echo URLROOT; ?>/img/sta.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CLASS</h5>
                        <p class="card-text text-center"></p>
                        <!-- Scrollable modal -->
                        <!-- Button trigger modal -->
                        <a href=" <?php echo URLROOT; ?>/ClassController/showClass"><button type="button"
                                class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                click to show Class
                            </button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

                <div class="card text-center shadow " style="width: 15rem;">
                    <img src="<?php echo URLROOT; ?>/img/sta.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">STATISTICS</h5>
                        <p class="card-text text-center"></p>
                        <!-- Scrollable modal -->
                        <!-- Button trigger modal -->
                        <a href=" <?php echo URLROOT; ?>/StatController/showStat"><button type="button"
                                class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                click to show statics
                            </button></a>
                    </div>
                </div>
            </div>


</body>

</html>