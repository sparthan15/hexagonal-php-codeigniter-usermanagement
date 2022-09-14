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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>

    <body>
        <div class="b-example-divider"></div>
        <div class="p-5 mb-1 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Welcome to the admin zone.</h1>
                <p class="col-md-8 fs-4">Users/</p>
                <div class="col-md-7 col-lg-8">
                    <hr class="my-4">

                    <button type="button" class="btn btn-primary">
                        <i class="bi bi-person-plus-fill"></i></i>
                    </button>
                    <hr class="my-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">user id</th>
                                <th scope="col">Company</th>
                                <th scope="col">User name</th>
                                <th scope="col">Created at</th>
                                <th scope="col">update at </th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!$presenter->isEmpty()) {
                                foreach ($presenter->usersList as $user) {
                                    ?>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><?= $user->userId ?></td>
                                        <td><?= $user->companyId ?></td>
                                        <td><?= $user->userName ?></td>
                                        <td><?= $user->createdAt ?></td>
                                        <td><?= $user->updatedAt ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning">
                                                <i class="bi bi-pen"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="b-example-divider">2022</div>
        <script src="../assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        <script src="../assets/bootstrap/form-validation/form-validation.js"></script>
    </body>
</html>