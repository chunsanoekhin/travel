<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Agency</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif,'Times New Roman', Times, serif;
        }

        .background-image {
            background-image: url('../img/t3.jpg');
            /* Replace 'background.jpg' with your image path */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .content {
            padding: 20px;
        }

        .dropdown-container {
            margin-top: 20px;
            display: flex;
            flex-direction: row;
            gap: 10px;
        }

        .navbar-custom {
            background-color: whitesmoke;
        }

        .navbar-nav {
            justify-content: center;
            /* Center the nav items */
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-between bg-info">
        <h1 class="ms-5">TRAVEL AGENCY</h1>
        <div class="col-md-6 d-flex justify-content-end">
            <p class="mt-3 mb-2 me-2">FIND US</p>
            <form class="d-flex justify-content-between" role="search">
                <input type="text" id="search" class="form-control mt-2 mb-2 me-2">
                <button class="btn btn-outline-success mt-2 mb-2" type="submit">Search</button>
            </form>
        </div>

    </div>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            TOURS
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">PACKAGE TOURS</a></li>
                            <li><a class="dropdown-item" href="#">CUSTOMIZE TOURS</a></li>
                            <li><a class="dropdown-item" href="#">TOP 10 MOST VISIT PLACES</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#S">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">DISCOVER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">EVENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">REWARDS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="background-image">
        <div class="content">
            <h1>DREAM DESTINATIONS</h1>
            <h3>LET US TAKE YOU TO YOUR</h3>
            <div class="dropdown-container">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ASIA
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">asia 1</a></li>
                    <li><a class="dropdown-item" href="#">asia 2</a></li>
                </ul>

                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ALL COUNTRIES
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">MYANMAR</a></li>
                    <li><a class="dropdown-item" href="#">KOREA</a></li>
                    <li><a class="dropdown-item" href="#">JAPAN</a></li>
                    <li><a class="dropdown-item" href="#">THAILAND</a></li>
                </ul>

                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    YOUR BUDGET($)
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">LOWER $500</a></li>
                    <li><a class="dropdown-item" href="#">ABOVE $500</a></li>
                    <li><a class="dropdown-item" href="#">ABOVE $1000</a></li>
                </ul>

                <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    FIND YOUR TOURS
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">something</a></li>
                    <li><a class="dropdown-item" href="#">something</a></li>
                    <li><a class="dropdown-item" href="#">something</a></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>