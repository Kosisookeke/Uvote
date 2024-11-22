<?php 
include("header.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f4f7f6;
            color: #333;
            line-height: 1.6;
            font-size: 16px;
        }

        h1 {
            font-size: 2.5rem;
            color: #5f1178;
            margin-bottom: 30px;
        }

        p {
            font-size: 1.125rem;
            line-height: 1.8;
            margin-bottom: 20px;
            color: #555;
        }

        ul {
            list-style-type: none;
            padding-left: 0;
        }

        li {
            font-size: 1.125rem;
            margin-bottom: 10px;
            color: #555;
        }

        li:before {
            content: "\2022";
            color: #5f1178;
            font-size: 2rem;
            margin-right: 10px;
        }

        /* Container Styles */
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 30px;
        }

        /* Section Styles */
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 600;
            color: #5f1178;
            margin-top: 50px;
            margin-bottom: 20px;
        }

        .section-content {
            margin-bottom: 40px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .section-content p {
            color: #555;
        }

        /* Mobile Responsiveness */
        @media screen and (max-width: 768px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 2rem;
            }

            p, li {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="section-title">About</h1>
            </div>
        </div>
        <div class="section-content">
            <p>
                Uvote Online Voting System aims to provide a transparent and secure method for conducting elections. The system allows user registration, voting, and results analysis. It addresses issues related to election fraud, ensuring that votes are accurately recorded and counted.
            </p>
            <p>
                The system also protects the integrity of your vote by preventing voters from voting multiple times. Many secure voting platform vendors provide supportive vote management consulting services that help organizations design and implement their voting procedures.
            </p>
            <p>
                These services help organizations save time, stick to best practices, and meet internal requirements and/or external regulations, such as third-party vote administration needs.
            </p>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <h1 class="section-title">Who can benefit from them?</h1>
            </div>
            <div class="section-content">
                <p>
                    The short answer is: anyone who makes decisions. Consistent, structured decision-making needs span across organization types and industries.
                </p>
                <p>
                    Individuals in organizations ranging from award shows, to law firms, to corporations, to schools will find value in online voting. Simply put - if a group of people needs to make a decision, and that decision requires input from others, an online voting system will be of value.
                </p>
            </div>

            <div class="section-content">
                <ul>
                    <li>Maintains your vote’s integrity</li>
                    <li>Provides an easy vote administrator experience</li>
                    <li>Creates a pleasant experience for your voters</li>
                    <li>Has mechanisms for adapting to unique votes</li>
                    <li>Includes analytics, reporting, and auditing capabilities</li>
                </ul>
            </div>
            
            <div class="section-content">
                <ul>
                    <li>Maintains your vote’s integrity</li>
                    <li>Provides an easy vote administrator experience</li>
                    <li>Creates a pleasant experience for your voters</li>
                    <li>Has mechanisms for adapting to unique votes</li>
                    <li>Includes analytics, reporting, and auditing capabilities</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>  

</body>
</html>

<?php
    include("footer.html");
?>
