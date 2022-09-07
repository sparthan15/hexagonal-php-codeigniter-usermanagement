<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.101.0">
        <title>Charlies User Management </title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/offcanvas-navbar/">
        <link href="../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, .1);
                border: solid rgba(0, 0, 0, .15);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }

            .bi {
                vertical-align: -.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }
        </style>


        <!-- Custom styles for this template -->
        <link href="../assets/bootstrap/offcanvas-navbar/offcanvas.css" rel="stylesheet">
    </head>
    <body class="bg-light">

        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
            <div class="container-fluid">

                <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <?php if ($logedUserData != "") { ?>
                        <ul class = "navbar-nav me-auto mb-2 mb-lg-0">
                            <li class = "nav-item">
                                <a class = "nav-link active" aria-current = "page" href = "#">Dashboard </a>
                            </li>
                            <li class = "nav-item"><a class = "nav-link ">|</a></li>
                            <li class = "nav-item">
                                <a class = "nav-link " aria-current = "page" href = "#">Users</a>
                            </li>
                            <li class = "nav-item"><a class = "nav-link ">|</a></li>
                            <li class = "nav-item dropdown">
                                <a class = "nav-link dropdown-toggle" href = "#" data-bs-toggle = "dropdown" aria-expanded = "false">Settings</a>
                                <ul class = "dropdown-menu">
                                    <li><a class = "dropdown-item" href = "#">Action</a></li>
                                    <li><a class = "dropdown-item" href = "#">Another action</a></li>
                                    <li><a class = "dropdown-item" href = "#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class = "nav-item"><a class = "nav-link ">|</a></li>
                        </ul>
                    <?php } ?>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <main class="container">

        </main>
        <script src="../assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/bootstrap/offcanvas-navbar/offcanvas.js"></script>
    </body>
</html>
