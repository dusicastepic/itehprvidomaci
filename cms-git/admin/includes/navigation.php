<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">CMS Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li><a href="../index.php"><img height="35" src="images/home.png"></a></li>
        
        
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['user_firstname']." ".$_SESSION['user_lastname']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                
                <li class="divider"></li>
                <li>
                    <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Odjavi se</a>
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
                <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Objave <i class="fa fa-fw fa-caret-down"> </i></a>
                <ul id="posts_dropdown" class="collapse">
                    <li>
                        <a href="posts.php">Vidi sve objave  </a>
                    </li>
                    <li>
                        <a href="posts.php?source=add_post">Dodaj novu objavu</a>
                        <!-- <a href="includes/add_post.php">Dodaj novu objavu</a>   -->
                    </li>
                </ul>
            </li>
            <li>
                <a href="categories.php"><i class="fa fa-fw fa-wrench"></i>   Kategorije</a>
            </li>
            
            
            <li >
                <a href="comments.php"><i class="fa fa-fw fa-file"></i> Komentari  </a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Korisnici <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="users.php">  Vidi sve korisnike </a>
                    </li>
                    <li>
                        <a href="users.php?source=add_user">  Dodaj novog korisnika</a>
                    </li>
                </ul>
            </li>
 
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>