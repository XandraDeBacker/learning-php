<?php
// Eerst een variabele maken met $ +kopie de rest:
$pictures = array
    ("https://www.pixelstalk.net/wp-content/uploads/2016/08/HD-PC-Wallpaper-2016.jpg",
    "https://wallpaperaccess.com/full/190815.jpg",
    "https://images7.alphacoders.com/528/528418.jpg",
    "https://wallpaperaccess.com/full/300068.jpg",
    "https://www.hdwallpaper.nu/wp-content/uploads/2016/02/golden-gate_wallpaper_030.jpg");

//Schrijf daarna de code:
$randIndex = array_rand ($pictures);

// for ($i=0; $i= $count; $i++) {
//   $random = rand(0, -1);
// echo $randIndex;



 ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Javascript to PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./exercise-resources/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



</head>
<body class="bg-light">
<header id="header" style="background: url('<?php echo $pictures[$randIndex] ?>')">
    <div class="overlay"></div>
    <div class="overlay-content">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Welcome to the Javascript - PHP exercise</h1>
                    <p>Read the code of this page, understand it, then convert it to the same functionality in PHP!</p>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="exercises">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="loop-while" class="my-4 p-4 bg-white shadow-sm border">
                  <?php
                  // Eerst een variabele maken met $ en kopie de rest:
                  $strings = array("Kirito",
                  "Erza",
                  "Akatsuki",
                  "Shiro",
                  "Leo",
                  "Rundel-Haus-Code",
                  "Ken Kaneki",
                  "Glenn Radars",
                  "Momonga-Sama",);

                






            ?>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div id="username-generator" class="my-4 p-4 bg-white shadow-sm border"></div>
            </div>
        </div>
    </div>
</section>



</body>
</html>
