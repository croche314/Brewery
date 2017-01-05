<!DOCTYPE html>

<html lang="en">

<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="initial-scale=1">
    
    <title>Chicago Brewing Co.</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/pint.png">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Reset -->
    <link href="css/reset.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="css/main.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Luckiest+Guy' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,800' rel='stylesheet' type='text/css'>
    

</head>

<body>
    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Bootstrap js -->
    <script src="./js/bootstrap.min.js"></script>
        
<div class="container-fluid">
    
        <br><br>
        <header>
            <!-- Top Navigation -->
            <nav id="top-nav">
                <h2><a class="home-link hidden-md hidden-lg" href="index.php">Chicago Brewing Co</a></h2>
                <ul>
                    <li><a href="beers.php">Beers</a></li>
                    <li><a href="brewery.php">Brewery</a></li>
                    <li><a class="home-link hidden-sm hidden-xs" href="index.php">Chicago Brewing Co.</a></li>
                    <li><a href="our-story.php">Our Story</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
        <br>


        <?php /* 
                All pages except 'beers.php' have the same left navigation 
         */ ?>
        
        <?php if($_SERVER['REQUEST_URI'] == "/Brewery/beers.php") { ?>
            <!-- Fixed Left Navigation -->
            <nav id="leftNav" class="fixed-left-nav hidden hidden-xs">
                <h2>Beers</h2>
                    <ul class="leftNav-sub-list">
                        <li><a href="#Red-Fox">Red Fox</a></li>
                        <li><a href="#Lincoln-Lager">Lincoln Lager</a></li>
                        <li><a href="#State-St-Stout">State St. Stout</a></li>
                        <li><a href="#Big-Shoulders-IPA">Big Shoulders IPA</a></li>
                        <li><a href="#DeBeer-Belgian-Ale">DeBeer Belgian Ale</a></li>
                    </ul>
            </nav>
       
        <?php } else { ?>
            <!-- Fixed Left Navigation -->
            <nav id="leftNav" class="fixed-left-nav hidden hidden-xs">
                <h2><a href="index.php">Chicago Brewing Co.</a></h2>
                <ul>
                    <li><a href="beers.php">Beers</a></li>
                    <li><a href="brewery.php">Brewery</a></li>
                    <li><a href="our-story.php">Our Story</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        <?php }; ?>
        