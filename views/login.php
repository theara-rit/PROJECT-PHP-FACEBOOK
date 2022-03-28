<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <section class="vh-100 container mt-5">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-6 col-lg-6 col-xl-6">
                    <h1 class="text-primary fs-2" style="font-size: 90px;">Facebook</h1>
                    <p style="font-size: 30px;">Connect with friend and the world around you on Facebook.</p>
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form name="f1" action="../controllers/login_controller.php" class="shadow p-3 mb-5 bg-white rounded" onsubmit="validation()" method = "POST">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label mb-2" for="form3Example3">User Name</label>
                        <input type="text" id="form3Example3" name="username" class="form-control form-control-lg"
                        placeholder="Enter a valid email address" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <label class="form-label mb-2" for="form3Example4">Password</label>
                        <input type="password" id="form3Example4" name="password" class="form-control form-control-lg"
                        placeholder="Enter password" />
                    </div>
                    <div class="text-center text-lg-start mt-4 pt-2 ">
                        <button type="submit" class="btn btn-success btn-lg col-12">Login</button>
                    </div>
                    <div class="text-center mt-3">
                        <a href="register.php" class="link-danger"><button type="button" class="btn btn-primary">Create new account</button></a>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </section>
</body>
</html>