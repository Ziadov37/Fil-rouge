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
    <link rel="stylesheet" href="">
    <title>Dashboard Admin</title>
</head>

<body>
    <!-- header -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex  justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/TeacherController/showTeacher">TEACHER</a>
                    <a class="nav-link" href="<?php echo URLROOT; ?>/AdminController/showDashboard">ADMIN</a>
                    <a class="nav-link" href="#">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <form action="<?php echo URLROOT; ?>/TeacherController/update/<?php echo $data->id; ?>" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">fullname:</label>
            <input type="text" name="fullname" class="form-control" value="<?= $data->fullname;  ?>"
                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">gender</label>
            <input type="text" name="gender" class="form-control" value="<?= $data->gender;  ?>"
                id="exampleInputPassword1" placeholder="gender">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">metier</label>
            <input type="text" name="matiere" class="form-control" value="<?= $data->matiere;  ?>"
                id="exampleInputPassword1" placeholder="Matiere">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">phone</label>
            <input type="text" name="phone" class="form-control" value="<?= $data->phone;  ?>"
                id="exampleInputPassword1" placeholder="Phone">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">class</label>
            <input type="text" name="class" class="form-control" value="<?= $data->idclass;  ?>"
                id="exampleInputPassword1" placeholder="class">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>