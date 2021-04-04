<?php
echo <<<_INIT
<!DOCTYPE html>
<html>
<head>
    <title>FUAM BookHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" description="Easily access FUAM lecture materials"/>
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="stylesheet" href="res/css/all.css"/>
    <link rel="stylesheet" href="res/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="res/css/base.css"/>
    <link rel="stylesheet" href="res/css/styles.css"/>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-md fixed-top stick">
            <!----nav content---->
            <a class="navbar-brand" href="index.php"><img src="img/fuambookhub.png" id="logo" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarbtn"><span class="hamburger"><i class="fa fa-bars"></i></span></button>
                <div id="navbarbtn" class="collapse navbar-collapse main-nav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link active">Home</a>
                    </li><!-----
                    <li class="nav-item catalogue">
                    <a class="nav-link" href="#">Catalogue</a>
                    <div class="sub-nav1">
                        <ul>
                            <li class="hover-me"><a href="#">Agronomy</a>
                            <div class="sub-nav2">
                                <ul>
                                    <li><a href="#">100L</a></li>
                                    <li><a href="#">200L</a></li>
                                </ul>
                            </div>
                            </li>
                            <li class="hover-me"><a href="#">Economics & Extension</a>
                                <div class="sub-nav2">
                                    <ul>
                                        <li><a href="#">100L</a></li>
                                        <li><a href="#">200L</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="hover-me"><a href="#">Agric & Science Education</a>
                                <div class="sub-nav2">
                                    <ul>
                                        <li><a href="#">100L</a></li>
                                        <li><a href="#">200L</a></li>
                                    </ul>
                                </div></li>
                            <li class="hover-me"><a href="#">Animal science</a>
                                <div class="sub-nav2">
                                    <ul>
                                        <li><a href="#">100L</a></li>
                                        <li><a href="#">200L</a></li>
                                    </ul>
                                </div></li>
                            <li class="hover-me"><a href="#">Engineering</a>
                                <div class="sub-nav2">
                                    <ul>
                                        <li><a href="#">100L</a></li>
                                        <li><a href="#">200L</a></li>
                                    </ul>
                                </div></li>
                            <li class="hover-me"><a href="#">FST</a>
                                <div class="sub-nav2">
                                    <ul>
                                        <li><a href="#">100L</a></li>
                                        <li><a href="#">200L</a></li>
                                    </ul>
                                </div></li>
                            <li class="hover-me"><a href="#">Forestry</a>
                                <div class="sub-nav2">
                                    <ul>
                                        <li><a href="#">100L</a></li>
                                        <li><a href="#">200L</a></li>
                                    </ul>
                                </div></li>
                            <li class="hover-me"><a href="#">Management Sciences</a>
                                <div class="sub-nav2">
                                    <ul>
                                        <li><a href="#">100L</a></li>
                                        <li><a href="#">200L</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="hover-me"><a href="#">Veterinary Medicine</a>
                                <div class="sub-nav2">
                                    <ul>
                                        <li><a href="#">100L</a></li>
                                        <li><a href="#">200L</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    </li>------->
                    <li class="nav-item">
                    <a class="nav-link" href="upload.php">upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="downloads.php">downloads</a>
                        </li>
                
                </ul>
                <form method="get" id="search" role="search" action="search.php">
                    <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="search...">
                    <span><i class="fa fa-search"></i></span>
                    
                    </div>
                
                </form>
            </div>
            
            </div>
            
            </nav>
    </header> 
_INIT;

?>