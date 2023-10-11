<?php 
    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Futsal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="home.css">

    <script src="https://kit.fontawesome.com/effd3867de.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <div class="logo">
            <li><a href="../index.html"><button><i class="fa fa-sign-out-alt"></i></button></a></li>
        </div>
        <div class="logo">
            <p><a href="../index.html">Blue Sport</a></p>
        </div>
        <ul class="nav-links">
            <p>Muchlas</p>
            <li><a href="#"><button><i class="fa fa-user"></i></button></a></li>
        </ul>
        <span class="toggleBox"><i class="fa-solid fa-bars" id="toggle-bar"></i></span>
    </nav>
    <header>
        <div class="right-section">
            <p>User</p>
            <div class="showing">
                <div class="showing-image"></div>
            </div>
        </div>
        <div class="left-section">
            <h1></h1>
            <p>Nama : <?php echo $_SESSION['User']; ?></p>
            <p>Email : <?php echo $_SESSION['Email']; ?></p>
            <p>No Telpon : <?php echo $_SESSION['Tel']; ?></p>
            <p>Alamat : <?php echo $_SESSION['Add']; ?></p>
            <p>Password : <?php echo $_SESSION['Password']; ?></p>
            <h1></h1>
        </div>
    </header>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./home.css">
    <link rel="shortcut icon" href="./assets/plane.png">
    <title>Profile</title>
</head>
<body>
    <span class="user_hero">
        <a href="home.php">
            <i class="bi bi-arrow-left-circle-fill"></i>
        </a>

    </span>
    
    <div class="aside">

        <div class="head"><i class="bi bi-person-circle"></i>
            <h2><?= $_SESSION['User'] ?></h2>
        </div>
            
    
         <ul>
            <li><span><i class="bi bi-bookmark"></i>
                <p>Saved</p>
            </span></li>

            <li><span>
            <i class="bi bi-wallet"></i>
                <p>Bills</p>
            </span></li>

            <li>
                <span>
                <i class="bi bi-bag"></i>
                <p>My Booking</p>
                </span>

            </li>

            <li><span>
                <i class="bi bi-gear"></i>
                <p>setting</p>
            </span></li>

            <li><span>
            <i class="bi bi-power"></i>
            <p>Logout</p>
            </span></li>
        </ul>
    </div>

    <section>
        <div class="top">
            <h3>Personal Data</h3>
        </div>
            <div class="isi">
                <p>Full Name</p>
                <div><?php echo $_SESSION['User']; ?></div>
           
            </div>
            <div class="isi">
                <p>Email</p>
                <div><?php echo $_SESSION['Email']; ?></div>
           
            </div>
            <div class="isi">
                <p>Phone Number</p>
                <div><?php echo $_SESSION['Tel']; ?></div>
           
            </div>
            <div class="isi">
                <p>Password</p>
                <div><?php echo $_SESSION['Password']; ?></div>
           
            </div>

    </section>
    
</body>
</html> -->