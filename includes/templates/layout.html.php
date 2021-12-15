<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="./includes/templates/css/all.css">
    <link rel="stylesheet" type="text/css" href="./includes/templates/css/style.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,600;1,100&display=swap" rel="stylesheet">
</head>

<body>
    <div class="nav">

        <div class="nav_logo">
            <img src="./includes/templates/css/logo.png" width="40px" height="40px" style="margin-left:7%">
            <h3 >BNHS</h3>
        </div>

        <ul>   
            <li><a href="main.php"><b>HOME</b></a></li>
            <li><a href="scheduler.php"><b>SCHEDULER</b></a></li>
            <li><a href="department.php"><b>DEPARTMENTS</b></a></li>
            <li><a href="schedules.php"><b>SCHEDULES</b></a></li>

        </ul>
        
        <li class="nav_btn">
                <span style="font-size: 15px; color: yellow;">
                    <a href="login.html.php"><i class="fas fa-sign-out-alt">Logout</i></a>
                </span>
        </li>
    </div>
<!-- -->
    
<main>
    
    <?=$output?>

</main>


</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>