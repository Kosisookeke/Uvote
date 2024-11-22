<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .card {
            width: 400px;
            margin: 100px auto;
            text-align: center;
            padding: 30px;
            border: 4px #a517ba solid;
            border-radius: 5px;
        }

        .nav-tabs {
            border-bottom: none;
            justify-content: center;
            margin-bottom: 20px;
        }

        .nav-tabs .nav-link {
            border: none;
            color: #a517ba;
            font-weight: bold;
        }

        .nav-tabs .nav-link.active {
            background-color: #a517ba;
            color: white;
            border-radius: 5px;
        }

        .btnSubmit {
            background-color: #a517ba;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .btnSubmit:hover {
            background-color: #860e94;
        }
    </style>
</head>
<body>
    <section class="sec">
        <div class="card">
            <!-- Navigation Tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Create Account</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <!-- Login Section -->
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <h3>Admin Login</h3>
                    <?php 
                        session_start();
                        if (isset($_SESSION['error'])) {
                            echo "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>";
                            unset($_SESSION['error']);
                        }
                    ?>
                    <form action="process_login.php" method="post">
                        <div class="form-group">
                            <input required type="text" class="form-control" name="username" placeholder="Your Email *" />
                        </div>
                        <div class="form-group">
                            <input required type="password" class="form-control" name="password" placeholder="Your Password *" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btnSubmit">Login</button>
                        </div>
                    </form>
                </div>

                <!-- Create Account Section -->
                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                    <h3>Create Account</h3>
                    <form action="process_register.php" method="post">
                        <div class="form-group">
                            <input required type="text" class="form-control" name="name" placeholder="Your Name *" />
                        </div>
                        <div class="form-group">
                            <input required type="email" class="form-control" name="email" placeholder="Your Email *" />
                        </div>
                        <div class="form-group">
                            <input required type="password" class="form-control" name="password" placeholder="Create Password *" />
                        </div>
                        <div class="form-group">
                            <input required type="password" class="form-control" name="confirm_password" placeholder="Confirm Password *" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btnSubmit">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
