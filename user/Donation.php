<?php
include '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<style>

    .card-big-shadow {
        max-width: 320px;
        position: relative;
    }

    .coloured-cards .card {
        margin-top: 30px;
    }

    .card[data-radius="none"] {
        border-radius: 0px;
    }
    .card {
        border-radius: 8px;
        box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
        background-color: #FFFFFF;
        color: #252422;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
    }


    .card[data-background="image"] .title, .card[data-background="image"] .stats, .card[data-background="image"] .category, .card[data-background="image"] .description, .card[data-background="image"] .content, .card[data-background="image"] .card-footer, .card[data-background="image"] small, .card[data-background="image"] .content a, .card[data-background="color"] .title, .card[data-background="color"] .stats, .card[data-background="color"] .category, .card[data-background="color"] .description, .card[data-background="color"] .content, .card[data-background="color"] .card-footer, .card[data-background="color"] small, .card[data-background="color"] .content a {
        color: #FFFFFF;
    }
    .card.card-just-text .content {
        padding: 50px 65px;
        text-align: center;
    }
    .card .content {
        padding: 20px 20px 10px 20px;
    }
    .card[data-color="blue"] .category {
        color: #7a9e9f;
    }

    .card .category, .card .label {
        font-size: 14px;
        margin-bottom: 0px;
    }
    .card-big-shadow:before {
        /*background-image: url("http://static.tumblr.com/i21wc39/coTmrkw40/shadow.png");*/
        background: url("../images/shadow.png");
        background-position: center bottom;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        bottom: -12%;
        content: "";
        display: block;
        left: -12%;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 0;
    }
    h4, .h4 {
        font-size: 1.5em;
        font-weight: 600;
        line-height: 1.2em;
    }
    h6, .h6 {
        font-size: 0.9em;
        font-weight: 600;
        text-transform: uppercase;
    }
    .card .description {
        font-size: 16px;
        color: #66615b;
    }
    .content-card{
        margin-top:30px;
    }
    a:hover, a:focus {
        text-decoration: none;
    }

    /*======== COLORS ===========*/
    .card[data-color="blue"] {
        background: #b8d8d8;
    }
    .card[data-color="blue"] .description {
        color: #506568;
    }

    .card[data-color="green"] {
        background: #d5e5a3;
    }
    .card[data-color="green"] .description {
        color: #60773d;
    }
    .card[data-color="green"] .category {
        color: #92ac56;
    }

    .card[data-color="yellow"] {
        background: #ffe28c;
    }
    .card[data-color="yellow"] .description {
        color: #b25825;
    }
    .card[data-color="yellow"] .category {
        color: #d88715;
    }

    .card[data-color="brown"] {
        background: #d6c1ab;
    }
    .card[data-color="brown"] .description {
        color: #75442e;
    }
    .card[data-color="brown"] .category {
        color: #a47e65;
    }

    .card[data-color="purple"] {
        background: #baa9ba;
    }
    .card[data-color="purple"] .description {
        color: #3a283d;
    }
    .card[data-color="purple"] .category {
        color: #5a283d;
    }

    .card[data-color="orange"] {
        background: #ff8f5e;
    }
    .card[data-color="orange"] .description {
        color: #772510;
    }
    .card[data-color="orange"] .category {
        color: #e95e37;
    }
    .New{
        background: url("../images/back2.jpg");
        height: 300px;
        margin-top: 50px;
        margin-bottom: 50px;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }

