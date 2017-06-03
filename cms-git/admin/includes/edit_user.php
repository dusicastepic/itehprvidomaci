<?php if (isset($_GET['uid'])) {
	$user_id_get=$_GET['uid'];
	$query_select="SELECT * FROM users where user_id=$user_id_get";
	$res=$mysqli->query($query_select);
	while ($row=$res->fetch_assoc()) {
		 $username=$row['username'];
		 $user_password=$row['user_password'];
		 $user_firstname=$row['user_firstname']; 
		 $user_lastname=$row['user_lastname'];
		 $user_email=$row['user_email'];
		 $user_role=$row['user_role'];
	}
} ?>

<?php 
 

 if (isset( $_POST['edit_user'] )) {
  	$username=$_POST['username']; 
	$user_password=$_POST['user_password'];
	$user_firstname=$_POST['user_firstname'];
    $user_lastname=$_POST['user_lastname'];
    $user_email=$_POST['user_email'];  
 
if (isset($_GET['uid'])) {
	$user_id=$_GET['uid'];}
  $query="UPDATE users SET";
               $query .=" username='{$username}',";
               $query .="user_password='{$user_password}',";
               $query .="user_firstname='{$user_firstname}',";
               $query .="user_lastname='{$user_lastname}',";
               $query .="user_email='{$user_email}' ";  
               $query .=" where user_id={$user_id}";

             
              $result=$mysqli->query($query);

              confirm($result);
              
             
               
  }?>


<form method="post" action="">

<!--  enctype jer imamo rad sa fajlovima/slikom! forma za dodavanje    -->

<div class="form-group">
		<label for="author">Ime</label>
		<input type="text" name="user_firstname" class="form-control" value=<?php echo $user_firstname; ?>>
		
	</div>
	<div class="form-group">
		<label for="author">Prezime</label>
		<input type="text" name="user_lastname" class="form-control" value=<?php echo $user_lastname; ?>>
	</div>
	<div class="form-group">
		<label for="username">Korisničko ime</label>
		<input type="text" name="username" class="form-control" value=<?php echo $username; ?>>
	</div>
   	<!--
<div class="form-group">
		<label for="user_role"></label>
		<select name="user_role" id="">
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

	</div>-->
 
	
	<div class="form-group">
		<label for="post_tags">Email</label>
		<input type="email" name="user_email" class="form-control" value=<?php echo $user_email; ?>>
	</div>
	<div class="form-group">
		<label for="post_tags">Lozinka</label>
		<input type="password" name="user_password" class="form-control" value=<?php echo $user_password; ?>>
	</div>
	  
 
		   
		</div>

		<div class="form-group">
		<input type="submit" name="edit_user" class="btn btn-primary" value="Sačuvaj korisnika">
	</div>


</form>	 