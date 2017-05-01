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