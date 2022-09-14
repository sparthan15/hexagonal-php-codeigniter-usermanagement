<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add new user</title>
        <meta name="description" content="The small framework with powerful features">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
              rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <link href="../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/bootstrap/form-validation/form-validation.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>

    <body>
        <div class="b-example-divider"></div>
        <div class="p-5 mb-1 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">New User</h1>
                <div class="col-md-7 col-lg-8">
                    <hr class="my-4">

                    <button type="button" class="btn btn-primary">
                        <i class="bi bi-person-plus-fill"></i></i>
                    </button>
                    <hr class="my-4">
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="b-example-divider">2022</div>
            <script src="../assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

            <script src="../assets/bootstrap/form-validation/form-validation.js"></script>
    </body>
</html>