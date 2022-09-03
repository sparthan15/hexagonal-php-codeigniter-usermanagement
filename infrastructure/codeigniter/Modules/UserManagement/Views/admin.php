<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome to User management</title>
        <meta name="description" content="The small framework with powerful features">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
              rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <link href="../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/bootstrap/form-validation/form-validation.css" rel="stylesheet">
    </head>

    <body>
        <div class="b-example-divider"></div>
        <div class="p-5 mb-1 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Welcome to the admin zone.</h1>
                <p class="col-md-8 fs-4">Please login to access with your user and password</p>
                <div class="col-md-7 col-lg-8">
                    <hr class="my-4">
                    <?php if ($userLogedData == "") { ?>
                        <div class = "alert alert-danger" role = "alert">
                            User/password incorrect or does not exists.
                        </div>
                    <?php } ?>
                    <form class="needs-validation" action="user/login" method="POST" novalidate>
                        <div class="row g-3">
                            <div class="col-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="userName" name="userName" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label for="firstName" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <button class="btn btn-primary btn-lg" type="submit">Login</button>
                    </form>
                </div>

            </div>
        </div>
        <div class="b-example-divider">2022</div>
        <script src="../assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        <script src="../assets/bootstrap/form-validation/form-validation.js"></script>
    </body>
</html>