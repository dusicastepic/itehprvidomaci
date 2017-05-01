
<?php include "includes/header.php" ?>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/navigation.php" ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Dobrodošli u admin stranicu
                        <small>Autor</small>
                    </h1>

                    <div class="col-xs-6">

                           <?php  
                           if (isset($_POST['submit'])) {
                          $cat_title=$_POST['cat_title'];
                    if ($cat_title=="" || empty($cat_title)) {
                        echo "Polje ne sme biti prazno";
                    }
                    else{
                    
                    $query="INSERT INTO categories(cat_title) VALUES('$cat_title')"; #ili '{$cat_title}' ili '".$cat_title."'
                    $result=$mysqli->query($query);
                    if (!$result) {
                       die("UPIT SE NE MOZE IZVRSITI!" . $mysqli->error);
                    }
                         
                    }
                      }
                    ?>
                   
                        <form action="" method="post">
                            <div class="form-group">
                            <label for="cat_title">Naziv kategorije</label>
                                <input type="text" name="cat_title" class="form-control">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Dodaj kategoriju">
                            </div>

                        </form>
                  
                    </div> <!-- FORMA ZA DODAVANJE KATEGORIJE *** bootsrap class -6 columns xtra small, half of screen -->
                     
                     <div class="col-xs-6">
                       
                        <table class="table table-bordered table-hover">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Naziv kategorije</th>

                                </tr>

                            </thead>
                           
                            <tbody>
                                <tr>
                                 <?php
                     $query="SELECT * FROM categories";
                     $result=$mysqli->query($query);
                     while ($row=$result->fetch_assoc()) {
                         $cat_id=$row['cat_id'];
                         $cat_title=$row['cat_title'];
                    
                     ?>
                                    <td><?php echo($cat_id)?></td>
                                    <td><?php echo($cat_title)?></td>
                                </tr>
                                 <?php  } ?>
                            </tbody>
                        </table>         
                     </div>
                     </div>
                     
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    <?php include "includes/footer.php" ?>