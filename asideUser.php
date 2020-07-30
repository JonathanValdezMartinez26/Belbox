    <aside class="main-sidebar"><!-- Left side column. contains the logo and sidebar -->
        <section class="sidebar"><!-- sidebar: style can be found in sidebar.less -->
            <div class="user-panel"> <!-- Sidebar user panel -->
                <div class="pull-left image">
                    <img src="images/profiles/<?php echo $profile_pic; ?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo $fullname; ?></p>
                    <a><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <ul class="sidebar-menu"><!-- sidebar menu: : style can be found in sidebar.less -->
                <li class="header">NAVEGACIÓN</li>

                <li class="<?php if(isset($active1)){echo $active1;}?>">
                    <a href="HomeUser"><i class="fa fa-user"></i> <span>Mi perfil</span></a>
                </li>

                <li class="<?php if(isset($active3)){echo $active3;}?>">
                    <a href="SharedUser"><i class="fa fa-globe"></i> <span>Compartidos conmigo</span></a>
                </li>

            </ul>
        </section><!-- /.sidebar -->
    </aside>
