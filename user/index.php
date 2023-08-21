<?php
include '../connect.php';
//Footer refac.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<style>
    .row1{
        box-shadow:  0 5px 30px 0 rgb(214 215 216 / 57%);;
    }
    img{
        border-radius: 70px;
    }
    .Farmers_rights , .land_information {
        min-height: 20vh;
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
                            <a class="nav-link dropdown-toggle pages" href="#land_information" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Home
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#land_information">Land Information</a></li>
                                <li><a class="dropdown-item" href="#farmer_rights">Farmer rights</a></li>
                                <li><a class="dropdown-item" href="#how_to_defend_rights">How to defend rights</a></li>
                            </ul>
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
                            <a class="nav-link pages" href="Donation.php" role="button" data-bs-toggle="dropdown"
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
        <section class="headerBack">
            <div class="container">
                <div class="word-slider">
                    <p class="word-slider-p1">Welcome to Palestinian Farmers Guide</p>
                    <img src="../images/banner-1-shape-1.png" class="shape-slider">
                    <h1 class="word-slider-h my-5">Resistance<br>&AMP; Defense</h1>
                </div>
            </div>
        </section>
        <section class="headerText">
             <p class="textP">WE PROVIDE <span>ASSISTANCE</span> AND <span>PROTECTION</span> FOR</p>
             <p class="pSpan">REGISTERED PALESTINE REFUGEES</p>       
        </section>
        <section class="New mt-5">
        <section id="land_information" class="New">
            <div class="land_information container">
                <div class=" row row1 mt-4 p-4 mb-5">
                    <div class="col-8 pe-2">
                        <div class="title mt-2">
                            <h1>Land information</h1>
                        </div>
                        <div class="content">
                            <p>Palestinian farmers rely heavily on agriculture for their livelihoods and the land they cultivate has significant cultural and historical importance. However, the Israeli occupation of Palestine has resulted in the loss of Palestinian land and has limited the ability of farmers to access and cultivate it.
                                 Israel has confiscated Palestinian land for the construction of settlements, military bases, and a separation barrier, which has led to the displacement of Palestinian farmers and their families.
                                 Additionally, the Israeli government has imposed a system of permits and checkpoints that restrict the movement of Palestinian farmers within the West Bank and Gaza, making it difficult for them to access their land and markets.
                                 As a result, Palestinian farmers face significant challenges in sustaining their way of life and contributing to the local economy.</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <img src="../images/land.jpg" width="300" height="320" class="1">
                    </div>
                </div>
            </div>
        </section>
            
            <section id="farmer_rights" class="Farmers_rights container">
                <div class="row row1 mt-2 p-4 mb-5">
                    <div class="col-8">
                        <div class="title mt-2">
                            <h1>Farmers_rights</h1>
                        </div>
                        <div class="content">
                            <p>
                                Palestinian farmers have faced numerous challenges and violations of their rights over the years. With much of their land under Israeli occupation and control, farmers face restrictions on their movement, access to water, and use of their own land.
                                Israel's illegal settlements in the West Bank have also led to the confiscation and destruction of Palestinian farmland, leaving many farmers without a source of livelihood.
                                Additionally, Israeli checkpoints and barriers in the West Bank hinder farmers' access to markets and limit their ability to transport goods. Palestinian farmers have also been subject to violence and harassment by Israeli settlers, who frequently destroy crops and attack farmers.
                                These challenges have resulted in a significant decline in the agricultural sector in Palestine and have severely impacted the lives of Palestinian farmers and their families.
                                The international community has a responsibility to support the rights of Palestinian farmers and hold Israel accountable for its violations of international law.
                            </p>
                        </div>
                    </div>
                    <div class="col-4">

                        <img src="../images/farmers.jpg" width="300" height="350" class="1">

                    </div>
                </div>
        </section>
            <section id="how_to_defend_rights" class="How_to_defend_rights container">
                <div class=" row row1 mt-2 p-4">
                    <div class="col-8">
                        <div class="title mt-2">
                            <h1>How_to_defend_rights</h1>
                        </div>
                        <div class="content">
                            <p>
                                Educate yourself: It's important to understand the historical and political context of the Palestinian farmer's struggle. Read up on the history of Palestine, the Israeli-Palestinian conflict, and the issues facing Palestinian farmers today.

                                Support Palestinian farmers: Support Palestinian farmers by buying Palestinian products or supporting organizations that work to promote their rights. This can help increase their economic opportunities and create political pressure for change.

                                Advocate for their rights: Use your voice to advocate for the rights of Palestinian farmers. Contact your elected representatives, participate in protests, and spread awareness on social media.

                                Join organizations: Join organizations that work to support Palestinian farmers and their rights. You can volunteer, donate, or simply show your support.


                            </p>
                        </div>
                    </div>
                    <div class="col-4">

                        <img src="../images/1.jpg" width="300" height="320" class="1">

                    </div>
                </div>
        </section>
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
                            <div class="social-share mt-4">
                                <div class="social-share">
                                    <a class="fb" href="https://www.facebook.com/Palestinian-Farmers-Guide-100520589712831" target="_blank">F</a>
                                    <a class="tw" href="https://twitter.com/GuideFarme" target="_blank">T</a>
                                    <a class="in" href="https://www.instagram.com/palestinian_farmers_guide/?next=%2F" target="_blank">I</a>
                                </div>
                            </div>
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