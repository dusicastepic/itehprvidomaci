<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Pretraga</h4>
        <form action="search.php" method="post">
            <div class="input-group">

                <input name="search" id= "search" type="text" class="form-control">
                <div id="here" >
                    
               </div>
             
             <span class="input-group-btn">

                    <button name="submit" class="btn btn-default" type="submit"> <!--  mora type="submit" jer ide do baze  -->
                        <span class="glyphicon glyphicon-search"></span>
                    </button>

                   
                 
                </span>


            </div>
        </form> <!-- search form-->
        <!-- /.input-group -->
    </div>


  <!-- Login form -->
    <div class="well">
        <h4>Prijava</h4>
        <form action="includes/login.php" method="post">
            <div class="form-group">
                <input name="username" type="text" class="form-control" placeholder="Unesite ime">
               
            </div>
            <div class="input-group">
                <input name="password" type="password" class="form-control" placeholder="Unesite lozinku">
               <span class="input-group-btn">
                   <button class="btn btn-primary" name="login" type="submit">Prijavi se</button>
             
               </span>
            </div>
        </form> <!-- search form-->
        <!-- /.input-group -->
    </div>


    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Kategorije</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">

                    <?php 
                    $query="SELECT * from categories LIMIT 10";
                    $result=$mysqli->query($query);
                    while ($row=$result->fetch_assoc()) {
                        $cat_id=$row['cat_id']; 
                        $cat_title=$row['cat_title'];                               
                        ?>
                        <li><a href="categories.php?category=<?php echo $cat_id; ?>"><?php echo "$cat_title"; ?> </a>
                        </li>

                        <?php } ?>


                    </ul>
                </div>

            </div>
            <!-- /.row -->
        </div>

      

    </div>

</div>