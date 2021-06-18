<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--  CSS  -->




    <!-- Title -->
    <title>Login Page</title>
</head>

<body>

    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="<?php echo URLROOT; ?>/img/login.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-5 pl-3">Annonce Maroc</h1>
                    <form action="<?php echo URLROOT; ?>/AdminController/login" method="POST" onsubmit="validation()" name="form" id="form">
                        <div class="from-row">
                            <div class="col-lg-7">
                                <?php if (isset($data['email_err'])) {
                                    echo $data['email_err'];
                                } ?>
                                <input type="email" placeholder="Email" name="email" id="email" class="form-control email my-3 p-4 <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>">
                                <div class="alert alert-danger custom-alert" style="padding: 5px 10px;margin-bottom: 5px;display: none;">
                                    The username can't be Empty
                                </div>
                            </div>
                        </div>
                        <div class=" from-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="password" name="password" id="password" class=" password form-control my-3 p-4 <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>">
                                <div class="alert alert-danger custom-alert" style="padding: 5px 10px;margin-bottom: 5px;display: none;">
                                    The password can't be Empty
                                </div>
                            </div>
                        </div>
                        <div class=" from-row">
                            <div class="col-lg-7">
                                <button type="submit" class="btn1-secondary mt-3 mb-5" name="submit">Log in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

















    <!-- JavaScript -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="<?php echo URLROOT; ?>/js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="<?php echo URLROOT; ?>/js/validation.js"></script>
</body>

</html>