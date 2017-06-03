<?php include 'db.php'; ?>
<?php session_start(); ?>

<?php 

if (isset($_POST['login'])) {
 	$username= $_POST['username']; 
 	$pass= $_POST['password'];  

 	$username=mysqli_real_escape_string($mysqli,$username);
 	$pass=mysqli_real_escape_string($mysqli,$pass);

 	$query="SELECT * from users WHERE username='{$username}'";
 	$select_user_query_res=$mysqli->query($query);
 	if (!$select_user_query_res) {
 		 die('Neuspesno '+mysqli_err());
 	}

 	while ($row=$select_user_query_res->fetch_array()) {
 		  $db_user_id=$row['user_id'];
 		  $db_username=$row['username'];
 		  $db_password=$row['user_password'];
 		  $db_user_firstname=$row['user_firstname'];
 		  $db_user_lastname=$row['user_lastname'];
 		  $db_user_role=$row['user_role'];
 	}

 	 
 	if ($username === $db_username && $pass===$db_password && $db_user_role==='Admin'){

 		$_SESSION['username']=$db_username;
 		$_SESSION['user_firstname']=$db_user_firstname;
 		$_SESSION['user_lastname']=$db_user_lastname;
 		$_SESSION['user_role']=$db_user_role;
 		#setujemo session nakon session_start();
 		header("Location:../admin/");
 	}

 	else{

 		header("Location:../index.php");
 	}
 } ?>