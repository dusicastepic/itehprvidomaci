<?php 

if (isset($_POST['create_user'])) {
	$username=$_POST['username'];
	$user_password=$_POST['user_password'];
	$user_firstname=$_POST['user_firstname'];
    $user_lastname=$_POST['user_lastname'];
    $user_email=$_POST['user_email'];
	#$user_image=$_FILES['user_image']['name'];
	#$user_image_temp=$_FILES['user_image']['tmp_name']; #temporary image name/file etc kekeke

	$user_role=$_POST['user_role'];
 

	#move_uploaded_file($user_image_temp, "../images/$user_image");

	$query="INSERT INTO users( username, user_password,     user_firstname, user_lastname,  user_email,  user_role) VALUES ('$username',' $user_password', '$user_firstname'  ,'$user_lastname',  '$user_email',  '$user_role' ) "; #'' for strings
	$result=$mysqli->query($query);
	confirm($result);
}

?>

<form method="post" action="" enctype="multipart/form-data">

<!--  enctype jer imamo rad sa fajlovima/slikom! forma za dodavanje    -->

<div class="form-group">
		<label for="author">Ime</label>
		<input type="text" name="user_firstname" class="form-control">
	</div>
	<div class="form-group">
		<label for="author">Prezime</label>
		<input type="text" name="user_lastname" class="form-control">
	</div>
	<div class="form-group">
		<label for="title">Korisničko ime</label>
		<input type="text" name="username" class="form-control">
	</div>
   	
<div class="form-group">
		<label for="user_role"></label>
		<select   name="user_role" id="">
							<?php
				$query="SELECT DISTINCT user_role FROM users ";
                $result=$mysqli->query($query);
                confirm($result);
                   while($row=$result->fetch_assoc()){
                 
                    $user_role=$row['user_role'];
                    echo "<option> {$user_role} </option>";   
                }
                    ?>
		</select>

	</div>
 
	
	<div class="form-group">
		<label for="post_tags">Email</label>
		<input type="email" name="user_email" class="form-control">
	</div>
	<div class="form-group">
		<label for="post_tags">Lozinka</label>
		<input type="password" name="user_password" class="form-control">
	</div>
	  
  




		

		 
		</div>

		<div class="form-group">
		<input type="submit" name="create_user" class="btn btn-primary" value="Sačuvaj korisnika">
	</div>



</form>