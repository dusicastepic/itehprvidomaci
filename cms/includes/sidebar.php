<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Pretraga</h4>
        <form action="search.php" method="post">
            <div class="input-group">
                <input name="search" type="text" class="form-control">
                <span class="input-group-btn">
                    <button name="submit" class="btn btn-default" type="submit"> <!--  mora type="submit" jer ide do baze  -->
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form> <!-- search form-->
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">

                    <?php 
                    $query="SELECT * from categories LIMIT 4";
                    $result=$mysqli->query($query);
                    while ($row=$result->fetch_assoc()) {
                        $cat_title=$row['cat_title'];                               
                        ?>
                        <li><a href="#"><?php echo "$cat_title"; ?> </a>
                        </li>

                        <?php } ?>


                    </ul>
                </div>

            </div>
            <!-- /.row -->
        </div>

        <!-- Side Widget Well -->
        <?php include "widget.php" ?>

    </div>

</div>