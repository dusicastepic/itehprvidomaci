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

                if (isset($_GET['p_id'])) {
                   $post_id_get=$_GET['p_id'];
                }

                $query="SELECT * from posts where post_id={$post_id_get}";
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





 <!-- Blog Comments -->
<?php 
if (isset($_POST['add_comment'])) {
    $pid=$_GET['p_id'];

    $comment_author=$_POST['comment_author'];
    $comment_email=$_POST['comment_email'];
    $comment_content=$_POST['comment_content'];

    $query_add="INSERT INTO comments(comment_author,comment_email,comment_content,comment_post_id)";
    $query_add .= "VALUES('$comment_author','$comment_email','$comment_content','$pid')";
    $res=$mysqli->query($query_add);
    if (!$res) {
       echo $mysqli->error;
    }
  } ?>
                <!-- Comments Form -->
                <div class="well">
                    <h4>Ostavi komentar:</h4>
                    <form role="form" method="post" action="">

                        <div class="form-group">
                        <label for="comment_author">Autor</label>
                            <input type="text" class="form-control" name="comment_author">
                        </div>

                       <div class="form-group">
                       <label for="comment_email">E-mail</label>
                            <input type="email" class="form-control" name="comment_email">
                        </div>

                        <div class="form-group">
                        <label for="comment_content">Komentar</label>
                            <textarea class="form-control" rows="3" name="comment_content"></textarea>
                        </div>

                        <button type="submit" name="add_comment" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->

                <?php 
                $query="SELECT * from comments where comment_status='odobren' and comment_post_id={$post_id_get} order by comment_date desc";

                $res=$mysqli->query($query);
                while ($row=$res->fetch_assoc()) {
                   $comment_author=$row['comment_author'];
                   $comment_content=$row['comment_content'];
                   $comment_date=$row['comment_date'];
             
 
              

             
                
               ?>
            

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment_author; ?>  
                            <small><?php echo $comment_date; ?> </small>
                        </h4>
                         
                        <?php echo $comment_content; ?>
                      
                        
                    </div>
                </div>
<?php }?>

        </div>

                <!-- Blog Sidebar Widgets Column -->
                <?php include "includes/sidebar.php"; ?>
                <!-- /.row -->

                <hr>
                <!-- Footer -->

                <?php include "includes/footer.php"; ?>


 