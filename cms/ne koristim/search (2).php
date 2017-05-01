		
		<?php 
	 	
		if (isset($_POST['submit'])){
			if ( strlen($_POST['search'])==0) {
				echo "Ukucaj parametar pretrage!";
			}

		$search =  $_POST['search'];

		
		$query="SELECT * FROM posts where post_tags LIKE '%$search%' "; # % represents 0, 1 or multiple characters
		$result=$mysqli->query($query);
		if (!$result) {
			die( "Pretraga nije moguća!" . $mysqli->error);
		}
		 
 }
	#$res = $mysqli->query("SELECT COUNT(*) as TOTALFOUND from posts");
	#$row_array=$res->fetch_assoc();
	#if($row_array['TOTALFOUND']==0); {

	#	echo "Nema rezultata!";
	#}
	#else{
?>
		<div class="col-md-8">
                <?php 
                
                while($row=$result->fetch_assoc()){

                $post_title=$row['post_title'];
                $post_author=$row['post_author'];
                $post_date=date("d-m-Y H:i", strtotime($row['post_date']));
                $post_image=$row['post_image'];
                $post_content=$row['post_content'];
         
           
           

            ?>

            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>

            <!-- First Blog Post -->
            <h2>
                <a href="#"> <?php echo "$post_title" ?> </a>
            </h2>
            <p class="lead">
                by <a href="index.php"> <?php echo "$post_author" ?> </a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> <?php echo "$post_date" ?> </p>
            <hr>
            <img class="img-responsive" src=images/<?php echo "$post_image" ?> alt="">
            <hr>
            <p> <?php echo "$post_content" ?> </p>
            <a class="btn btn-primary" href="#"> Pročitaj više <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>






       

       <?php } ?>
        </div>
	 
		 