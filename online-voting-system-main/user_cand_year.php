<?php
// Start the session at the very beginning of the file
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U VOTE - Year Selection</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        /* Button Styles */
        .btn-special-2 {
            padding: 12px 24px;
            background-color: white;
            color: hsl(243, 80%, 62%);
            border-radius: 6px;
            border: 2px hsl(243, 80%, 62%) solid;
            transition: transform 250ms ease-in-out;
            margin-top: 80px;
        }

        .btn-special-2:hover {
            transform: scale(1.10);
        }

        .btn-special-2:active {
            transform: scale(.9);
        }

        /* Footer Section Styling */
        #footersection {
            margin-top: 80px;
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        /* Navbar Styling */
        .navbar {
            padding: 10px;
            background-color: #343a40;
        }

        .navbar-brand {
            color: white !important;
            font-weight: 600;
            font-size: 1.8rem;
        }

        .navbar-nav .nav-item .nav-link {
            color: white;
            font-weight: 600;
            font-size: 18px;
            text-transform: capitalize;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-item .nav-link:hover {
            background-color: #555;
            border-radius: 5px;
        }

        /* Main Section Styling */
        section {
            padding: 40px 0;
            background-color: #ffffff;
            margin-top: 20px;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 1200px) {
            .navbar-nav .nav-item .nav-link {
                font-size: 16px;
            }
        }

        @media (max-width: 768px) {
            .navbar-nav .nav-item .nav-link {
                font-size: 15px;
                padding: 10px 12px;
            }
        }

        @media (max-width: 576px) {
            .navbar-nav .nav-item .nav-link {
                font-size: 14px;
                padding: 8px 10px;
            }
        }

    </style>
</head>
<body>

<div class="container-fluid" id="cont-3">
    <header id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand" href="index.html">U VOTE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin_dashboard.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="user_suggestion.php">Suggestions</a></li>
                    <li class="nav-item"><a class="nav-link" href="show_contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="user_details_year.php">Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="user_cand_year.php">Candidates</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main Section for Year Selection -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="user_cand.php"><button class="btn-special-2">1<sup>st</sup> Year</button></a>
                </div>
                <div class="col-md-12">
                    <a href="user_cand_2.php"><button class="btn-special-2">2<sup>nd</sup> Year</button></a>
                </div>
                <div class="col-md-12">
                    <a href="user_cand_3.php"><button class="btn-special-2">3<sup>rd</sup> Year</button></a>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- Footer Section -->
<footer id="footersection">
    <p>&copy; 2024 U VOTE. All Rights Reserved.</p>
</footer>

<!-- Bootstrap and jQuery JS -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
