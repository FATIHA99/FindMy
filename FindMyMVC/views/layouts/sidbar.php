<?php include_once '../views/decoupage/header.php' ;?>
<!-- <!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>FindMy</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/styles.css" rel="stylesheet"/>
</head> -->


<!-- <i class='text-dark bx bx-menu fw-bold fs-5' id="header-toggle"></i> -->
    <body id="body-pd">
        <header class="header bg-light" id="header">
            <div class="header_toggle">
                 <i class='bx bx-menu' id="header-toggle"></i> 
            </div>
            <!-- <div class="d-flex user_mrg"> <img src="user.png" alt="img" width="40px"> </div><span class="ms-2">bienvenu fatiha </span> -->
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                  
                      <img src="assets/img/FM.png" width="35%" alt="...">
                        <!-- <i class='bx bx-search' ></i>                         -->
                        <!-- <span class="nav_logo-name ">FindMy</span> -->
               
                 <div class="nav_list  d-flex  flex-column justify-content-center  h-100">
                        <!-- <a href="etudiante.php" class="nav_link "> <i class='nav_icon bx bxs-graduation'></i><span class="nav_name">Students</span> </a>
                        <a href="Proffesseurs.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Teachers</span> </a>
                        <a href="Parents.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Parents</span> </a> --> 
                        <a href="/statistique" class="nav_link"> <i class=' bx bx-line-chart nav_icon '></i> <span class="nav_name fs-5">statistique </span> </a>
                        <a href="/objetsTrouve" class="nav_link"><i class='nav_icon bx bxs-user-detail'></i> <span class=" fs-5 nav_name">declaration privé</span> </a>
                        <a href="#" class="nav_link"> <i class='bx bxs-message-dots' ></i><span class="nav_name fs-5">contact</span> </a>
                </div>
             </div>
                <a href="#" class="nav_link">
                     <i class='bx bx-log-out nav_icon'></i>
                     <span class="nav_name">SignOut</span> 
               </a>
            </nav>

        </div>

        <div> {{content}} </div>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
        <script src="js/scripts.js"></script>
    </body>

</html>