<?php include_once '../views/decoupage/header.php' ;?>
    <body id="body-pd">
        <header class="header bg-light" id="header">
            <div class="header_toggle">
                 <i class='bx bx-menu' id="header-toggle"></i> 
            </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <img src="assets/img/FM.png" width="35%" alt="...">
                    <div class="nav_list  d-flex  flex-column justify-content-center  h-100">
                            <a href="/statistique" class="nav_link"> <i class=' bx bx-line-chart nav_icon '></i> <span class="nav_name fs-5">statistique </span> </a>
                            <a href="/objetsTrouve" class="nav_link"><i class='bx bx-check-shield nav_icon'></i> <span class=" fs-5 nav_name">declaration privé</span> </a>
                            <a href="/messages" class="nav_link"> <i class='bx bx-message' ></i><span class="nav_name fs-5">contact</span> </a>
                    </div>
                </div>
                <a href="/logout" class="nav_link">
                     <i class='bx bx-log-out nav_icon'></i>
                     <span class="nav_name">déconnexion</span> 
               </a>
            </nav>
        </div>
        <div> {{content}} </div>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
        <script src="js/scripts.js"></script>
    </body>

</html>