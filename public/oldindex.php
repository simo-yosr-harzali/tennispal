<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard Using Bootstrap 5</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex justify-content-between p-4" style="border-bottom: 1px dashed #606164;">
                <div class=" sidebar-logo">
                    <a href="#">TennisPal</a>
                </div>
                <button class="toggle-btn border-0" type="button">
                    <i id="icon" class='fa-solid fa-chevron-right'></i>
                </button>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-layer-group"></i>
                        <span>Task</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="fa-solid fa-bug"></i>
                        <span>Auth</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                Login
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                Register
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                       data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="fa-solid fa-chart-bar"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Two Levels
                            </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Level 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Level 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-bell"></i>
                        <span>Notification</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-gear"></i>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link" id="auth-btn">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <form action="#" class="d-none d-sm-inline-block">
                    <div class="input-group input-group-navbar">
                        <input type="text" class="form-control border-0 rounded-0 pe-0" placeholder="Search..."
                            aria-label="Search">
                        <button class="btn border-0 rounded-0" type="button">
                            <i class='bx bx-search'></i>
                        </button>
                    </div>
                </form>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="images/account.jpg" id="user-avatar" class="avatar img-fluid" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded-0 border-0 shadow mt-3">
                                <a href="#" class="dropdown-item">
                                    <i class='bx bx-data'></i>
                                    <span>Analytics</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="fa-solid fa-gear"></i>
                                    <span>Setting</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class='bx bx-help-circle'></i>
                                    <span>Help Center</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3 class="fw-bold fs-4 mb-3">
                            Player Dashboard
                        </h3>

                        <div class="row my-4 align-items-start justify-content-between">
                            <div class="col-md-5">
                                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" style="max-width: 550px;">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="images/carousel1.jpg" class="d-block w-100 rounded shadow" alt="Tournament 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/carousel2.jpg" class="d-block w-100 rounded shadow" alt="Tournament 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/carousel3.jpg" class="d-block w-100 rounded shadow" alt="Tournament 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/carousel4.jpg" class="d-block w-100 rounded shadow" alt="Tournament 4">
                                        </div>
                                    </div>

                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-3 d-flex justify-content-center align-items-center">
                                <a href="calc.php"
                                   class="btn btn-lg w-100 text-white fw-bold shadow-sm"
                                   style="max-width: 250px; background-color: #293b5f; border: none;">
                                    Open Calculator
                                </a>
                            </div>


                            <div class="col-md-4">
                                <div class="card shadow-sm p-3" style="height: 100%; position: relative;">
                                    <h5 class="fw-bold mb-3">Coach Notes</h5>
                                    <textarea class="form-control mb-3" rows="10" placeholder="Write notes here..."></textarea>

                                    <div class="text-end">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="card shadow">
                                    <div class="card-body py-4">
                                        <h6 class="mb-2 fw-bold">
                                            Player Ranking
                                        </h6>
                                        <p class="fw-bold mb-2">
                                            89
                                        </p>
                                        <div class="mb-0">
                                            <span class="bagde text-success me-2">
                                                +9
                                            </span>
                                            <span class="fw-bold">
                                                Since Last Month
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="card shadow"
                                    style="background-color: #293b5f; color: #FFF; transform: translateY(-10.5px); ">
                                    <div class="card-body py-4">
                                        <h6 class="mb-2 fw-bold">
                                            Current Tournament
                                        </h6>
                                        <p class="fw-bold mb-2">
                                            Monte Carlo
                                        </p>
                                        <div class="mb-0">
                                            <span class="fw-bold">
                                                ATP 1000
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="card shadow">
                                    <div class="card-body py-4">
                                        <h6 class="mb-2 fw-bold">
                                            Next Tournament
                                        </h6>
                                        <p class="fw-bold mb-2">
                                            Madrid Open
                                        </p>
                                        <div class="mb-0">
                                            <span class="fw-bold">
                                                ATP 1000
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-7">
                                <h3 class="fw-bold fs-4 my-3"> Schedule</h3>
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="highlight">
                                            <th scope="col">#</th>
                                            <th scope="col">Tournament</th>
                                            <th scope="col">Points</th>
                                            <th scope="col">Prize Money</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Rome</td>
                                            <td>1000</td>
                                            <td>9 654 090$</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Belgrade</td>
                                            <td>250</td>
                                            <td>530 021$</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Casablanca</td>
                                            <td>250</td>
                                            <td>684 320$</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Roland Garros</td>
                                            <td>2000</td>
                                            <td>14 568 020$</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Shanghai</td>
                                            <td>1000</td>
                                            <td>7 854 329$</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 col-md-5">
                                <h3 class="fw-bold fs-4 my-3">
                                    Reports Overview
                                </h3>
                                <canvas id="bar-chart-grouped" width="800" height="450"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-body-secondary">
                        <div class="col-6 text-start">
                            <a href="#" class="text-body-secondary">
                                <strong>TennisPal</strong>
                            </a>
                        </div>
                        <div class="col-6 text-end text-body-secondary d-none d-md-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#" class="text-body-secondary">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-body-secondary">About</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-body-secondary">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>