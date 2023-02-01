<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="icon" href="assets/images/teluk2.jpg">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
        padding: 5px;
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
    .banner video {
        position: absolute;
        object-fit: cover;
        width: 100%;
        height: 100%;
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
        color: #ffb700d5;
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
                <h1><b>Daftar Akun</b></h1>
            </div>
            <marquee>
                <h3>~Register Dulu Baru Login...~</h3>
            </marquee>
           
            <div class="card-body">
                <p class="login-box-msg"></p>

                <form class="mx-1 mx-md-4" action="php/fregister.php" method="POST"
                                        enctype="multipart/form-data">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control" name="nama"
                                                    placeholder="Username" />
                                                <label style="color: white;" class="form-label" for="form3Example1c">Your Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="form3Example3c" class="form-control"
                                                    name="email" placeholder="Email" />
                                                <label style="color: white;" class="form-label" for="form3Example3c">Your Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4c" class="form-control"
                                                    name="password" placeholder="Password" />
                                                <label style="color: white;" class="form-label" for="form3Example4c">Password</label>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example3c" />
                                            <label style="color: white;" class="form-check-label" for="form2Example3">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                        </div>

                        <div class="col-0">
                            <button  type="submit" class="btn btn-primary btn-block">Register</button>                    
                            <a style="padding-left: 50%;" href="login.php" class="text-center">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</body>

</html>