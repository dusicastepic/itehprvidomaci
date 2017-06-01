 
          <table class="table table-hovered table-bordered">
            
  <thead>    


  <tr>
    <th>Id</th>
    <th>Naslov</th>
    <th>Autor</th>
    <th>Kategorija</th>
    <th>Datum</th>
    <th>Sadržaj</th>
    <th>Slika</th>
    <th>Tagovi</th>
    <th>Izmena</th>
    <th>Brisanje</th>
    <!-- <th>comments</th>-->

  </tr>

<a href=""></a>

  </thead>
   
<?php 
   $query="SELECT * FROM posts ORDER BY post_date desc";
              $result=$mysqli->query($query);
              while ($row=$result->fetch_assoc()) {

               $post_id=$row['post_id'];
               $post_title=$row['post_title'];
               $post_author=$row['post_author'];
               $post_cat_id=$row['post_cat_id'];
               $post_date=$row['post_date'];
               $post_content=$row['post_content'];
               $post_image=$row['post_image'];
               $post_tags=$row['post_tags'];
               #$post_comment_count=$row['post_comment_count'];
            

    echo "<tr>";
    echo "<td>$post_id</td>";
    echo "<td>$post_title</td>";
    echo "<td>$post_author</td>";
 

     $query="SELECT * from categories where cat_id=$post_cat_id";
    $res=$mysqli->query($query);
     while ($row=$res->fetch_assoc()) {
       $cat_id=$row['cat_id'];
       $cat_title=$row['cat_title'];
      

    }
      
$dat=date('d-m-Y H:i', strtotime($post_date));

    echo "<td>{$cat_title}</td>"; 
    echo "<td> $dat </td>";
    echo "<td>$post_content</td>";
    echo " <td> <img class='img-responsive' src= '../images/$post_image'  alt='img' > </td>";  
    echo "<td>$post_tags</td>";
    echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'> izmeni </a></td>";
    echo "<td><a href='posts.php?delete={$post_id}'> obriši </a></td>";
    #echo "<td>$post_comment_count</td>";
    echo "</tr>";


} ?>
          </table>

          <?php 

            if (isset($_GET['delete'])) {
              $post_id=$_GET['delete'];
              $query="DELETE from posts where post_id={$post_id}";
              $result=$mysqli->query($query);
              confirm($result);
               header("Location: posts.php"); 
            }
           ?>
 