<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CNRP Dashboard</title>
    <link rel="icon" href="https://i.ibb.co/K5CK137/CO1.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f0f0f0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background-color: #007BFF;
            color: #fff;
            border-radius: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 28px;
            color: #fff;
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        .profile-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .username {
            font-weight: bold;
            font-size: 18px;
            margin-top: 10px;
            margin-right: 10px;
            color: #333;
        }

        .logout-button,
        .admin-button {
            border: none;
            border-radius: none;
            padding: 8px 20px;
            margin-top: 10px;
            cursor: pointer;
        }

        .logout-button {
            background-color: #e74c3c;
            color: #fff;
        }
        
        .admin-button {
            background-color: #007BFF;
            color: #fff;
        }

        .container {
            margin-top: 20px;
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .btn {
            margin: 10px 5px;
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            border-bottom: 1px solid #ddd;
        }

        .card-title {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .footer {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(124deg, #3498db, #e74c3c, #2980b9, #2ecc71);
            background-size: 2000% 2000%;
            color: transparent;
            animation-fill-mode: forwards;
            -webkit-background-clip: text;
            -webkit-animation: rgb 30s ease infinite;
            -moz-animation: rgb 30s ease infinite;
            -o-animation: rgb 30s ease infinite;
            animation: rgb 30s ease infinite;
            padding: 30px;
            text-align: center;
            margin-top: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        @keyframes rgb {
            0% { background-position: 0% 82%; }
            50% { background-position: 100% 19%; }
            100% { background-position: 0% 82%; }
        }

        @media (max-width: 767px) {
            h2.text-center {
                font-size: 25px;
            }
            
            .navbar-toggler-icon {
                background-color: #007BFF;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/dashboard"><b>Dashboard</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="username">charith0249#0</span>
                            <img src="https://cdn.discordapp.com/avatars/1158264431504015435/33a248d1b9848d55819b75b92e431645.png" alt="Profile Image" class="rounded-circle profile-image">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right ml-2" aria-labelledby="navbarDropdown">
                            
                            <a class="dropdown-item text-danger" href="/logout">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <br>
    <h2 class="text-center">Welcome charith0249#0!</h2>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img src="https://i.ibb.co/jGrxf8P/1-copy.png" class="card-img-top" alt="Application 1">
                    <div class="card-body">
                        <h5 class="card-title">Whitelist Application <i class="fas fa-user-shield"></i></h5>
                        <a href="/WhitelistApplication" class="btn btn-primary">View Application <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img src="https://i.ibb.co/1rQ8cy3/4-copy.png" class="card-img-top" alt="Application 2">
                    <div class="card-body">
                        <h5 class="card-title">Job Application <i class="fas fa-user-shield"></i></h5>
                        <a href="/JobApplication" class="btn btn-primary">View Application <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img src="https://i.ibb.co/Hpf0VP3/2-copy.png" class="card-img-top" alt="Application 3">
                    <div class="card-body">
                        <h5 class="card-title">Gang Application <i class="fas fa-user-shield"></i></h5>
                        <a href="/GangApplication" class="btn btn-primary">View Application <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img src="https://i.ibb.co/Jx20Pb2/3-copy.png" class="card-img-top" alt="Sponsoring">
                    <div class="card-body">
                        <h5 class="card-title">Sponsor <i class="fas fa-circle-dollar-to-slot fa-beat"></i></h5>
                        <a href="/sponsor" class="btn btn-primary">Sponsoring <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>Created by RNilaweera</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
