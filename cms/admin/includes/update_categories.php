   <form action="" method="post">


                <div class="form-group">
                  <label for="cat_title">Izmeni kategoriju</label>

                  <?php 
                                                  
                  if (isset($_GET['izmeni'])) {
                   $izmeni_cat_id=$_GET['izmeni'];
                   $query="SELECT * FROM categories WHERE cat_id={$izmeni_cat_id}";
                   $result=$mysqli->query($query);
                     
                   while($row=$result->fetch_assoc()){
                    $cat_title=$row['cat_title'];

                    ?>
                    <input class="form-control" type="text" name="cat_title" value="<?php if (isset($cat_title)) {
                      echo $cat_title;
                    } ?>" >
                      <?php } }  ?>


                    <?php  

                        

                         if (isset($_POST['update'])) {
                     $cat_title=$_POST['cat_title'];
                   
                     $query="UPDATE categories SET cat_title='{$cat_title}' WHERE cat_id='{$cat_id}'";
                     $result=$mysqli->query($query);

                   header("Location: categories.php"); 
                    

} 


                   








                                          
                  
                  ?>
                                




                  </div>
                  <div class="form-group">


                  <input class="btn btn-primary" type="submit" name="update" value="Izmeni kategoriju">
                </div>

              </form>