<?php
include 'connect.php';
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

    // Separating the code into functions
    function fetchArticles($con) {
        $articles = [];

        $sql = "SELECT * FROM `articles`";
        $result = mysqli_query($con, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $articles[] = $row;
            }
        }

        return $articles;
    }

    $updateSuccess = isset($_GET['updateSuccess']);
    $deleteSuccess = isset($_GET['deletesuccess']);
    $addSuccess = isset($_SESSION['addSuccess']); // Check if the session variable is set
    unset($_SESSION['addSuccess']);

    function displayArticles($articles) {
        foreach ($articles as $article) {
            $id = $article['id'];
            $name = $article['Name'];
            $description = $article['Description'];
            $link = $article['link'];

            echo '
              <tr>
                <td scope="row">' . $id . '</td>
                <td scope="row">' . $name . '</td>
                <td scope="row">' . $description . '</td>
                <td scope="row">' . $link . '</td>
                <td class="actions">
                  <button class="update"><a href="update.php?updateid=' . $id . '" style="color: white;">Update</a></button>
                  <button class="delete"><a href="delete.php?deleteid=' . $id . '" style="color: white;">Delete</a></button>
                </td>
              </tr>
            ';
        }
    }

    $articles = fetchArticles($con);
    ?>

    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Articles</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet"/>
        <link href="assets/css/font-awesome.css" rel="stylesheet"/>
        <link href="assets/css/custom.css" rel="stylesheet"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
        <style>
            a {
                color: white;
            }

            .add-article-button {
                background-color: #214761;
                color: white;
                padding: 10px;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                margin: 20px;
            }

            table {
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 20px;
            }

            th, td {
                text-align: left;
                padding: 8px;
                border-bottom: 1px solid #ddd;
            }

            th {
                background-color: #f2f2f2;
                font-weight: bold;
            }

            tr:hover {
                background-color: #f5f5f5;
            }

            .actions {
                white-space: nowrap;
            }

            .actions button {
                margin-right: 5px;
            }

            .actions button.update {
                border: 0;
                background-color: #4CAF50;
                color: white;
            }

            .actions button.delete {
                border: 0;
                background-color: #f44336;
                color: white;
            }

            .btn-log {
                background: #214761;
                color: #fff;
                border-radius: 10px;
                display: block;
                margin: 20px 10px;
                padding: 5px 15px;
            }

            .btn-log:hover {
                color: #fff;
            }

            #wrapper {
                width: 100%;
                display: flex;
                justify-content: space-between;
                /* margin-top:30px; */
            }
        </style>
    </head>
    <body>
    <div id="wrapper">
        <div class="navbar">
            <h2>AdminPFG</h2>
        </div>
        <a class="btn-log my-5" href="logout.php">log out</a>
    </div>

    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <a href="index.php"><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                </li>

                <li>
                    <a href="articles.php"><i class="fa fa-edit "></i>Artices</a>
                </li>
                <li>
                    <a href="events.php"><i class="fa fa-edit "></i>Events</a>
                </li>
                <li>
                    <a href="videos.php"><i class="fa fa-edit "></i>Videos</a>
                </li>
                <li>
                    <a href="theStories/theAdmin/addingStories.php"><i class="fa fa-table "></i>Adding Stories</a>
                </li>
                <li>
                    <a href="theStories/theAdmin/viewpinnedStories.php"><i class="fa fa-edit "></i>View Pinned
                        Stories</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <button class="add-article-button">
                        <a style="color: white;" class="text-light" href="addArtic.php">Add New Article</a>
                    </button>
                </div>
            </div>
            <?php if ($updateSuccess): ?>
                <p id="update-success-message" style="color: green;">The article has been successfully updated.</p>
                <script>
                    // Hide the update success message after a specific duration (e.g., 3 seconds)
                    setTimeout(function () {
                        var updateSuccessMessage = document.getElementById('update-success-message');
                        updateSuccessMessage.style.display = 'none';
                    }, 3000);
                </script>
                <?php unset($_SESSION['updateSuccess']); // Remove the session variable after displaying the message ?>
            <?php endif; ?>


            <?php if ($deleteSuccess): ?>
                <p id="delete-success-message" style="color: red;font-size: large;">The article has been successfully
                    deleted.</p>
                <script>
                    // Hide the delete success message after a specific duration (e.g., 3 seconds)
                    setTimeout(function () {
                        var deleteSuccessMessage = document.getElementById('delete-success-message');
                        deleteSuccessMessage.style.display = 'none';
                    }, 3000);
                </script>
                <?php unset($_GET['deletesuccess']); // Remove the query parameter after displaying the message ?>
            <?php endif; ?>


            <?php if ($addSuccess && !$deleteSuccess): ?>
                <p id="success-message" style="color: #214761;font-size: large">The article has been successfully
                    added.</p>
                <script>
                    // Hide the success message after a specific duration (e.g., 3 seconds)
                    setTimeout(function () {
                        var successMessage = document.getElementById('success-message');
                        successMessage.style.display = 'none';
                    }, 3000);
                </script>
            <?php endif; ?>


            <table>
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Link</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php displayArticles($articles); ?>
                </tbody>
            </table>

            <hr/>
        </div>
    </div>

    <div class="footer">
        <div class="row">
            <div class="col-lg-12">
                &copy; 2023 Admin PFG | Design by: Dina Harara
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    </body>
    </html>

    <?php
} else {
    header("Location: login.php");
    exit();
}
?>
