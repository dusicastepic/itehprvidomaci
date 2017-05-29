<?php 
if (isset($_GET['p_id'])) {
	$post_id_get=$_GET['p_id'];
}

    
   $query="SELECT * FROM posts where post_id={$post_id_get}";
              $result=$mysqli->query($query);
              while ($row=$result->fetch_assoc()) {

               $post_id=$row['post_id'];
               $post_title=$row['post_title'];
               $post_author=$row['post_author'];
               $post_cat_id=$row['post_cat_id'];
               $post_date=$row['post_date'];
               $post_content=$row['post_content'];
               $post_image=$row['post_image']; 
			 
               $post_status=$row['post_status'];
               $post_tags=$row['post_tags'];
               #$post_comment_count=$row['post_comment_count'];
            
               }
             
               ?>
<?php

               if(isset($_POST['update_post'])){
               #$post_id=$_POST['post_id'];
               $post_title=$_POST['post_title'];
               $post_category_id=$_POST['post_category'];
               $post_author=$_POST['post_author'];
               $post_status=$_POST['post_status'];
               $post_image=$_FILES['image']['name']; 
			   $post_image_temp=$_FILES['image']['tmp_name'];
               $post_tags=$_POST['post_tags'];
               $post_content=$_POST['post_content'];
              
                
              move_uploaded_file($post_image_temp, "../images/$post_image");
                #moving image from temporary to permanent location
              

              # $query_for_cat_title="SELECT cat_id from categories where cat_title = '{$post_cat}'";
               #$result=$mysqli->query($query);

 if (empty($post_image)) {
	   $query="SELECT * FROM posts where post_id=$post_id_get";
	   $res=$mysqli->query($query);
	   while ($row=$res->fetch_assoc()) {
	   	 $post_image=$row['post_image']; 
	   }
   }


               $query="UPDATE posts SET";
               $query .=" post_title='{$post_title}',";
               $query .="post_author='{$post_author}',";
               $query .="post_status='{$post_status}',";
               $query .="post_tags='{$post_tags}',";
               $query .="post_content='{$post_content}',";
               $query .="post_date=now(),";
              # $query .="post_image={$post_image}";
               $query .="post_cat_id= {$post_category_id},";
                $query .="post_image= '{$post_image}'";
               $query .=" where post_id={$post_id_get}";

             
              $result=$mysqli->query($query);
              confirm($result);

             
 
	     }


              

?>		
 







<form method="post" action="" enctype="multipart/form-data">

<!--  enctype jer imamo rad sa fajlovima/slikom! forma za dodavanje    -->
	<div class="form-group">
		<label for="title">Naslov</label>
		<input value="<?php echo "$post_title";?>" type="text" name="post_title" class="form-control">
	</div>

	<div class="form-group">
		<label for="post_category">ID Kategorije</label>
		<select name="post_category" id="">
			 
				<?php
				$query="SELECT * FROM categories order by cat_title asc";
                $result=$mysqli->query($query);
                confirm($result);
                   while($row=$result->fetch_assoc()){
                   	$cat_id=$row['cat_id'];
                    $cat_title=$row['cat_title'];
                    echo "<option value='$cat_id'> {$cat_title} </option>";  #Zaboraavila si value='$cat_id'!! 
                }
                    ?>
			 
		</select>
	</div>
 

	<div class="form-group">
		<label for="author">Autor</label>
		<input value="<?php echo "$post_author";?>" type="text" name="post_author" class="form-control">
	</div>

		<div class="form-group">
		<label for="post_status">Status objave</label>
		<input value="<?php echo "$post_status";?>" type="text" name="post_status" class="form-control">
	</div>

		<div class="form-group">
		<label for="post_image">Slika objave</label>
		<img  name="image" width =100 src="../images/<?php echo $post_image;?>" >
		<input type="file" name="image" class="form-control">
	</div>

		<div class="form-group">
		<label for="post_tags">Tagovi objave</label>
		<input value="<?php echo "$post_tags";?>" type="text" name="post_tags" class="form-control">
	</div>

		<div class="form-group">
		<label for="post_content">Sadržaj</label>
		<textarea  class="form-control" name="post_content" id=" " cols="30" rows="10">
		<?php echo "$post_content";?>
		</textarea>
	</div>

		</div>

		<div class="form-group">
		<input type="submit" name="update_post" class="btn btn-primary" value="Sačuvaj objavu">
	</div>



</form>