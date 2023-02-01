<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="icon" href="assets/images/icon.png">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">


</head>

<style>

    body {
        margin: 0;
        padding: 0;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(0,0,0,.70);
        padding: 30px;
        width: 400px;
        box-shadow: 0 0 10px 3px #ddd;
    }
    .banner {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    h1 {
        text-align: center;
        font: bold;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: white;
        padding-top: 10px;
        letter-spacing: 5px;
    }
    h3 {
        margin-top: 1%;
        color: #ffd500d5;
        font-size: large;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-weight: normal;
        text-align: center;
    }

</style>
<body>
    <div class="banner">
        <img src="assets/images/jemberbg.jpg" width="10000">
    </div>
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="">
            <div class="card-header text-center">
                <h1><b>LOGIN</b></h1>
            </div>
            <div class="card-body">
            <marquee>
                <h3>~Not Time For love~
                </h3>
            </marquee>
           
            <div class="card-body">
                <p class="login-box-msg"></p>
                <form action="php/flogin.php" method="post">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput"
                        placeholder="name@example.com" name="email" required>
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword"
                        placeholder="Password" name="password" required>
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input"  type="checkbox" value=""
                        id="rememberPasswordCheck">
                            <label style="color: white;" class="form-check-label" for="rememberPasswordCheck">
                            Remember me
                            </label>
                </div>
                    <div class="">
                        <div class="col-10">
                        </div>
                        <!-- /.col -->
                        <div class="col-0">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            <a style="padding-left: 60%;" href="index.php" class="text-center">Kembali</a>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <div class="text-center">
                    <a class="small" href="#" style="text-decoration: none;">Lupa kata
                    sandi?</a>
                </div>
                <div class="text-center">
                    <b>Belum punya akun?</b><a class="small" href="form_register.php"
                    style="text-decoration: none;">Register?</a>
                </div>  
            </div>
        </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>

</html>
