   <?php 
    include"includes/header.php";
    include "includes/db.php";
    ?>

       <!-- Navigation -->
    <?php include "includes/navigation.php";?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
           <div class="col-md-8">
                <?php 
                $query="SELECT * from posts";
                $result=$mysqli->query($query);

                while($row=$result->fetch_assoc()){

                $post_title=$row['post_title'];
                $post_author=$row['post_author'];
                $post_date=date("d-m-Y H:i", strtotime($row['post_date']));
                $post_image=$row['post_image'];
                $post_content=$row['post_content'];
         
           
           

            ?>

            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>

            <!-- First Blog Post -->
            <h2>
                <a href="#"> <?php echo "$post_title" ?> </a>
            </h2>
            <p class="lead">
                by <a href="index.php"> <?php echo "$post_author" ?> </a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> <?php echo "$post_date" ?> </p>
            <hr>
            <img class="img-responsive" src=images/<?php echo "$post_image" ?> alt="">
            <hr>
            <p> <?php echo "$post_content" ?> </p>
            <a class="btn btn-primary" href="#"> Pročitaj više <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>






       

       <?php } ?>
        </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
         <?php include "includes/footer.php"; ?>
