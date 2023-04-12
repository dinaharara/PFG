<!DOCTYPE html>
<html>
<!--BY AYA HEMIEDA-->
<head>
    <title>Stories Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
        html,
        body {
            min-height: 100%;
            font-weight: bold;
        }

        body,
        div,
        form,
        input,

        textarea,
        p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: black;
            line-height: 22px;
        }

        h1 {
            position: absolute;
            margin: 0;
            line-height: 42px;
            font-size: 42px;
            color: #fff;
            z-index: 2;
        }

        .testbox {
            display: flex;
            justify-content: center;
            align-items: center;
            height: inherit;
            padding: 20px;
        }

        form {
            width: 100%;
            padding: 20px;
            border-radius: 6px;
            background: #fff;
            box-shadow: 0 0 25px 0 #255946;
        }

        .banner {
            position: relative;
            height: 180px;
            background-color: #255946;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .banner::after {
            content: "";
            background-color: rgba(0, 0, 0, 0.3);
            position: absolute;
            width: 100%;
            height: 100%;
        }

        input,

        textarea {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input {
            width: calc(100% - 10px);
            padding: 5px;
        }



        textarea {
            width: calc(100% - 12px);
            padding: 5px;
        }

        .item input:hover,
        .item textarea:hover {
            border: 1px solid transparent;
            box-shadow: 0 0 6px 0 #255946;
            color: black;
        }

        .item {
            position: relative;
            margin: 10px 0;
        }

        .btn-block {
            margin-top: 10px;
            text-align: right;
        }

        button {
            width: 150px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #255946;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background: #255946;
        }
    </style>
</head>

<body>

    <div class="testbox">
        <form action="index.php" method="post">
            <div class="banner">
                <h1>Stories Form</h1>
            </div>
            <div class="item">
                <p>Name</p>
                <div class="name-item">
                    <input type="text" required name="name" value="<?php
                                                                    //  echo $_POST['name'] ?? ''; 
                                                                    ?>" placeholder="your full name" />


                    <p>Your Story</p>
                    <textarea required name="theStory" value="<?php
                                                                // echo $_POST['theStory'] ?? ''; 
                                                                ?>" rows="8"></textarea>
                </div>
                <div class="btn-block">
                    <button type="submit" href="/">Send</button>
                </div>
        </form>

    </div>
    <?php
    //  error_reporting(0);
    ?>
    <?php

    // // servername => localhost
    // // username => root
    // // password => empty
    // // database name => staff
    // $conn = mysqli_connect("localhost", "root", "", "stories");

    // // Check connection
    // if ($conn === false) {
    //     die("ERROR: Could not connect. "
    //         . mysqli_connect_error());
    // }

    // // Taking all 5 values from the form data(input)
    // $date = date("Y/m/d");
    // // if (isset($id) || isset($name) || isset($theStory)) {


    // $name =  $_REQUEST['name'];
    // $theStory = $_REQUEST['theStory'];
    // // }

    // // Performing insert query execution
    // // here our table name is college
    // $sql = "INSERT INTO story  VALUES (
    //        NULL,'$name','$theStory','$date')";

    // if (mysqli_query($conn, $sql)) {
    //     // echo "<div>$name </div>  ";
    //     // echo "<h2> $theStory</h2>";
    // }
    // // else {
    // //     echo "ERROR: Hush! Sorry $sql. "
    // //         . mysqli_error($conn);
    // // }

    // // Close connection
    // mysqli_close($conn);
    ?>
</body>

</html>