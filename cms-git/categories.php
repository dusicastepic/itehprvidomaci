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
                if (isset($_GET['category'])) {
                    $category_id=$_GET['category'];
                }


                $query="SELECT * from posts where post_cat_id=$category_id";
                $result=$mysqli->query($query);

                while($row=$result->fetch_assoc()){
                $post_id=$row['post_id'];
                $post_title=$row['post_title'];
                $post_author=$row['post_author'];
                $post_date=date("d-m-Y H:i", strtotime($row['post_date']));
                $post_image=$row['post_image'];
                
                if (isset($_GET['read'])) {
                      $indictor = $_GET['read'];
                      $post_content=$row['post_content'];
                }
                else{
                $post_content=substr($row['post_content'], 0,100);}
         
           
           

            ?>


            

            <!-- First Blog Post -->
            <h2>
                 <a href="post.php?p_id=<?php echo $post_id;?> "> <?php echo "$post_title" ?> </a>
            </h2>
            <p class="lead">
                by <a href=""> <?php echo "$post_author" ?> </a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> <?php echo "$post_date" ?> </p>
            <hr>
            <img class="img-responsive" src=images/<?php echo "$post_image" ?> alt="">
            <hr>
            <p> <?php echo "$post_content" ?> </p>
            <a method="get" class="btn btn-primary" href="post.php?p_id=<?php echo $post_id;?>"> Pročitaj više <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>






       

       <?php } ?>
        </div>

                <!-- Blog Sidebar Widgets Column -->
                <?php include "includes/sidebar.php"; ?>
                <!-- /.row -->

                <hr>
                <!-- Footer -->

                <?php include "includes/footer.php"; ?>
