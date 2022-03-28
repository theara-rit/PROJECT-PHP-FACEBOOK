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
                <div class="col-md-6 col-lg-6 col-xl-4 offset-xl-1">
                    <form name="f1" action="../controllers/register_controller.php" class="shadow p-3 mb-5 bg-white rounded" onsubmit="validation()" method = "POST">
                        <!-- Email input -->
                        <div class="form-outline">
                            <label class="form-label" for="form3Example3">Your Name</label>
                            <input type="text" id="form3Example3" name="username" class="form-control form-control-lg"
                            placeholder="Enter Your name" />
                        </div>
                        <div class="form-outline">
                            <label class="form-label mt-2" for="form3Example3">Email address</label>
                            <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
                            placeholder="Enter a valid email address" />
                        </div>
                        <h6 class="mt-3 me-4">Gender: </h6>
                        <div class="form-check form-check-inline mb-0 me-4">
                            <input
                            type="radio"
                            name="gender"
                            class="form-check-input"
                            id="femaleGender"
                            checked
                            value="F"
                            />
                            <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
                        <div class="form-check form-check-inline mb-2 me-4">
                            <input
                            type="radio"
                            name="gender"
                            class="form-check-input"
                            id="maleGender"
                            value="M"
                            />
                            <label class="form-check-label" for="maleGender">Male</label>
                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-3 col-md-12">
                            <label class="form-label" for="form3Example4">Password</label>
                            <input type="password" id="form3Example4" name="password" class="form-control form-control-lg"
                            placeholder="Enter password" />
                        </div>               
                        <div class="text-center text-lg-start pt-2 mx-auto">
                            <button type="submit" class="btn btn-success btn-lg" onclick="validation()">Register</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account! <a href="../views/login.php" class="link-danger">Login</a></p>
                                
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        function validation(){
            var id=document.f1.username.value;
            var ps=document.f1.pass.value;
            var email=document.f1.email.value;
            var gd=document.f1.gender.value;
            if (id.length=="" && ps.length=="" && email.length=="" && gd.length=="" && phone.length==""  && code.length==""){
                alert("User Name and Password fields are empty");
                return false;
            }else{
                if(id.length==""){
                    alert("User Name is empty");
                    return false;
                }
                if(ps.length==""){
                    alert("Password is empty");
                    return false;
                }
            }
        }
    </script>
</body>
</html>