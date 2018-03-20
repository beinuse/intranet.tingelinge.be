<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
        <a href="http://www.tingelinge.be/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>TL</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>KDV Tingelinge</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <!-- LOGIN -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url(); ?>public/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <?php echo $staffID['Firstname'] .' '. $staffID['Lastname']; ?>

                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo base_url(); ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                <p>
                                    <?php echo $staffID['Firstname'] .' '. $staffID['Lastname']; ?>
                                    <small>In dienst sinds: <?php echo $staffID['DateInService']; ?></small>
                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo site_url('/staff/view/') .$staffID['StaffID'] ?>" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url(); ?>users/logout" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li style="color: yellow; font-size: 1.2em; margin-top: 10px; margin-bottom: 10px;" align="center"><?php echo $currentDateTime; ?></li>
                <li class="header" style="color: lime; font-size: 1.5em;">MENU</li>

                <!-- HOME -->
                <li class="treeview">
                    <a href="<?php echo base_url(); ?>dashboard/view">
                        <i class="fa icon-home4"></i> <span>Home</span>
                    </a>
                </li>

                <!-- PERSONEEL -->
                <li class="treeview">
                    <a href="#">
                        <i class="fa icon-female2"></i>
                        <span>Personeel</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url(); ?>staff"><i class="fa fa-circle-o"></i> Overzicht</a></li>
                        <li><a href="<?php echo base_url(); ?>staff/roster"><i class="fa fa-circle-o"></i> Werkrooster</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Verlofaanvraag</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Wissel</a></li>
                    </ul>
                </li>

                <!-- KINDEREN -->
                <li class="treeview">
                    <a href="#">
                        <i class="fa icon-child"></i>
                        <span>Kinderen</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Verjaardagen</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Schoolplanner</a></li>
                    </ul>
                </li>

                <!-- OUDERS -->
                <li class="treeview">
                    <a href="#">
                        <i class="fa icon-users3"></i>
                        <span>Ouders</span>
                    </a>
                </li>

                <!-- LOGISTIEK -->
                <li class="treeview">
                    <a href="#">
                        <i class="fa icon-truck2"></i> <span>Logistiek</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Inventaris voeding</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Inventaris luier</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Boodschappenlijstje</a></li>
                    </ul>
                </li>

                <!-- TOOLS -->
                <li class="treeview">
                    <a href="#">
                        <i class="fa icon-gear"></i> <span>Tools</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Ziko-Vo</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>