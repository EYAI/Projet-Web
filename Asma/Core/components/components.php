<?php

    class components{


        public static function sidebar(){
            ?>
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="stat.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-music"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Melodyo AdminSpace</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider  mb-0 mt-2">

                <!-- Nav Item - Statistiques -->
                <li class="nav-item">
                <a class="nav-link" href="stat.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Statistiques</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                CRUD
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Ajout</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Menu des ajouts:</h6>
                    <a class="collapse-item" href="AjoutReservation2.php">Ajouter une réservation</a>
                    <a class="collapse-item" href="AjoutPromotion2.php">Ajouter une promotion</a>
                    </div>
                </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Listes</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Les differents elements:</h6>
                    <a class="collapse-item" href="ListeReservation.php">Lister les réservations</a>
                    <a class="collapse-item" href="ListePromotion.php">Lister les promotions</a>
                    <a class="collapse-item" href="ListeCommentaire.php">Lister les commentaires</a>
                    </div>
                </div>
                </li>


                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

                </ul>
                <!-- End of Sidebar -->
            <?php
        }
    }

?>