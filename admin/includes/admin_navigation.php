 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">GreenLeaf Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

              <!--   <li><a href="">Users Online: <?php //echo users_online(); ?></a></li> -->

                <!-- <li><a href="">Users Online: <span class="usersonline"></span></a></li> -->

                <li><a href="../web/index.php">Home Site</a></li>
               
               
               
    
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo "Welcome ".$_SESSION['uname'];?>
                
              
                                    
                    
                    
                    <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i>Home Page Item <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts_dropdown" class="collapse">
                            <li>
                                <a href="home.php"><i class="fa fa-dot-circle-o"></i> 1st Card </a>
                            </li>
                            <li>
                                <a href="home1.php"><i class="fa fa-dot-circle-o"></i>  2nd Card </a>
                            </li>
                            <li>
                                <a href="home2.php"><i class="fa fa-dot-circle-o"></i>  3rd Card </a>
                            </li>
                            <!-- <li>
                                <a href="posts.php?source=add_post">Add Posts</a>
                            </li> -->
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="./categories.php"><i class="fa fa-sort-numeric-asc (numbers)"></i> Categories</a>
                    </li> -->
                    

                    <li>
                        <a href="services.php"><i class="fa fa-wrench"></i> Services</a>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-dribbble"></i> Categories <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="plants.php"><i class="fa fa-tree"></i> Plants</a>
                            </li>
                            <li>
                                <a href="seeds.php"><i class="fa fa-leaf"></i> Seeds</a>
                            </li>
                            <li>
                                <a href="fertilizers.php"><i class="fa fa-circle-o-notch"></i> Fertilizerss</a>
                            </li>
                            <li>
                                <a href="accessories.php"><i class="fa fa-briefcase"></i> Accessories</a>
                            </li>
                         
                        </ul>
                    </li>
                    <li>
                                <a href="order_item.php"><i class="fa fa-check-square"></i> Ordered items</a>
                    </li>
                 
                    <li>
                                <a href="order_services.php"><i class="fa fa-check-circle-o"></i> Ordered Services</a>
                    </li>

                    <li>
                                <a href="orders.php"><i class="fa fa-truck"></i> Orders</a>
                    </li>
                    <li>
                                <a href="users.php"><i class="fa fa-user"></i> Users</a>
                    </li>
                    <li>
                        <a href="profile.php"><i class="fa fa-fw fa-desktop"></i> Admin Details</a>
                    </li>

                    <!-- <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Home Page Edit <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="home.php">1st Card</a>
                            </li>
                            <li>
                                <a href="seeds.php">2nd Card</a>
                            </li>
                            <li>
                                <a href="fertilizers.php">3rd Card</a>
                            </li>
                            <li>
                                <a href="accessories.php">Accessories</a>
                            </li>
                        </ul>
                    </li>
                     -->
                    <li>
                        <a href="about_greenleaf.php"><i class="fa fa-info-circle"></i> About GreenLeaf</a>
                    </li>
               
                    
                    
                </ul>
            </div>
            
            
            
          
        </nav>
        