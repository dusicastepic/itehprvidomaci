<?php 
include "db.php"; 
if (isset($_GET['q'])) {
	$q=$_GET['q'];
	$query="SELECT * from posts where post_tags LIKE '%$q%'";
	$res=$mysqli->query($query);
	while ($row=$res->fetch_assoc()) {
		$post_id=$row['post_id'];
		$post_tit=$row['post_title'];
		echo "<a href='post.php?p_id=$post_id'>". $post_tit . "</a>" ;
		echo "<br>";
	}
	}

 ?>