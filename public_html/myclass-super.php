<?php
session_start();
if ($_SESSION['logged_in'] == null && $_SESSION['lastname'] == null && $_SESSION['firstname'] == null) {
    header("Cache-Control: no-cache, must-revalidate");
    header('Location: /index.php');
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>My Class</title>
            <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png" />
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png" />
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png" />
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
            <link rel="apple-touch-icon-precomposed" sizes="60x60" href="apple-touch-icon-60x60.png" />
            <link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png" />
            <link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png" />
            <link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
            <link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196" />
            <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
            <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
            <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
            <link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128" />
            <link href="css/styles.css" rel="stylesheet" />
            <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
            <style>
                @media print
                {
                    .noprint {
                        display:none;

                    }
                    .link {
                        text-decoration: none !important;
                        color: #000000;
                    }
                }            
                .btn2 {
                    background-color: #ffc107 !important;
                    border: none !important;
                    color: black !important;
                    text-decoration: none !important;
                    text-align: center !important;
                    margin: 0 auto !important;
                    cursor: pointer !important;
                    width: 50% !important;
                    border-radius: 50px !important;
                    padding: 8px 5px !important;
                }  
                .search {
                    width: 150% !important;
                    position: relative !important;
                    display: flex !important;
                }

                .input-search{
                    width: 150% !important;
                    box-sizing: border-box !important;
                    border: 1px solid #ccc !important;
                    border-right: none !important;
                    border-radius: 5px 0 0 5px !important;
                    outline: none !important;
                    font-size: 16px !important;
                    background-color: white !important;
                    background-position: 10px 10px !important; 
                    background-repeat: no-repeat !important;
                    padding: 3px 10px 3px 10px !important;
                }

                .filter-drop{
                    width: 95% !important;
                    box-sizing: border-box !important;
                    border: 1px solid #ccc !important;
                    border-radius: 5px 5px 5px 5px !important;
                    outline: none !important;
                    font-size: 16px !important;
                    background-color: white !important;
                    background-position: 10px 10px !important; 
                    background-repeat: no-repeat !important;
                    padding: 3px 10px 3px 10px !important;
                }

                .bar {
                    display: table;
                }

                .bar-line {
                    display: table-row;
                }

                .bar-display {
                    display: table-cell;
                }

                .searchButton {
                    width: 80px !important;
                    height: 35px !important; 
                    border: 2px solid #212429 !important;
                    background: #212429 !important;
                    text-align: center !important;
                    color: #fff !important;
                    border-radius: 0 5px 5px 0 !important;
                    cursor: pointer !important;
                    font-size: 20px !important;
                }
                .returnButton {
                    width: 40px !important;
                    height: 30px !important; 
                    border: 2px solid #212429 !important;
                    background: #212429 !important;
                    text-align: center !important;
                    color: #fff !important;
                    border-radius: 20px 20px 20px 20px !important;
                    cursor: pointer !important;
                    margin-right: 8px !important;
                }

                .tooltip1 {
                    position: relative;
                    display: inline-block;
                }

                .tooltip1 .tooltiptext {
                    visibility: hidden;
                    width: 150px;
                    background-color: black;
                    color: #fff;
                    text-align: center;
                    font-size: 15px;
                    border-radius: 6px;
                    padding: 2px 0;
                    position: absolute;
                    display: block;
                    z-index: 1;
                    top: 5px;
                    right: 200%;
                    opacity: 80%;
                }

                .tooltip1:hover .tooltiptext {
                    visibility: visible;
                }

                .tooltip1 .tooltiptext::after {
                    content: " ";
                    position: absolute;
                    top: 50%;
                    left: 100%;
                    margin-top: -5px;
                    border-width: 5px;
                    border-style: solid;
                    border-color: transparent transparent transparent black;
                }
            </style>       
        </head>
        <body class="sb-nav-fixed">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <!-- <a class="navbar-brand" href="index.html">O.R.D.E.R</a> -->
                <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button> 
                <!-- Navbar Search-->
                <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

                </form>

            </nav>
            <div id="layoutSidenav">
                <div class="noprint">
                    <div id="layoutSidenav_nav">
                        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                            <div class="sb-sidenav-menu">
                                <div class="nav">
                                    <br>
                                    <br>
                                    <div class = "order-logo">
                                        <center>
                                            <img src = "./img/orderlogo.jpg">
                                        </center>
                                    </div>
                                    <br>
                                    <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                                    <a class="nav-link" href="myclass-super.php"
                                       ><div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                                        My Class</a
                                    >

                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                       ><div class="sb-nav-link-icon"><i class="fas fa-landmark"></i></div>
                                        Library
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                        ></a>
                                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="library-super.php">All</a>
                                            <a class="nav-link" href="ongoing-super.php">On-going</a><a class="nav-link" href="completed-super.php">Completed</a></nav>
                                    </div>

                                    <a class="nav-link" href="archive-super.php"
                                       ><div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                                        Archive</a
                                    >                                       

                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts"
                                       ><div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                        Accounts
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                        ></a>
                                    <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="studentaccounts-super.php">Student Accounts</a><a class="nav-link" href="adminaccounts-super.php">Admin Accounts</a><a class="nav-link" href="superadminaccounts-super.php">Super Admin Accounts</a></nav>
                                    </div>  

                                    <a class="nav-link" href="settings-super.php"
                                       ><div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                                        Settings</a
                                    >
                                    <a class="nav-link" href="logout.php"
                                       ><div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                        Logout</a
                                    >
                                </div>
                            </div>
                            <div class="sb-sidenav-footer">
                                <div class="small">Logged in as:</div>
                                <?php
                                echo $_SESSION['lastname'] . ", <br>";
                                echo $_SESSION['firstname'];
                                ?>
                            </div>
                        </nav>
                    </div>
                </div>
                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid">
                            <div class="noprint">
                                <h1 class="mt-4">MY CLASS</h1>
                            </div>

                            <div class="card-body">
                                <div class="noprint">
                                    <div class = "bar">
                                        <div class ="bar-line">
                                            <div class="bar-display">
                                                <a href = "myclass-super.php">
                                                    <button type="button" class="returnButton" name="returnbutton">
                                                        <i class="fas fa-arrow-alt-circle-left"></i>
                                                    </button>
                                                </a>
                                            </div>                                        
                                            <div class="bar-display">
                                                <form method="post">
                                                    <select name="option" class="filter-drop">
                                                        <option value="all" selected hidden>Select...</option>
                                                        <option value="date">Date and Time</option>
                                                        <option value="groupnum">Group Number</option>
                                                        <option value="title">Title</option>
                                                        <option value="members">Members</option>
                                                        <option value="technical">Technical Adviser</option>                                                
                                                        <option value="content">Content Adviser</option>
                                                        <option value="category">Category</option>
                                                    </select>
                                            </div>
                                            <div class="bar-display">
                                                <div class="search">
                                                    <input type="text" class="input-search" placeholder="Search.." name="search">
                                                    <button type="submit" class="searchButton" name="searchbutton">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <?php
                                        $lib = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c");
                                        if (mysqli_connect_error()) {
                                            die("connection to database was failed");
                                        }


                                        if (isset($_POST['searchbutton'])) {
                                            if ($_POST['search'] == null) {
                                                echo "<p align='center'><font color = '#fc1616'>No entry placed</font></p>";
                                            } else {
                                                if ($_POST['option'] == "all") {
                                                    $latest = "SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                    $validatelatest = mysqli_query($lib, $latest);
                                                    echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                    while ($recent = mysqli_fetch_array($validatelatest)) {
                                                        $q = "SELECT * FROM library WHERE (Title LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Technical Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Technical Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (Title LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Content Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Content Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (Members LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Technical Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Technical Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (Members LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Content Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Content Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (GroupNo LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Technical Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Technical Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (GroupNo LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Content Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Content Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (Date LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Technical Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Technical Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (Date LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Content Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Content Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (`Content Adviser` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Content Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Content Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (`Content Adviser` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Technical Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Technical Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (`Technical Adviser` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Content Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Content Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (`Technical Adviser` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Technical Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Technical Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (Category LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Technical Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Technical Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (Category LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Content Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Content Adviser` LIKE '%" . $_SESSION['lastname'] . "%') GROUP BY GroupNo";
                                                        $query7 = mysqli_query($lib, $q);
                                                        if ($query7) {
                                                            if (mysqli_num_rows($query7) > 0) {
                                                                while ($row = mysqli_fetch_array($query7)) {
                                                                    echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Time'] . "</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                }
                                                            }
                                                        }
                                                    }echo "</table>";
                                                } else if ($_POST['option'] == "title") {
                                                    $latest = "SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                    $validatelatest = mysqli_query($lib, $latest);
                                                    echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                    while ($recent = mysqli_fetch_array($validatelatest)) {
                                                        $q = "SELECT * FROM library WHERE (Title LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Technical Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Technical Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (Title LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Content Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Content Adviser` LIKE '%" . $_SESSION['lastname'] . "%') GROUP BY GroupNo";
                                                        $query7 = mysqli_query($lib, $q);
                                                        if ($query7) {
                                                            if (mysqli_num_rows($query7) > 0) {
                                                                while ($row = mysqli_fetch_array($query7)) {
                                                                    echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Time'] . "</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                }
                                                            }
                                                        }
                                                    }echo "</table>";
                                                } else if ($_POST['option'] == "members") {
                                                    $latest = "SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                    $validatelatest = mysqli_query($lib, $latest);
                                                    echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                    while ($recent = mysqli_fetch_array($validatelatest)) {
                                                        $q = "SELECT * FROM library WHERE (Members LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Technical Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Technical Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (Members LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Content Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Content Adviser` LIKE '%" . $_SESSION['lastname'] . "%') GROUP BY GroupNo";
                                                        $query7 = mysqli_query($lib, $q);
                                                        if ($query7) {
                                                            if (mysqli_num_rows($query7) > 0) {
                                                                while ($row = mysqli_fetch_array($query7)) {
                                                                    echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Time'] . "</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                }
                                                            }
                                                        }
                                                    }echo "</table>";
                                                } else if ($_POST['option'] == "groupnum") {
                                                    $latest = "SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                    $validatelatest = mysqli_query($lib, $latest);
                                                    echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                    while ($recent = mysqli_fetch_array($validatelatest)) {
                                                        $q = "SELECT * FROM library WHERE (GroupNo LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Technical Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Technical Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (GroupNo LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Content Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Content Adviser` LIKE '%" . $_SESSION['lastname'] . "%') GROUP BY GroupNo";
                                                        $query7 = mysqli_query($lib, $q);
                                                        if ($query7) {
                                                            if (mysqli_num_rows($query7) > 0) {
                                                                while ($row = mysqli_fetch_array($query7)) {
                                                                    echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Time'] . "</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                }
                                                            }
                                                        }
                                                    }echo "</table>";
                                                } else if ($_POST['option'] == "date") {
                                                    $latest = "SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                    $validatelatest = mysqli_query($lib, $latest);
                                                    echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                    while ($recent = mysqli_fetch_array($validatelatest)) {
                                                        $q = "SELECT * FROM library WHERE (Date LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Technical Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Technical Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (Date LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Content Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Content Adviser` LIKE '%" . $_SESSION['lastname'] . "%') GROUP BY GroupNo";
                                                        $query7 = mysqli_query($lib, $q);
                                                        if ($query7) {
                                                            if (mysqli_num_rows($query7) > 0) {
                                                                while ($row = mysqli_fetch_array($query7)) {
                                                                    echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Time'] . "</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                }
                                                            }
                                                        }
                                                    }echo "</table>";
                                                } else if ($_POST['option'] == "content") {
                                                    $latest = "SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                    $validatelatest = mysqli_query($lib, $latest);
                                                    echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                    while ($recent = mysqli_fetch_array($validatelatest)) {
                                                        $q = "SELECT * FROM library WHERE (`Content Adviser` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Content Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Content Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (`Content Adviser` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Technical Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Technical Adviser` LIKE '%" . $_SESSION['lastname'] . "%') GROUP BY GroupNo";
                                                        $query7 = mysqli_query($lib, $q);
                                                        if ($query7) {
                                                            if (mysqli_num_rows($query7) > 0) {
                                                                while ($row = mysqli_fetch_array($query7)) {
                                                                    echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Time'] . "</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                }
                                                            }
                                                        }
                                                    }echo "</table>";
                                                } else if ($_POST['option'] == "technical") {
                                                    $latest = "SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                    $validatelatest = mysqli_query($lib, $latest);
                                                    echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                    while ($recent = mysqli_fetch_array($validatelatest)) {
                                                        $q = "SELECT * FROM library WHERE (`Technical Adviser` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Content Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Content Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (`Technical Adviser` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Technical Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Technical Adviser` LIKE '%" . $_SESSION['lastname'] . "%') GROUP BY GroupNo";
                                                        $query7 = mysqli_query($lib, $q);
                                                        if ($query7) {
                                                            if (mysqli_num_rows($query7) > 0) {
                                                                while ($row = mysqli_fetch_array($query7)) {
                                                                    echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Time'] . "</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                }
                                                            }
                                                        }
                                                    }echo "</table>";
                                                } else if ($_POST['option'] == "category") {
                                                    $latest = "SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                    $validatelatest = mysqli_query($lib, $latest);
                                                    echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                    while ($recent = mysqli_fetch_array($validatelatest)) {
                                                        $q = "SELECT * FROM library WHERE (Category LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Technical Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Technical Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (Category LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Content Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Content Adviser` LIKE '%" . $_SESSION['lastname'] . "%') GROUP BY GroupNo";
                                                        $query7 = mysqli_query($lib, $q);
                                                        if ($query7) {
                                                            if (mysqli_num_rows($query7) > 0) {
                                                                while ($row = mysqli_fetch_array($query7)) {
                                                                    echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Time'] . "</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                }
                                                            }
                                                        }
                                                    }echo "</table>";
                                                }
                                            }
                                        } else {
                                            ?>      
                                            </form>
                                            <div class="table-responsive">
                                                <?php
                                                $lib = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c");
                                                if (mysqli_connect_error()) {
                                                    die("connection to database was failed");
                                                }
                                                $latest = "SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                $validatelatest = mysqli_query($lib, $latest);
                                                echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                while ($recent = mysqli_fetch_array($validatelatest)) {
                                                    $query = "SELECT * FROM library WHERE (Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Technical Adviser` LIKE '%" . $_SESSION['firstname'] . "%' AND `Technical Adviser` LIKE '%" . $_SESSION['lastname'] . "%') OR (Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Status='On-going' AND `Content Adviser` LIKE '%" . $_SESSION['lastname'] . "%' AND `Content Adviser` LIKE '%" . $_SESSION['firstname'] . "%') GROUP BY GroupNo";
                                                    if ($result = mysqli_query($lib, $query)) {
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Time'] . "</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                        }
                                                    }
                                                }
                                            }echo "</table>"; //end of table
                                            ?>          
                                            <div id="delete" class="overlay">
                                                <div class="popup">
                                                    <form action="myclass-super.php"><a class="close" href="myclass-super.php">&times;</a></form>
                                                    <br><br>
                                                    <div class="content" align="center">
                                                        Delete research paper
                                                        <br><br>
                                                        <form method="post">
                                                            <input type="text" name="deletetitle" placeholder="Input research title" style="width: 65%;" required>
                                                            <br><br>
                                                            <input type="submit" name="delete" value="Confirm" class="btn2">
                                                            <br>
                                                            <?php
                                                            if (isset($_POST['delete'])) {
                                                                $selectdelete = "SELECT * FROM library WHERE Status='On-going' AND Title='" . $_POST['deletetitle'] . "'";
                                                                $result = mysqli_query($lib, $selectdelete);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    if ($_POST['delete'] == "Confirm") {
                                                                        $delete = "DELETE FROM library WHERE Status ='On-going' AND Title='" . $_POST['deletetitle'] . "'";
                                                                        if (mysqli_query($lib, $delete)) {
                                                                            echo "<br><p align='center'><font color = '#177a03'>Research paper successfully deleted</font></p>";
                                                                        } else {
                                                                            echo "<br><p align='center'><font color = '#fc1616'>Research paper does not exist</font></p>";
                                                                        }
                                                                    }
                                                                } else {
                                                                    echo "<br><p align='center'><font color = '#fc1616'>Research paper does not exist</font></p>";
                                                                }
                                                            }
                                                            ?>  
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="noprint">
                                                <nav class="container-floater">
                                                    <div class="floating-action-btn"><div class = "tooltip1"><a style='color: inherit;' href='#delete'><i class='fas fa-trash-alt my-float-accounts-1'></i></a>
                                                            <span class = "tooltiptext" style="right: 280% !important"> Delete </span></div></div>
                                                    <div class='floating-action-btn'><div class = 'tooltip1'><a style='color: inherit;' href='javascript:window.print()'><i class='fas fa-print my-float-accounts-1'></i></a>
                                                            <span class = "tooltiptext" style="right: 280% !important"> Generate Report </span></div></div>                                                               
                                                    <div class="floating-action-btn"><div class = "tooltip1"><a style='color: inherit;' href='#changestatus'><i class="fas fa-file-signature my-float-accounts-2"></i></a>
                                                            <span class = "tooltiptext"> Change Status </span></div></div>
                                                    <div class="floating-action-btn"><i class="fas fa-ellipsis-v my-float-accounts"></i></div>
                                                </nav> 
                                            </div>

                                            <div id="changestatus" class="overlay">
                                                <div class="popup">
                                                    <form action="myclass-super.php"><a class="close" href="myclass-super.php">&times;</a></form>
                                                    <br><br>
                                                    <div class="content" align="center">
                                                        Change status of research paper
                                                        <br><br>
                                                        <form method="post">
                                                            <input type="text" name="changestatus" placeholder="Input research title" style="width: 65%;" required>
                                                            <br><br>
                                                            <input type="submit" name="change" value="Confirm" class="btn2">
                                                            <br>
                                                            <?php
                                                            $lib = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c"); //very popular way to connect to mysqli_connect... i means to improve 
                                                            if (mysqli_connect_error()) {
                                                                die("connection to database was failed");
                                                            }
                                                            if (isset($_POST['change'])) {
                                                                if ($_POST['change'] == "Confirm") {
                                                                    $query = "SELECT * FROM library WHERE Status='On-going' AND Title = '" . mysqli_real_escape_string($lib, $_POST['changestatus']) . "'";
                                                                    $result = mysqli_query($lib, $query);
                                                                    if (mysqli_num_rows($result) > 0) {
                                                                        $update = "UPDATE library SET Status = 'Completed' WHERE Title ='" . mysqli_real_escape_string($lib, $_POST['changestatus']) . "'";
                                                                        if (mysqli_query($lib, $update)) {
                                                                            echo "<br><p align='center'><font color = '#177a03'>Research paper status successfully changed</font></p>";
                                                                            $update2 = "SELECT * FROM library WHERE Status='Completed' AND Title = '" . mysqli_real_escape_string($lib, $_POST['changestatus']) . "'";
                                                                            $result2 = mysqli_query($lib, $update2);
                                                                            $row9 = mysqli_fetch_array($result2);
                                                                            $update3 = "DELETE FROM archive WHERE Title ='" . mysqli_real_escape_string($lib, $_POST['changestatus']) . "' AND Date='" . $row9['Date'] . "' AND Time ='" . $row9['Time'] . "' AND GroupNo='" . $row9['GroupNo'] . "'";
                                                                            $result2 = mysqli_query($lib, $update3);
                                                                        }
                                                                    } else {
                                                                        echo "<br><p align='center'><font color = '#fc1616'>Research paper does not exist</font></p>";
                                                                    }
                                                                }
                                                            }
                                                            ?>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="opt2" class="overlay">
                                                <div class="popup-small">
                                                    <form action="myclass-super.php"><a class="close" href="myclass-super.php">&times;</a></form>
                                                    <br><br>
                                                    <div class="content" align="center">
                                                        Choose action
                                                        <br><br>
                                                        <form method="post">
                                                            <input type="submit" name="choice" value="View Abstract" class="btn2">
                                                            <br><br>
                                                            <input type="submit" name="choice" value="View Research paper" class="btn2">
                                                            <?php
                                                            if (isset($_POST['choice'])) {
                                                                if ($_POST['choice'] == "View Abstract") {
                                                                    $latest = "SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                                    $validatelatest = mysqli_query($lib, $latest);
                                                                    while ($recent = mysqli_fetch_array($validatelatest)) {
                                                                        if (isset($_COOKIE["cookie"])) {
                                                                            $query = "SELECT * FROM library WHERE Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Title='" . $recent['Title'] . "' GROUP BY GroupNo";
                                                                            if ($result = mysqli_query($lib, $query)) {
                                                                                $row = mysqli_fetch_array($result);
                                                                                if ($row['Title'] == $_COOKIE["cookie"]) {
                                                                                    echo "<script>location='http://order-com.stackstaging.com/myclass-super.php#abstract'</script>";
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                } else if ($_POST['choice'] == "View Research paper") {
                                                                    $latest = "SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                                    $validatelatest = mysqli_query($lib, $latest);
                                                                    while ($recent = mysqli_fetch_array($validatelatest)) {
                                                                        if (isset($_COOKIE["cookie"])) {
                                                                            $query = "SELECT * FROM library WHERE Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Title='" . $recent['Title'] . "' GROUP BY GroupNo";
                                                                            if ($result = mysqli_query($lib, $query)) {
                                                                                $row = mysqli_fetch_array($result);
                                                                                if ($row['Title'] == $_COOKIE["cookie"]) {
                                                                                    echo "<script>window.open('" . $row['URL'] . "', '_blank');</script>";
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                            ?>
                                                            <br>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="abstract" class="overlay">
                                                <div class="popup-small">
                                                    <a class="close" href="myclass-super.php#opt2">&times;</a>
                                                    <br><br>
                                                    <div class="content" align="center">
                                                        <h2>Abstract</h2>
                                                        <br><br>
                                                        <?php
                                                        $latest = "SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                        $validatelatest = mysqli_query($lib, $latest);
                                                        while ($recent = mysqli_fetch_array($validatelatest)) {
                                                            if (isset($_COOKIE["cookie"])) {
                                                                $query = "SELECT * FROM library WHERE Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Title='" . $recent['Title'] . "' GROUP BY GroupNo";
                                                                if ($result = mysqli_query($lib, $query)) {
                                                                    $row = mysqli_fetch_array($result);
                                                                    if ($row['Title'] == $_COOKIE["cookie"]) {
                                                                        echo $row['Abstract'];
                                                                    }
                                                                }
                                                            }
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>  


                                            <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
                                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
                                            <script src="js/scripts.js"></script>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
                                            <script src="assets/demo/chart-area-demo.js"></script>
                                            <script src="assets/demo/chart-bar-demo.js"></script>
                                            <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
                                            <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
                                            <script src="assets/demo/datatables-demo.js"></script>
                                            <script type="text/javascript">

                                                function bookmark(lnk)
                                                {
                                                    var text = lnk.getAttribute('value');
                                                    createCookie("cookie", text);
                                                }


                                                function createCookie(name, value, days) {
                                                    var expires;
                                                    if (days) {
                                                        var date = new Date();
                                                        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                                                        expires = "; expires=" + date.toGMTString();
                                                    } else {
                                                        expires = "";
                                                    }
                                                    document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
                                                }
                                            </script>
                                            </body>
                                            </html>
                                            <?php
                                        }
                                        ?>