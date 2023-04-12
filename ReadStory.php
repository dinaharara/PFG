<!DOCTYPE html>
<html lang="en">
<!--BY AYA HEMIEDA-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        h1 {
            font-weight: bolder;
            margin-left: 60px;
            margin-top: 100px;
            margin-bottom: 20px;
            color: #255946;


        }

        h2 {
            font-weight: bolder;
            margin-left: 60px;
            margin-top: 20px;
            margin-bottom: 50px;


        }

        .same {
            width: 750px;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 70px;
            height: 350px;
            background-color: #255946;
            color: white;
            border: 2px solid white;
            outline-style: solid;
            outline-color: #255946;
            outline-width: 20px;
            padding: 20px;
            border-radius: 20px;
            font-size: large;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        body {
            background-color: #eee;
        }

        .adding {
            color: black;
            border: 2px solid #255946;
            width: 230px;
            height: 50px;
            background-color: white;
            padding: 5px;
            border-radius: 15px;
            text-align: center;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin-left: 50px;
        }

        p {
            font-size: larger;
            margin-top: 5px;
            margin-bottom: 30px;
            margin-left: 20px;
            margin-right: 20px;
            border: 3px solid #255946;
            border-radius: 20px;
            background-color: white;
            color: #255946;
            width: 800px;
            height: 200px;
            padding: 20px;
        }

        .main {
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;


        }

        .first,
        .second,
        .third,
        .forth {
            display: flex;
            flex-direction: row;
            width: 90%;

        }

        .first {
            justify-content: start;

        }

        .second {
            justify-content: end;
        }

        .third {
            justify-content: start;

        }

        .forth {
            justify-content: end;
        }
    </style>
</head>

<body>
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg justify-content-around">
            <div class="container">
                <a class="navbar-brand " href="#">
                    <img src="images/logo.png" alt="" width="100">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-3">
                            <a class="nav-link home" aria-current="page" href="#">Home</a>
                        </li>
                        <img src="images/1.png" class="homeline" width="70">
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle pages" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Stores
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="ReadStory.php">Read Story</a></li>
                                <li><a class="dropdown-item" href="WriteStory.php">Write Story</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle pages" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Resources
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Infographics.html">Infographics</a></li>
                                <li><a class="dropdown-item" href="Articles.html">Articles</a></li>
                                <li><a class="dropdown-item" href="Events.html">Events</a></li>
                                <li><a class="dropdown-item" href="AnnualReports.html">Annual Reports</a></li>
                                <li><a class="dropdown-item" href="Videos.html">Videos</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <div class="mx-2">
                    <i class="fa-solid fa-basket-shopping mx-3 icon-bar"></i>
                    <i class="fa-solid fa-search mx-3 icon-bar"></i>
                </div>
            </div>
        </nav>
        <img src="images/ripped-paper-header-1.png" width="100%" class="img">
    </header>
    <h1>Most Popular Stories</h1>
    <div class="main">
        <div class="first">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, voluptates.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, id!
            </p>
        </div>
        <div class="second">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, voluptates.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quibusdam.
            </p>
        </div>
        <div class="third">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, voluptates.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, odio!
            </p>
        </div>
        <div class="forth">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, voluptates.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, omnis.
            </p>
        </div>


    </div>

    <h2>Most Recent Stories Added By Farmers</h2>

    <div class="same">will be completed in the next level of the project</div>
    <?php
    // error_reporting(0);
    ?>
    <?php

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $databasename = "stories";

    // // CREATE CONNECTION
    // $conn = new mysqli(
    //     $servername,
    //     $username,
    //     $password,
    //     $databasename
    // );

    // // GET CONNECTION ERRORS
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // // SQL QUERY
    // $query = "SELECT * FROM `story`;";

    // // FETCHING DATA FROM DATABASE
    // $result = $conn->query($query);

    // if ($result->num_rows > 0) {
    //     // OUTPUT DATA OF EACH ROW
    //     while ($row = $result->fetch_assoc()) {
    //         echo "<div class='same'> my name is " . $row["name"] . "  my story is as follows: " . $row["theStory"] . "<br>" . "<small>" . $row["theDate"] . "</small>" .  "</div>";
    //     }
    // } else {
    //     echo "0 results";
    // }

    // $conn->close();

    ?>


</body>

</html>