<?php 

if (isset($_POST['create_post'])) {
	$post_title=$_POST['title'];
	$post_cat_id=$_POST['post_category_id'];
	$author=$_POST['author'];
	 

	$post_image=$_FILES['image']['name'];
	$post_image_temp=$_FILES['image']['tmp_name']; #temporary image name/file etc kekeke

	$post_content=$_POST['post_content'];
	$post_tags=$_POST['post_tags'];
	$post_date=date('d-m-y h:m:s');

	move_uploaded_file($post_image_temp, "../images/$post_image");

	$query="INSERT INTO posts(post_title, post_cat_id, post_author,     post_image, post_content,  post_tags ) VALUES ('$post_title', $post_cat_id, '$author'  ,'$post_image',  '$post_content', '$post_tags' ) "; #'' for strings
	$result=$mysqli->query($query);
	confirm($result);
}

?>

<form method="post" action="" enctype="multipart/form-data">

<!--  enctype jer imamo rad sa fajlovima/slikom! forma za dodavanje    -->
	<div class="form-group">
		<label for="title">Naslov</label>
		<input type="text" name="title" class="form-control">
	</div>

	<div class="form-group">
		<label for="post_category">Kategorija</label>
		<select name="post_category_id" id="">
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
		<input type="text" name="author" class="form-control">
	</div>
 
		<div class="form-group">
		<label for="post_image">Slika objave</label>
		<input type="file" name="image" class="form-control">
	</div>

		<div class="form-group">
		<label for="post_tags">Tagovi objave</label>
		<input type="text" name="post_tags" class="form-control">
	</div>

		<div class="form-group">
		<label for="post_content">Sadržaj</label>
		<textarea class="form-control" name="post_content" id=" " cols="30" rows="10">
		</textarea>
	</div>

		</div>

		<div class="form-group">
		<input type="submit" name="create_post" class="btn btn-primary" value="Sačuvaj objavu">
	</div>



</form>