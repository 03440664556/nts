<?php 

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri){
        echo 'class="nav-item active"';
    }
    else{
        echo 'class="nav-item"';
      }
}

function resultsCheck($requestUri, $requestUri1)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri || $current_file_name == $requestUri1){
        echo 'class="nav-item active"';
    }
    else{
        echo 'class="nav-item"';
      }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NTS - Admin</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/style4.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="../img/favicon.png">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>National <br> Testing <br> Service</h3>
                <strong>NTS</strong>
            </div>
            <ul class="list-unstyled components">
                <li <?=echoActiveClassIfRequestMatches("home")?>>
                    <a href="home.php">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li <?=echoActiveClassIfRequestMatches("projects")?>>
                    <a href="projects.php">
                        <i class="fas fa-project-diagram"></i>
                        Projects
                    </a>
                </li>
                <li <?=resultsCheck("results", "answerKeys")?>>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-vials"></i>
                        Results
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li <?=echoActiveClassIfRequestMatches("results")?>>
                            <a href="results.php">Results</a>
                        </li>
                        <li <?=echoActiveClassIfRequestMatches("answerKeys")?>>
                            <a href="answerKeys.php">Answer Keys</a>
                        </li>
                    </ul>
                </li>
                <li <?=echoActiveClassIfRequestMatches("loc")?>>
                    <a href="loc.php">
                        <i class="fas fa-users"></i>
                        List of Candidates
                    </a>
                </li>
                <li <?=echoActiveClassIfRequestMatches("slider")?>>
                    <a href="slider.php">
                        <i class="fas fa-images"></i>
                        Slider
                    </a>
                </li>
                <li <?=echoActiveClassIfRequestMatches("newsFeed")?>>
                    <a href="newsFeed.php">
                        <i class="fas fa-newspaper"></i>
                        News Feed
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    Designed & Developed by <a href="http://codestudio.com.pk">Code Studio</a>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content">
            <!-- top bar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-sp">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" align="right">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <u class="nav-link">Logged In: <strong>ADMIN</strong></u>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="home.php"><i class="fas fa-home"></i>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-user-alt"></i>Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>