<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">
    <script src="../../js/login.js"></script>
    <style>
        .signin-end-text {
            margin-left: 20px;
            color: #007BFF;
        }

        .signin-end-text:hover {
            color: green;
            font-weight: 500;
            text-decoration: none;
        }

        .txt {
            font-weight: 600;
        }

        span {
            color: red;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../../index.php"><img src="../../images/icons/logo.png" alt=""></a>
                    <h2 class="text-light logo-name">Idea</h2>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarText">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">Works</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="container">
        <h1 class="text-primary justify-content-center d-flex">Signin</h1>
        <form action="../../serverSite/loginSubmit.php" method="POST" id="loginForm">
            <div class="form-group">
                <label for="loginEmail">Email Address</label>
                <input type="email" class="form-control" id="login-email" name="loginEmail" placeholder="Enter email">
                <span id="erroremail"></span>
            </div>
            <div class="form-group">
                <label for="loginPassword">Password</label>
                <input type="text" class="form-control" id="login-password" name="loginPassword" placeholder="Password">
                <span id="errorpass"></span>
            </div>
            <button type="submit" class="btn btn-outline-primary text-uppercase btn-block txt" onclick="return loginValidation()">Login</button>
        </form><br>
        <div class="row justify-content-center d-flex">
            <p>I have not an account?</p>
            <a class="signin-end-text" href="registration.php">Register now</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>