</style>
<body>
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg justify-content-around">
            <div class="container">
                <a class="navbar-brand " href="index.php">
                    <img src="../images/logo.png" alt="logo image" width="100">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-3">
                            <a class="nav-link home" aria-current="page" href="#">Home</a>
                        </li>
                        <img src="../images/homeline.png" class="homeline" width="70">
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle pages" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Stores
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="ReadStory.php">Read Story</a></li>
                                <li><a class="dropdown-item" href="WriteStory.php">Write Story</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle pages" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Resources
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Infographics.php">Infographics</a></li>
                                <li><a class="dropdown-item" href="Articles.php">Articles</a></li>
                                <li><a class="dropdown-item" href="Events.php">Events</a></li>
                                <li><a class="dropdown-item" href="AnnualReports.php">Annual Reports</a></li>
                                <li><a class="dropdown-item" href="Videos.php">Videos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link pages" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Donation
                            </a>
                    


                        </li>
                   
                    </ul>
                </div>
                <div class="mx-2">
                <a class="nav-link btn-comment" aria-current="" href="commentL.php">Leave Comment</a>
                </div>
            </div>
        </nav>
        <img src="../images/ripped-paper-header-1.png" width="100%" class="img">
    </header>
    <main>
        <section class="headerBackDonat">
            <div class="container">
                <div class="">
                    <h2 class="text-Dn text-center pt-5">PFG palestine priorities</h2>
                    <p class="text-p text-center pt-5">With your financial support, we are able to address the following priorities and positively impact Palestine Farmers quality of life:</p>
                </div>
                <div>
                    <div class="row row-cols-4 mt-4 justify-content-around">
                        <div class="col col-DN mx-2" id="col1">
                            <i class="fa-solid fa-wheat-awn iii pb-2"></i>
                            <p class="Pim">Capacity Building</p>
                        </div>
                        <div class="col col-DN mx-2" id="col1">
                            <i class="fa-solid fa-shop iii pb-2"></i>
                            <p class="Pim">Market Linkages </p>
                        </div>
                        <div class="col col-DN mx-2" id="col1">
                            <i class="fa-solid fa-trailer iii pb-2"></i>
                            <p class="Pim">Training</p>
                        </div>
                        <div class="col col-DN mx-2" id="col1">
                            <i class="fa-solid fa-coins iii pb-2"></i>
                            <p class="Pim">Access to Finance</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <img src="../images/ripped-paper-header-1.png" width="100%" class="inFoImg">

        <section>
            <div class="container bootstrap snippets bootdeys">
                <div class="row">
                    <div class="col-md-4 col-sm-6 content-card">
                        <div class="card-big-shadow">
                            <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                                <div class="content">
                                    <h6 class="category">Donation places</h6>
                                    <h4 class="title"><a href="#">Gaza</a></h4>
                                    <p class="description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                                </div>
                            </div> <!-- end card -->
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 content-card">
                        <div class="card-big-shadow">
                            <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
                                <div class="content">
                                    <h6 class="category">Donation places</h6>
                                    <h4 class="title"><a href="#">Ramallah</a></h4>
                                    <p class="description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                                </div>
                            </div> <!-- end card -->
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 content-card">
                        <div class="card-big-shadow">
                            <div class="card card-just-text" data-background="color" data-color="yellow" data-radius="none">
                                <div class="content">
                                    <h6 class="category">Donation places</h6>
                                    <h4 class="title"><a href="#">Haifa</a></h4>
                                    <p class="description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                                </div>
                            </div> <!-- end card -->
                        </div>
                    </div>
                </div>
            </div>


                    <section class="New co">

                    </section>
            <div class="container bootstrap snippets bootdeys">
                <div class="row">
                    <div class="col-md-4 col-sm-6 content-card">
                        <div class="card-big-shadow">
                            <div class="card card-just-text" data-background="color" data-color="brown" data-radius="none">
                                <div class="content">
                                    <h6 class="category">Donation places</h6>
                                    <h4 class="title"><a href="#">Nablus</a></h4>
                                    <p class="description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                                </div>
                            </div> <!-- end card -->
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 content-card">
                        <div class="card-big-shadow">
                            <div class="card card-just-text" data-background="color" data-color="purple" data-radius="none">
                                <div class="content">
                                    <h6 class="category">Donation places</h6>
                                    <h4 class="title"><a href="#">Ariha</a></h4>
                                    <p class="description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                                </div>
                            </div> <!-- end card -->
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 content-card">
                        <div class="card-big-shadow">
                            <div class="card card-just-text" data-background="color" data-color="orange" data-radius="none">
                                <div class="content">
                                    <h6 class="category">Donation places</h6>
                                    <h4 class="title"><a href="#">Betlahem</a></h4>
                                    <p class="description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                                </div>
                            </div> <!-- end card -->
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
    <footer>
            <img src="../images/ripped-paper-base-2.png" class="w-100">
            <div class="foot1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="../images/logo.png" width="150" class="mb-3"> 
                            <p class="mt-2">PALESTINIAN FARMERS GUIDE <br>
                            Resistance & Defense</p>
                        </div>
                        <div class="col-lg-3 pe-2">
                            <h4 class="mb-4 text-start h4">About</h4>
                            <div class="my-3 iconfooter">
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="#">General Information</a>
                            </div>                                                       
                            <div class="my-3 iconfooter">
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="#">Who We Are</a>
                            </div>
                            <div class="my-3 iconfooter">
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="#">Latest Resources</a>
                            </div>
                            <div class="my-3 iconfooter">
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="#">Leave Comments</a>
                            </div>   
                        </div>
                        <div class="col-lg-3  ps-3">
                            <h4 class="mb-4 text-start h4">Links</h4>
                            <div class="my-3 iconfooter">
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="#">Our Accounts</a>
                            </div>                                                       
                            <div class="my-3 iconfooter">
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="#">New Campaign</a>
                            </div>
                            <div class="my-3 iconfooter">
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="#">Upcoming Events</a>
                            </div>
                            <div class="my-3 iconfooter">
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="#">Volunteers</a>
                            </div>            
                        </div>                   
                        <div class="col-lg-2 ">
                            <h4 class="final-h4 ">Contact</h4>
                    
                            <div class="mb-3 mt-4 iconfoot2">
                                <P><i class="fa-solid fa-phone"></i> +972 59000000</P>
                            </div>
                            <hr>
                            <div class="mb-3 mt-3 iconfoot2">
                                <P><i class="fa-regular fa-envelope"></i> pfg@gmail.com</P>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot2 d-flex space-between">
                <p>
                    © Copyright 2023 by pfg.com
                </p>
                <p>
                    Terms & Conditions / Privacy Policy / Sitemap
                </p>
            </div>


    </footer>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>