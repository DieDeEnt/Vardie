<?php
    require_once __DIR__ . '/source/helpers.php';

    //$user = currentUser();
    
?>

<!DOCTYPE HTML>
<html LONG="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Vardie, vardie, die, war, Wardie, wardie, VarDie, Games, Public, community, Community, VARDIE, Main, main, My, my, love github">
    <meta name="description" content="Vardie is a pet project for explore web development.">
    <meta name="googlebot" content="notranslate">
    <meta name="robots" content="max-snippet:-1">
    <meta name="robots" content="max-image-preview:large">
    <!-- Page Name -->
    <title>Vardie</title>
    <!-- Page Logo -->
    <link rel="shortcut icon" href="icon/logo.png" type="image/png" />


    <!-- mainStyle.css -->
    <link rel="stylesheet" href="/css/mainStyle.css">
    <!-- normalize.css -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- homeStyle.css -->
    <link rel="stylesheet" href="css/indexStyle.css">


    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-L78E4KSNQD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-L78E4KSNQD');
</script>
<body>
    <div class="conteiner">
        <header class="mb-16">
            <div class="conteiner header position-relative logo width-full pt-16 pb-16 px-32">
                <div class="logo my-a">
                    <a href="/index.php"><img src="/icon/logo.png"  height="32" width="35.5" /></a>
                </div>
                <div class="logo my-a">
                    <a class="text-sign-in" href="/loginPage.php">Sign in</a>
                </div>

            </div>
        </header>
        <main class="main-container justify-content-center flex test-text align-items-centor">
            <div class="main-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tempus ultricies posuere. 
                Nam ornare arcu libero, ac aliquet dui consectetur id. Nam nec sodales ipsum. Etiam at felis ante. 
                Aliquam egestas nibh eget lobortis fringilla. Curabitur vehicula tincidunt leo id eleifend. 
                Pellentesque elementum venenatis commodo. Pellentesque sit amet nisl at nunc molestie dignissim vel ut augue. 
                Curabitur facilisis nisi nunc, eu varius enim vehicula et. Nulla commodo lacus ac augue maximus eleifend. 
                
            </div>
            <div class="chart">
                <canvas id="myChart"></canvas>
            </div>
            
        </main>
        <div class="main color justify-content-center">

            <footer>
                <div class="conteiner footer mx-8">
                    <ul class="justify-content-center ul">
                        <li class="mx-8 mb-24"><a href="#" class="sub-text">Info Site</a></li>
                        <li class="mx-8 mb-24"><a href="#" class="sub-text">Scrambled it to make a type</a></li>
                        <li class="mx-8 mb-24"><a href="index.php" class="sub-text">Public</a></li>
                        <li class="mx-8 mb-24"><a href="#" class="sub-text">There are many variations of passages</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/js/index.js"></script>
</body>
</html>
