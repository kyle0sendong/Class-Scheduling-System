<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="./includes/templates/css/all.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./includes/templates/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,600;1,100&display=swap" rel="stylesheet">
</head>

<body>
    <div class="nav">
        <ul>
            <li><a href="main.php"><b>HOME</b></a></li>
            <li><a href="scheduler.php"><b>SCHEDULER</b></a></li>
            <li><a href="teacher.php"><b>DEPARTMENT</b></a></li>
            <li><a href="curriculum.php"><b>ALL SCHEDULES</b></a></li>
            <li class="nav_btn">
            <span style="font-size: 15px; color: yellow;">
            <a href="login.html.php"><i class="fas fa-sign-out-alt">Logout</i></a></span>
        </ul>
    </div>
    <div class="name">
        <div class="content">
            <h1>Class Scheduler</h1>
    </div>
    <div class="logo">
    <img src="./includes/templates/logosched.png">
    </div>
<!-- -->
    
<main>

    <?=$output?>

</main>

<!--footer -->

    <!-- <div class="links">      @@@removed footer, not showing properly@@
        <a href="https://www.facebook.com/"><span style="font-size: 15px; color: white;">
        <i class="fab fa-facebook-f"></i></span>
        <a href="https://github.com/kyle0sendong/Class-Scheduling-System"><span style="font-size: 15px; color: white;">
        <i class="fab fa-github"></i></span>
        <a href="https://www.google.com/"><span style="font-size: 15px; color: white;">
        <i class="fab fa-google"></i></span></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <footer id="main-footer"> 
        <p>Copyright &copy; 2021, Class Scheduling System</p>
    </footer> -->

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>